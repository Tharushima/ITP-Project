<?php

$sname ="localhost";
$uname ="root";
$password="";

$db_name= "Control_Print_Ltd";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn){
    echo "Connection failed!";
}