<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <style>
        td,th,tr
        {
        border: 1px solid black;
        }
        body{
    text-align: center;
    background-image: url("img.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    
}
    </style>
    <body >
        <h1>gestion de lecteur</h1><br/>
            <?php
            require 'bd.php';
                session_start();
                  
                $nom = $_SESSION['nom'];

        $requete = "SELECT lecnum FROM lecteurs where lecnom = '$nom'";
        $exec_requete = mysqli_query($conn,$requete) or die("query to store reader failed");
        $reponse      = mysqli_fetch_array($exec_requete);
       /* echo"le lecteur n : ".$reponse['lecnum']." est reconnu ";*/
        
            
            ?>
            <h1>voici la liste des ouvrages disponibles à la réservavtion</h1>
            <table>
            <tr>
                <th> Code Livre </th>
                <th> Nom Auteur </th>
                <th> Prenom Auteur </th>
                <th> Titre </th>
                <th> Categorie </th>
                <th> ISBN </th>
                <th></th>                
            </tr>
            <?php
            
                $select_query = "SELECT livcode,livnomaut,livprenomaut,livtitre,livcategorie,livISBN 
                from livres where livdejareserve=0";
                $resultat = mysqli_query($conn,$select_query) or die("query to store reader failed");
                
                while($rps = mysqli_fetch_array($resultat)){
                    echo '<tr>';
                    echo'<td>'; echo stripslashes($rps['livcode']); echo'</td>';
                    echo'<td>'; echo stripslashes($rps['livnomaut']); echo'</td>';
                    echo'<td>'; echo stripslashes($rps['livprenomaut']); echo'</td>';
                    echo'<td>'; echo stripslashes($rps['livtitre']); echo'</td>';
                    echo'<td>'; echo stripslashes($rps['livcategorie']); echo'</td>';
                    echo'<td>'; echo stripslashes($rps['livISBN']); echo'</td>';
                    $n=$rps['livcode'];
                    
                    echo'<td>'; echo ' <a href="reservation.php?livecode='.$n.'"> Réserver </a> '; echo'</td>';
                    
                    echo '</tr>';
            }
            ?>    
</table>
        <h1>voici la liste des réservavtions</h1> 
        <table>
            <tr>
                <th> Code Livre </th>
                <th> Nom Auteur </th>
                <th> Prenom Auteur </th>
                <th> Titre </th>
                <th> Categorie </th>
                <th> ISBN </th>               
            </tr>
            <tr> 
            <?php
              $i=$reponse['lecnum'];
            $search_query = "SELECT empcodelivre from emprunts where empnumlect='$i'";
            $res = mysqli_query($conn,$search_query) or die("query to store reader failed");
            $rse = mysqli_fetch_array($res);
            $naima=$rse['empcodelivre'];
            
            $select_query = "SELECT livnomaut,livprenomaut,livtitre,livcategorie,livISBN
             from livres where livcode='$naima'";
            $result = mysqli_query($conn,$select_query) or die("query to store reader failed");
            while($rpse = mysqli_fetch_array($result)){
                echo '<tr>';
                echo'<td>'; echo stripslashes($naima); echo'</td>';
                echo'<td>'; echo stripslashes($rpse['livnomaut']); echo'</td>';
                echo'<td>'; echo stripslashes($rpse['livprenomaut']); echo'</td>';
                echo'<td>'; echo stripslashes($rpse['livtitre']); echo'</td>';
                echo'<td>'; echo stripslashes($rpse['livcategorie']); echo'</td>';
                echo'<td>'; echo stripslashes($rpse['livISBN']); echo'</td>';
                
                echo '</tr>';
        }
        ?> 
              
            </tr>
        </table>
    </body>
</html>