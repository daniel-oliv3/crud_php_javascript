<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_dados-crud-php";
$port = 3306;


try {
    //Conxão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbnme=" . $dbname, $user, $pass);

    //Conxão sem a porta
    //$conn = new PDO("mysql:host=$host;dbnme=" . $dbname, $user, $pass);

    //echo "Conexão com o banco de dadas realizada com sucesso!";
}catch(PDOException $err){
    echo "Erro: Conexão com o banco de dadas não foi realizada com sucesso! Erro gerado " .$err->getMessage();
}

?>