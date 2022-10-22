<?php

//Connexion
require "database.php";
// Récupérer les valeur saisiees
$id = $_GET['id'];

$nom="";
$email="";
$contenu="";

$sql = "select * from message where id='".$id."'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {

    $nom=$row["nom"] ;
    $email=$row["email"];
    $contenu=$row["contenu"];
}
?>
<h3 align="center">Formulaire de mise à jour d'un message</h3>
<div style="margin: 20px;" name="postMessage" class="col-8 my_color2 px-5 py-2 mx-auto text-white text-center">
    
    <form action="miseAjour.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" value="<?php echo $nom;?>" class="form-control" name="nom" id="nom" placeholder="Enter nom">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="<?php echo $email;?>" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="contenu">Message</label>
            <textarea name="message" class="form-control" id="contenu" placeholder="taper votre message"><?php echo $contenu;?></textarea>
        </div>
        <input type="submit" onclick="" class="btn btn-primary" value="update">
    </form>
    
    <div>
<?php
?>