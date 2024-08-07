<?php
$servername="localhost";
$username="root";
$password="";
$db_name="esport_track";

$con=new mysqli($servername,$username,$password,$db_name,3306);
if ($con->connect_error){
    die("Connection failed: " .$con->connect_error );
}
else{
    echo("");
}
?> 