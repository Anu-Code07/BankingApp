<?php

$db="bank";
$server="localhost";
$user="root";
$password="";

$link=mysqli_connect($server,$user,$password,$db);

if(mysqli_connect_error())
die("Failed to Connet ").mysqli_connect_error();



?>