<?php
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$nome = $_POST['nome'];
$pontos = $_POST['pontos'];

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

try {
    $sql = "INSERT INTO promocao (Nome, Pontos)
    VALUES ('$nome', '$pontos')";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        throw new Exception("Ocorreu um erro no cadastro: ". $conn->error);
    }
    
    $conn->close();
}
catch(Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        ),
    ));
}


?>