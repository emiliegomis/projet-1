<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="projet.php" method="post">
    Name: <input type ="text" name = "username"><br>
     email:   <input type ="email" name = "email"><br>
    homme: <input type ="radio" name = "radio" value ="homme"><br>
    femme: <input type ="radio" name = "radio" value ="femme"><br>

        <input type ="submit" name = "valider" value ="valider"><br>
        France: <input type="checkbox" name="pays[]" value="France">
        Senegal: <input type="checkbox" name="pays[]" value="Senegal">
        Allemagne: <input type="checkbox" name="pays[]" value="Allemagne">
        Usa: <input type="checkbox" name="pays[]" value="Usa">
        <input type ="submit" name = "valider" value ="valider"><br>


        <h3>qui sera le meilleur joueur</h3>

        <select name="joueurs" id="joueurs">
            <option value="sadio mane">sadio mane</option>
            <option value=" lamine camara">lamine camara</option>
            <option value="elimane ndiaye">elimane ndiaye</option>
        </select>

</form>


    <?php
    if(isset($_REQUEST["valider"]))
        {
        if(isset($_POST["pays"]))
        {
        
        $pays=$_POST["pays"];
        foreach( $pays as $pa=> $p){
            echo $pays[$pa]."<br/>";
        }
    }
    else 
    {
        echo "vous n'avez pas fait de choix";
    }
      

    } 
        
         if (isset($_POST["valider"]))
    
        $user=$_POST["username"];
        $email=$_POST["email"];
        if(isset($user)&& (isset($email))) 
        {
            echo "le username:".$user."<br/>";
            echo "l'email:".$email."<br/>"; 
        }
        if(isset($pays) && (isset($radio))){
            foreach($pays as $clef =>$eval){
                echo $pays[$clef] . "<br>";
            }
        }    
    
        if (isset($radio)){
            echo "vous etes :" .$radio;
        }
        if(isset($_REQUEST["valider"]))
        {
        if(isset($_POST["joueurs"]))
        {
        
        $pays=$_POST["joueurs"];
        foreach( $joueurs as $ma=> $m){
            echo $joueurs[$ma]."<br/>";
        }
    }
    else 
    {
        echo "vous n'avez pas fait de choix";
    }
      

    }

    ?>
    
</body>
</html>