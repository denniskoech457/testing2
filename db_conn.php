<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "waste_management_system";

$conn = mysqli_connect($sname, $uname , $password, $db_name);

if(!$conn) {
    echo "Connection failed!";
    exit();
}
?>