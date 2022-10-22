<?php

//Connexion
require "database.php";
// Récupérer les valeur saisiees
$id = $_GET['id'];

 $sql = "delete from message where id='" .$id."'";

 if(TRUE==$conn->query($sql)){
    require "load.php";
 }else{
    echo "Error:".$sql."<br>".$conn->error;
 }