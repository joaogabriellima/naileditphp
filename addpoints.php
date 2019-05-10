<?php 
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$idClient = $_POST['cliente'];
$pointsToAdd = $_POST['pontos'];

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$db = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

$searchClient = "SELECT * FROM cliente WHERE Id = '$idClient'";

$res_client = mysqli_query($db, $searchClient);

try {
    if (mysqli_num_rows($res_client) > 0) {
    
        $rowCli = $res_client->fetch_array(MYSQLI_NUM);
        
        $pointsadd = $rowCli[4] + $pointsToAdd;
        
        $queryToClient = "UPDATE cliente SET Pontos = '$pointsadd' WHERE Id = '$idClient'";
        
        if ($conn->query($queryToClient) === TRUE) {
            echo "";
        } else {
            throw new Exception("Um erro ocorreu: " . $conn->error);
        }
        
        $conn->close();
    } else {
       throw new Exception('Falha na adição de pontos');
    }
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