<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "ongsp";
$mysqli = new mysqli($host, $usuario, $senha, $bd);

//print_r($mysqli);

if (!$mysqli) {
    //echo "Falhou na conexao:(".mysqli->connect_errno.")".$mysqli->connect_error; 
    echo ("Can't connect to localhost. Errorcode: %d\n" . mysqli_connect_errno());
}

    if (mysqli_connect_errno()) {
        die('N�o foi poss�vel conectar-se ao banco de dados: ' . mysqli_connect_error());
        exit();
    }
   


