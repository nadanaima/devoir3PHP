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

</body>
</html>

<?php
    require 'bd.php';
    
    $nomAut = $_POST['nomAuteur'];
    $prenomAut = $_POST['prénomAuteur'];
    $titre = $_POST['titre'];
    $categorie = $_POST['catégorie'];
    $isbn = $_POST['isbn'];
    
    $search_query = "SELECT livtitre from livres where livtitre = '$titre' ";
    $resultatcheck = mysqli_query($conn, $search_query);
    if( mysqli_num_rows($resultatcheck) > 0){
        header("Location: lecteurForm.php?error=usetaken");
        exit();
    }else {
        echo "<h1>Validation d'un livre</h1>";
        $insert_query = "INSERT into livres (livnomaut, livprenomaut, livtitre, livcategorie, 
        livISBN, livdejareserve) values ('$nomAut', '$prenomAut', '$titre', '$categorie', '$isbn', 0)";
    
        $resultat = mysqli_query($conn,$insert_query) or die("query to store reader failed");

        if($resultat){
            echo "Nom de l auteur: ". $nomAut . "<br/> Prénom de l auteur: " . $prenomAut . "<br/>Titre:
             " . $titre . "<br/>Catégorie:" . $categorie . "<br/>Numéro ISBN :" . $isbn;
        }
    }
?>