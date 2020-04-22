<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
<style>
h2
{
text-align:center;
}
.formulaire{
    display:table;
    tposition:absolute;
   
   left:50%;
}
p{
    display:table-row;
}
label{
    display:table-cell;
}
input{
    display:table-cell;
}

body{
    text-align: center;
    background-image: url("img.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    
}
div{
    margin-left: auto;
    margin-right: auto;
    
}
</style>
    <body>
    <h3>Gestion du lecteur </h3>
    <h5>Le lecteur n'est pas reconnu </br>Cliquez <a href="login.php">ici</a> pour tenter une nouvelle identification </h5>  </br>  
    <h3>Enregistrement d'un lecteur </h3>
    <h5>Si vous etes un nouveau lecteur,veuillez vous enregistrer en remplissant le formulaire ci-dessous</b5></br></br>
    <div class="formulaire">
        <form action="valideLecteur.php" method="post">
            <p>   <label for="nom">nom</label> : <input type="text" name="nom" id="nom" /></p>
            <p>   <label for="prénom">Prénom</label> : <input type="text" name="prénom" id="prénom" /></p>
            <p>   <label for="pass">Mot de passe </label> : <input type="password" name="pass" id="pass" /></p>
            <p>   <label for="adresse">Adresse</label> : <input type="text" name="adresse" id="adresse" /></p>
            <p>   <label for="ville">Ville</label> : <input type="text" name="ville" id="ville" /></p>
            <p>   <label for="code">Code Postal</label> : <input type="text" name="code" id="code" /></p>
            <p>   <input type="submit" value="Valider" /></p>
        </form>
      </div>

    </body>
</html>