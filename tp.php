<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$bdname = "elevage";

$conn=mysqli_connect( $servername, $username, $password, $bdname)
or die ("Erreur de connexion".mysqli_errno($conn));
echo "Connexion réussie";
$req = "select prix,race from mouton";

    $result = mysqli_query($conn, $req);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_row($result)){
            echo ' prix : '.$row['0'].'<br> race : '.$row['1'];
    
        }
    }else{
        echo " aucun resultat trouvé";
    }
    
    mysqli_free_result($result);
    
    mysqli_close($conn); 
    ?>
    
    
