
<?php
if(isset($_POST['nom']) && isset($_POST['pass']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'librairie';
    $db_host     = 'localhost:3308';
    $bd = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($bd,$_POST['nom']); 
    $password = mysqli_real_escape_string($bd,$_POST['pass']);
    
    
        $requete = "SELECT count(*) FROM lecteurs where 
              lecnom = '".$username."' and lecmotdepasse = '".$password."' ";
        $exec_requete = mysqli_query($bd,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            
           header("Location: gestionLecteur.php");
        }
        else
        {
            header('Location: gestionLecteur2.php'); // utilisateur ou mot de passe incorrect
        }
    }


mysqli_close($bd);

?>