<?php
//connexion a la base de données.
$servername = "localhost";
$username = "root";
$password = "";
$bdname= "bd_ajax";
$conn= new mysqli($servername,$username,$password,$bdname);
if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}
else{
    //echo "Connection réussi";
}