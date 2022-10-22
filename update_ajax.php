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
<div class="container">
<h3 align="center">Formulaire de mise à jour d'un message</h3>
<div style="margin: 20px;" name="postMessage">
    <section class="col-8 my_color2 px-5 py-2 mx-auto text-white text-center">
        <input type="hidden" id="id" value="<?php echo $id;?>"/>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" value="<?php echo $nom;?>" class="form-control" name="nom" id="nom_ajax" placeholder="Enter nom">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="<?php echo $email;?>" class="form-control" name="email" id="email_ajax" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="contenu">Message</label>
            <textarea name="message" class="form-control" id="contenu_ajax" placeholder="taper votre message"><?php echo $contenu;?></textarea>
        </div>
        <button onclick="updateMessage()" class="w-50 mt-3 py-2 btn btn_load text-center text-white">Modifier</button>
    </section>
    <div>
</div>
<?php
?>