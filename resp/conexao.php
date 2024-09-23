<?php
$dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'escola';
    $dbName = 'joias';
   
    $conexao = new mysqli($dbHost, $dbUsername,$dbPassword, $dbName);

    $sql = mysqli_query($conexao,"select * from computador")



?>