<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>lecteurForm</title>
    </head>
<style>
h2
{
text-align:center;
}
.formulaire{
    display:table;
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
</style>
    <body>
        <h2>Enregistrement d'un lecteur</h2>
      <div class="formulaire">
        <form action="valideLecteur.php" method="post">
            <p>   <label for="nom">nom</label> : <input type="text" name="nom" id="nom" /></p>
            <p>   <label for="prénom">Prénom</label> : <input type="text" name="prénom" id="prénom" /></p>
            <p>   <label for="pass">Mot de passe </label> : <input type="password" name="pass" id="pass" /></p>
            <p>   <label for="adresse">Adresse</label> : <input type="text" name="adresse" id="adresse" /></p>
            <p>   <label for="ville">Ville</label> : <input type="text" name="ville" id="ville" /></p>
            <p>   <label for="code">Code Postal</label> : <input type="text" name="code" id="code" /></p>
            <p>   <input type="submit" value="Enregistrer" /></p>
        </form>
      </div>
    </body>
</html>
