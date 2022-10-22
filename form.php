<?php require 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GK</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="back_body">
    <div class="mt-5 mx-auto row  container text-center">
        <section class="col-8 my_color2 px-5 py-2 mx-auto text-white text-center">
        <div class="alert alert-danger d-none mt-3" id="message"></div>
        <h1 class="text-center">Formulaire </h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name"  id="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"> 
            </div>
            <div class="mb-3">
                <label for="msg" class="form-label">Message</label>
                <textarea type="textarea" class="form-control" id="msg" name="msg" placeholder="taper votre message"> </textarea>
            </div>
            <button type="submit" onclick="insertData()" class="w-100 mt-3 py-2 btn btn_back text-center text-white" name="validate">Envoyer</button>
            <button onclick="load_message()" class="w-100 mt-3 py-2 btn btn_load text-center text-white">Charger</button>
        </div>
        </section>
        <section class="col-12 mt-5 px-5 my_color3 py-2 mx-auto text-white text-center">
            <div id="maDiv" class="mt-4"></div>
        </section>
            
    </div>
    </div>
    <script src="app.js"></script>
</body>
</html>