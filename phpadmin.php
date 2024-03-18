<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $bdname = "dfe";

    $conn=mysqli_connect( $servername, $username, $password, $bdname)
    or die ("Erreur de connexion".mysqli_errno($conn));
    echo "Connexion réussie";


    $req = "select nom,prenom, age from apprenant";

    $result = mysqli_query($conn, $req);
    ?>
<table>
<th>prenom</th>
<th>nom</th>
<th>age</th>
<tr>
    <?php
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_row($result)){
            echo 
             ' <tr>
              <td>
              '.$row['0'].'</td>
              <td>  
               '.$row['1'].'</td> 
               <td>'.$row['2'].'</td>';
    
        }
    }else{
        echo " aucun resultat trouvé";
    }
    
    mysqli_free_result($result);
    
    mysqli_close($conn); 

    ?>
</tr>
    

    

    </table>
    </body>
</html>
    
