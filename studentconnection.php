<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'UserAccount';
$conn = mysqli_connect($host, $username, $password, $dbname);
if($conn){
   echo "successfully connected!";
}else{
    die("connection failed");
}

?>