<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dBName = "login-system";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dBName  );

if(!$conn){
    die("Connection failed: " . msqli_connect_error() );
}