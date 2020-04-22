<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
<style>
h1
{
text-align:center;
color : pink;
}
body{
    text-align: center;
    background-image: url("img.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    
}

 input{
 background-color:#FFF3F3;
 margin-top:30px;

 padding:30px;
 border:10px solid #F5C5C5;
 border-radius:50px;
 box-shadow:10px 10px 20px #C0C0C0 inset;
 width:600px;
 margin-left:5px;
 text-align: center;
 
 }
</style>
<body>
        
        <div  class="formulaire">
            
            <form action="livreForm.php" method="POST">
                <h1>Bienvenue sur notre librairie nada et naima</h1></br>
                <input type="submit" class="br" id='submit' value='Ajouter un nouveau livre' >
                
            </form>
        </div>
        
        <div  class="formulaire">
            <form action="lecteurForm.php" method="POST">
                <input type="submit" id='submit' value='Inscrivez vous' >
                
            </form>
        </div>
        <div  class="formulaire">
            <form action="login.php" method="POST">
                
                <input type="submit" id='submit' value='Connectez vous' >
                
            </form>
        </div>
        
    </body>
</html>
