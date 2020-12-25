<?php

$serverName = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname = "webshop";

$conn = mysqli_connect($serverName, $dBusername, $dBpassword, $dBname);

if(!$conn){
    echo 'Failed';
    die("Connection failed: " . mysqli_connect_error());
}