<?php

//Connexion
require "database.php";
// Récupérer les valeur saisiees
$id=$_POST['id'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$contenu= htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$sql = "update  message  set nom ='".$nom."', email='".$email."', contenu= '".$contenu."' where id='".$id."'";

if ($conn->query($sql) === TRUE) {
    // require("data.php");
    header('Location: http://127.0.0.1/D_FOUR/form.php');
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 ?>