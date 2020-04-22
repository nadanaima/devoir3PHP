<?php
    require 'bd.php';
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prénom'];
    $pwd = $_POST['pass'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code'];
    
    $search_query = "SELECT lecnom from lecteurs where lecnom = '$nom' ";
    $resultatcheck = mysqli_query($conn, $search_query);
    if( mysqli_num_rows($resultatcheck) > 0){
        header("Location: lecteurForm.php?error=usetaken");
        exit();
    }else {
        echo "<h1>Validation d'un lecteur</h1>";
        $insert_query = "INSERT into lecteurs (lecnom, lecprenom, lecadresse, lecville, leccodepostal, lecmotdepasse)
        values('$nom','$prenom','$adresse','$ville','$code_postal','$pwd')";

        $resultat = mysqli_query($conn,$insert_query) or die("query to store reader failed");

        if($resultat){
            echo "Nom: ". $nom . "<br/> Prénom: " . $prenom . "<br/>Adresse: " . $adresse . "<br/>Ville:" . 
            $ville . "<br/>Code Portal:" . $code_postal;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <style>
    body{
    text-align: center;
    background-image: url("img.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    
}
</style>

    <body>

        <h5>Vous etes enregistré dans la base de la bibliothèque</h5>   
        <h5>Vous avez maintenant la possibilité de réserver des livres ou vous <a href ="gestionLecteur.php">identifiant ici </a>.</h5>
    </body>
</html>