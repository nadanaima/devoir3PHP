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
a{
    color:rgb(230, 0, 230);
  
  
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
        <h1>Confirmation de votre réservation </h1>
        <?php
        require 'bd.php';
        session_start();
        $nom = $_SESSION['nom'];
        $requete = "SELECT lecnum FROM lecteurs where lecnom = '$nom'";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $r=$reponse['lecnum'];
        $date = date('Y-m-d');
        $date2= date('Y-m-d', strtotime(' + 5 days'));
        $code=$_GET['code'];
        
                $req= "INSERT INTO `emprunts` ( `empdate`, `empdateret`, `empcodelivre`, `empnumlect`)
                 VALUES ('$date', '$date2', '$code', '$r')";
                 $res = mysqli_query($conn, $req);
                 
            echo"<h3>Votre réservation est confirmée sous le numero de lecteur:$r</h3>";
            echo"<h3>Date de la réservation :$date</h3>";
            echo"<h3>Date du retour :$date2</h3>";
            echo"<h3>Vous pouvez revenir à la liste des livres disponible à la réservation en cliquant</h3>";
            echo" <a href='gestionLecteur.php'><h2>ici</h2></a>";
            $alter_query ="UPDATE `livres` SET `livdejareserve` = '1' WHERE `livres`.`livcode` = '$code'";
                    $resultat = mysqli_query($conn,$alter_query) or die("query to store reader failed");

        
       ?>        
    </body>
</html>