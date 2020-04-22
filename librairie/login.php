<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
<style>
h1
{
text-align:center;
}
body{
    text-align: center;
    background-image: url("img.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    
}
</style>
<body>
        <div id="container">
            
            <form action="validation.php" method="POST">
                <h1>Authentification du lecteur</h1></br>
            
                <label><b>Nom du lecteur </b></label>
                <input type="text" placeholder="nom de lecteur" name="nom" required>
                <br/>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="mot de passe" name="pass" required>
                <br/>
                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
    </body>
</html>

