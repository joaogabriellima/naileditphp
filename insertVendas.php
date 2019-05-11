<?php
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$idservice = $_POST['servico'];
$idCliente = $_POST['cliente'];

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$db = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

$cpfQuery = "SELECT * FROM cliente WHERE Id = '$idCliente'";
$serviceQuery = "SELECT * FROM promocao WHERE Id = '$idservice'";
$res_cpf = mysqli_query($db, $cpfQuery);
$res_service = mysqli_query($db, $serviceQuery);

try {
    if ((mysqli_num_rows($res_cpf) > 0) and (mysqli_num_rows($res_service) > 0)) {
        
        $rowCli = $res_cpf->fetch_array(MYSQLI_NUM);
        $rowSer = $res_service->fetch_array(MYSQLI_NUM);
        
        $pointsSubtract = $rowCli[4] - $rowSer[2];
        
        $queryToClient = "UPDATE cliente SET Pontos = '$pointsSubtract' WHERE Id = '$rowCli[0]'";
        
        if ($conn->query($queryToClient) === TRUE) {
            echo "";
        } else {
            throw new Exception('Ocorreu um erro no cadastro!');
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