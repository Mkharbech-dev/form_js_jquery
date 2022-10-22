<?php
//Connexion
require "database.php";
// Récupérer les valeur saisiees
$nom = htmlspecialchars($_GET['nom']);
$email = htmlspecialchars($_GET['email']);
$msg = htmlspecialchars($_GET['message']);
if(!empty($nom) AND !empty($email) AND !empty($msg)){
$sql = "INSERT INTO message (nom, email, contenu) Values('".$nom."','".$email."','".$msg."')";

if(TRUE==$conn->query($sql)){
   require "load.php";
}else{
   echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();

}else{
   
}
 
 






