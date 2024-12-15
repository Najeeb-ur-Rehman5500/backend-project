<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';

// connection create
$conn = mysqli_connect( $servername , $username  , $password , $dbname );


// check connection
 if(!$conn){
    die("connection failed" . mysqli_connect_error());
 }

 echo "connected successfully";

 ?>