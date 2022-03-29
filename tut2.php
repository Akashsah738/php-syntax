<?php


//connection to the database

$servername = "localhost";
$username = "root";
$password = "";

//create a connection

$conn = mysqli_connect($servername,$username,$password);

//check the connection

if(!$conn){
    die("connection is failed to connect".mysqli_connect_error());
}
else{
    echo "conection is sucessfully connected<br>";
}

//create a database
$sql = "CREATE DATABASE Akash1";
$result = mysqli_query($conn,$sql);

//check for the database creation success

if($result){
    echo "The database was created sucessfully";
}
else{
    echo "The database was not created successfully because of this error--->".mysqli_error($conn);
}



?>