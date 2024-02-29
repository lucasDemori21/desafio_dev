<?php
require_once '../config/db/conn.php';

$sql = "INSERT INTO users (nome, email, senha) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['senha']."')";

if(mysqli_query($conn, $sql)){
    echo 'ok';
}else{
    echo 'erro';
}

?>