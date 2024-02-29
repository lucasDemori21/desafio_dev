<?php
require_once '../config/db/conn.php';

$sql = "UPDATE users 
SET nome = '".$_POST['nome']."', 
email ='".$_POST['email']."', 
senha = '".$_POST['senha']."' 
WHERE id = '".$_POST['id']."'";

if(mysqli_query($conn, $sql)){
    echo 'ok';
}else{
    echo 'erro';
}

?>