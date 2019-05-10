<?php
$dbuser = "root";
$dbpass = "";
$dbserver = "localhost";
$dbname = "nailedit";

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
$db = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

$idcli = $_POST['cliente'];

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

    if (isset($_POST['cliente'])) {
        
        // Indo ao banco pegar os pontos atuais do cliente
        $cpfQuery = "SELECT * FROM cliente WHERE Id = '$idcli'";
        $res_cpf = mysqli_query($db, $cpfQuery);

        $rowCli = $res_cpf->fetch_array(MYSQLI_NUM);
        $pontosAtuais = $rowCli[4];

        $servicesQuery = "SELECT * FROM promocao WHERE Pontos <= '$pontosAtuais'";
        $res_service = mysqli_query($db, $servicesQuery);
        $arraytest = array();

        while ($row = mysqli_fetch_array($res_service)) {
            array_push($arraytest, $row);
        }

        echo json_encode($arraytest);

    }
?>