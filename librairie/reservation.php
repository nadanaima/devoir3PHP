<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
<style>
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
h1
{
text-align:center;
}
input{
 background-color:#FFF3F3;
 margin-top:20px;

 padding:10px;
 border:1px solid #F5C5C5;
 border-radius:50px;
 box-shadow:10px 10px 20px #C0C0C0 inset;
 width:100px;
 margin-left:1px;
 text-align: center;
 
 }
</style>
<body>
        
                <h1>Réserver un livre </h1></br>
                <h5>Vous désirez réserver le livre suivant :</h5></br>
        <table>
            <tr>
                <th> Code Livre </th>
                <th> Nom Auteur </th>
                <th> Prenom Auteur </th>
                <th> Titre </th>
                <th> Categorie </th>
                <th> ISBN </th>
            </tr>
                <?php
                require 'bd.php';
                $livcode=$_GET['livecode'];
                
                $select_query = "SELECT livcode,livnomaut,livprenomaut,livtitre,livcategorie,livISBN from livres where livcode='$livcode'";
                $resultat = mysqli_query($conn,$select_query) or die("query to store reader failed");
                $rps = mysqli_fetch_array($resultat);

                $livnomaut = $rps['livnomaut'];
                $livprenomaut = $rps['livprenomaut'];
                $livtitre = $rps['livtitre'];
                $livcategorie = $rps['livcategorie'];
                $livISBN = $rps['livISBN'];
                
                
                    echo '<tr>';
                    echo'<td>'; echo $livcode; echo'</td>';
                    echo'<td>'; echo $livnomaut; echo'</td>';
                    echo'<td>'; echo $livprenomaut; echo'</td>';
                    echo'<td>'; echo $livtitre; echo'</td>';
                    echo'<td>'; echo $livcategorie; echo'</td>';
                    echo'<td>'; echo $livISBN; echo'</td>';
                    
                    echo '</tr>';
                    
                    
                
            ?>  
              
    </table>
    
    <a href="confirmation.php?code=<?php echo "$livcode" ;?>"><input type="submit" value="Confirmer"/></a>
    
          
    </body>
</html>