<?php 
require_once '../config/db/conn.php';

$sql = "DELETE FROM users where id = " . $_POST['id'];

if (mysqli_query($conn, $sql)){
    echo "ok";
} else {
    echo "erro";
}
?>