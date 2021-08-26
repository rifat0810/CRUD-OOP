<?php
$connection = new mysqli("localhost", "root", "0810", "crudphp");
if($connection->connect_error){
    die("Error".$connection->connect_error);
}
?>