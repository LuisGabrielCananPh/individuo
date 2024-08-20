<?php
$dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'escola';
    $dbName = 'projeto do pc';
   
    $conexao = new mysqli($dbHost, $dbUsername,$dbPassword, $dbName);

    $sql = mysqli_query($conexao,"select * from computador")



?>