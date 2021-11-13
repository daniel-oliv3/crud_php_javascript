<?php
include_once "conexao.php";

$query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 10";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    var_dump($row_usuario);
}

?>