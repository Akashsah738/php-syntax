<?php

echo "welcome to the stage where we are ready to get connected to the database<br>";

//connection to the database

$server = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($server,$username,$password);


//check the connection
if(!$conn){
    die("not connected".mysqli_connect_error());

}else{
    echo"sucessfully connected";
}

?>