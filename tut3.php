<?php

//create a table 
//connection to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "Akash1";

//create a connection

$conn = mysqli_connect($servername,$username,$password,$database);

//check the connection

if(!$conn){
    die("connection is failed to connect".mysqli_connect_error());
}
else{
    echo "conection is sucessfully connected<br>";
}

//create a table in database

$sql = "CREATE TABLE `phpuserdata` ( `sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `tstamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);

//check for the table creation success

if($result){
    echo "The Table was created sucessfully";
}
else{
    echo "The Table was not created successfully because of this error--->".mysqli_error($conn);
}

?>