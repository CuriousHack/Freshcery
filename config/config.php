<?php

if(!isset($_SERVER['HTTP_REFERER'])){
    //redirect to  index page
    header('location: ../index.php');
}
$hostname = "localhost";
$database = "freshcery";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn){
   die("Connection failed". mysqli_connect_error());
}
?>