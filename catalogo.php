<?php 

    $db = mysqli_connect('localhost', 'root', '', 'nailedit');
                                
    $sql = "SELECT * FROM promocao";
    $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='col-md-4 service-item'>";
        echo " <div class='service-icon'><i class='fa fa-check'></i></div>";
        echo "<h4 class='service-title'><a href=''>". $row['Nome'] . "</a></h4>";
        echo "<p class='service-description'>Pontos: ". $row['Pontos'] . "</p>";
        echo "</div>";
    }
?>