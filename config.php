<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$db="api_testing";
            

$con= mysqli_connect('localhost','root','','api_testing');
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>