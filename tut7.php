<?php

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
 $sql = "SELECT * FROM `phpuserdata`";
 $result = mysqli_query($conn,$sql);

 //find the nubers of record return
 $num = mysqli_num_rows($result);
 echo $num;

 //display the rows returned by the sql query

 if($num > 0){
    //  $row = mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo "<br>";
    //  $row = mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo "<br>";
    //  $row = mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo "<br>";
    //  $row = mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo "<br>";

    //we can fetch data in a better way using while loop
    while($row = mysqli_fetch_assoc($result)){
        
        echo var_dump($row);
        echo "<br>";
    }
 }
?>