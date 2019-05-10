<?php
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$db = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

$sql_cpf = "SELECT * FROM cliente WHERE CPF = '$cpf'";
$res_u = mysqli_query($db, $sql_cpf);

try {
    if (mysqli_num_rows($res_u) > 0) {
        throw new Exception('Já existe um usuário com esse CPF!');
    } else {
        
        $sql = "INSERT INTO cliente (CPF, Nome, Telefone, Pontos)
        VALUES ('$cpf', '$nome', '$telefone', 0)";
        
        if ($conn->query($sql) === TRUE) {
            //echo "<script> alert('Cliente cadastrado com sucesso!'); window.location.href = 'index.php';</script>";
            echo "";
        } else {
            throw new Exception('Ocorreu um erro ao cadastrar cliente: ' . $conn->error);
        }
        
        $conn->close();
    }
}
catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        ),
    ));
}


?>