<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>Mini-chat</title>
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
        <h2>Enregistrement d'un livre</h2>
      <div class="formulaire">
        <form action="valideLivre.php" method="post">
            <p>   <label for="nomAuteur">Nom de l'auteur</label> : <input type="text" name="nomAuteur" id="nomAuteur" /></p>
            <p>   <label for="prénomAuteur">Prénom de l'auteur</label> : <input type="text" name="prénomAuteur" id="prénomAuteur" /></p>
            <p>   <label for="titre">Titre</label> : <input type="text" name="titre" id="titre" /></p>
            <p>   <label for="catégorie">Catégorie</label> : 
            <select name="catégorie" id="catégorie">
                <optgroup>
                        <option value="roman">Roman</option>
                        <option value="Science-fiction">Science-fiction</option>
                        <option value="Junior">Junior</option>
                </optgroup></p>
            </select>
            <p>  <label for="isbn">Numéro ISBN</label> : <input type="text" name="isbn" id="isbn" /></p>
            <p>   <input type="submit" value="Enregistrer" /></p>
        </form>
      </div>
    </body>
</html>