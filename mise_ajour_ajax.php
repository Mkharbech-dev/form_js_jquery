<?php

require("database.php");
/*
$id = $_POST['id'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$contenu = htmlspecialchars($_POST['message'], ENT_QUOTES); */

$id = $_GET['id'];
$nom = $_GET['nom'];
$email = $_GET['email'];
$contenu = htmlspecialchars($_GET['contenu'], ENT_QUOTES); 

//echo $nom ." ".$email." ".$contenu;

$sql = "update message set nom='".$nom."', email='".$email."', contenu='".$contenu."' where id='".$id."'";

if ($conn->query($sql) === TRUE) {
   // require("data.php");
   //header('Location: http://127.0.0.1/day5');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>