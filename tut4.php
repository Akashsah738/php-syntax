<?php

// connect database

$server = "localhost";
$username = "root";
$password = "";
$database = "Akash1";

//create a connection

$conn = mysqli_connect($server,$username,$password,$database);

//check for the connection

if(!$conn){
    die("not connected".mysqli_connect_error());
}
else{
    echo "successfully connected <br>";
}
//sql query to be executed
$sql = "INSERT INTO `phpuserdata` (`sno`, `name`, `age`, `tstamp`) VALUES ('3', 'prakash', '24', current_timestamp())";
$result = mysqli_query($conn,$sql);
//Add the new userdata to the table

if($result){
    echo "The record has been inserted sucessfully";
}
else{
    echo "The record has not inserted successfully because of this error--->".mysqli_error($conn);
}
else{
    echo "ok";
}

?>