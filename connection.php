<?php
$server = "localhost";
$dbname = "tutorial";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$dbname);

if(!$conn){
    echo "connection failed";
} else {
    //  echo "connected successfully";    
}
?>