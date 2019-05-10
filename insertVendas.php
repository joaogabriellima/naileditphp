<?php
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$idservice = $_POST['dropservice'];
$idCliente = $_POST['clientdrop'];

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$db = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

$cpfQuery = "SELECT * FROM cliente WHERE Id = '$idCliente'";
$serviceQuery = "SELECT * FROM promocao WHERE Id = '$idservice'";
$res_cpf = mysqli_query($db, $cpfQuery);
$res_service = mysqli_query($db, $serviceQuery);

if ((mysqli_num_rows($res_cpf) > 0) and (mysqli_num_rows($res_service) > 0)) {
    
    $rowCli = $res_cpf->fetch_array(MYSQLI_NUM);
    $rowSer = $res_service->fetch_array(MYSQLI_NUM);
    
    // index 4 é pontos do cliente
    // index 2 é pontos do serviço
    
    $pointsSubtract = $rowCli[4] - $rowSer[2];
    
    $queryToClient = "UPDATE cliente SET Pontos = '$pointsSubtract' WHERE Id = '$rowCli[0]'";
    
    if ($conn->query($queryToClient) === TRUE) {
        echo "<script> alert('Serviço contratado com sucesso'); window.location.href = 'index.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    echo "<script> alert('Ocorreu uma falha no cadastro!');</script>"; 
}

?>