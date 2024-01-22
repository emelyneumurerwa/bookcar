<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$severname="localhost";
$username="root";
$password="";
$dbname="project";
$error="";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if($conn->connect_error)
{
    $error="Something went wrong.";
    die("Connection failed".$conn->connect_error);
}
$error="Done successfull";
?>