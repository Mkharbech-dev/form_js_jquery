
function validate(){
    var nom = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("msg").value;
    var message = document.getElementById("message");

    if(nom =="" || email =="" || msg =="" ){
        message.innerHTML ="Veuillez remplir tous les champs svp";
        message.classList.remove("d-none");
    }else{
        message.classList.add("d-none");
        document.getElementById("name").value="";
        document.getElementById("email").value="";
        document.getElementById("msg").value="";
    }
}

function insertData(){
validate();   
//code ajax
    xhr= null;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if ((xhr.readyState ==4) && (xhr.status==200)){
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState ==4) && (xhr.status==404)){
            alert("fichier non trouvable");
        } 
    }
//j'utilise la méthode open
    xhr.open('GET', 'insertion.php?nom='+ nom +'&email='+email+' &message='+msg, true);
    xhr.send(null);
}  
//**********************************delete*******************************************
function supprimer(val){
    xhr= null;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
    if ((xhr.readyState ==4) && (xhr.status==200)){
        document.getElementById("maDiv").innerHTML = xhr.responseText;
    }
    if ((xhr.readyState ==4) && (xhr.status==404)){
        alert("fichier non trouvable");
    } 
}
//j'utilise la méthode open
    xhr.open('GET', 'delete.php?id='+ val , true);
    xhr.send(null);
}  
//****************************************Edit***************************************

function modifier(id){
    xhr = null;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    //xhr.open('GET', 'update.php?id=' + id, true);  // connexion
    xhr.open('GET', 'update_ajax.php?id=' + id, true);  // connexion
    xhr.send(null); 
}
//*********************************load*********************************************** */

function load_message() {
    
    // alert("Chargement do données en cours....")
    xhr = null;
    //Step 1 : On crée l'objet Ajax
    xhr = new XMLHttpRequest();
    //Step 2 : On teste l'état de l'objet Ajax
    xhr.onreadystatechange = function () {
        // alert(xhr.readyState);
        //alert("Etat de Ajax: " +xhr.readyState);*
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText; 
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    //Step 3 : On défini la cible
    xhr.open('GET', 'load.php', true);  // connexion
    xhr.send(null); 
}

//************************************************

function updateMessage()
{
    var id=document.getElementById("id").value;
    var nom=document.getElementById("nom_ajax").value;
    var email=document.getElementById("email_ajax").value;
    var contenu=document.getElementById("contenu_ajax").value;

    //alert(id+" "+nom+" "+email+" "+contenu);
    xhr = null;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }

    xhr.open('GET', 'mise_ajour_ajax.php?id='+id+'&nom=' + nom + '&email=' + email + '&contenu=' + contenu, true);
    xhr.send(null); 
}

