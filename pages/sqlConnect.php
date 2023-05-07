<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "missbille";


$db_connect = mysqli_connect($host,$user,$pass,$db_name);
if (!$db_connect) {
    die(mysqli_error($db_connect));
}
?>