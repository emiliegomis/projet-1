<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'popins' sans-serif;
}
body {
    background-color: pink;
    display: flex;
    align-items :center ;
    justify-content: center;
    height : 100vh
} 
form {
    display: flex;
    flex-direction:column;
    background-color :white;
    padding:10px;
    border-radius : 6px;
    box-shadow: 0 0 10px rgb(0, 0, 0, 2);
}
h3 {
    text-align: center;
    font-size: 20px;
}
.name-field {
    justify-content: space-between;
}
input {
    margin-bottom: 5px;
    padding: 5px;
    outline: 0;
    border: 1px solid;
}

input:focus {
    input:focus {
    border: 1px solid pink;
}
}



    </style>
</head>
<body>
    
<form action="eval.php" method="post">
    <h1>nous contacter</h1>
    <div class="name-field">
    Nom: <input type ="text" name = "username"><br>

     prenom : <input type ="text" name = "prenom"><br>

      email :<input type ="email" name = "email"><br>

      telephone : <input type ="number" name = "telephone"><br>

    homme: <input type ="radio" name = "radio" value ="homme"><br>

    femme: <input type ="radio" name = "radio" value ="femme"><br>

    description : <input type ="textarea" name = "description"><br>

</div>
    <h3>nationalite</h3>

    <select name="nationalite" id="nationalite"> // joueurs
            <option value="senegalaise">senegalaise</option>
            <option value=" malienne">malienne</option>
            <option value="ivoirienne">ivoirienne</option>
            <option value="burkinabaise">burkinabaise</option>
        </select>

        <h3>vos loisirs</h3>

        sport: <input type="checkbox" name="loisirs[]" value="sport">
       culture : <input type="checkbox" name="loisirs[]" value="culture">
        societe: <input type="checkbox" name="loisirs[]" value="societe">
        jeux: <input type="checkbox" name="loisirs[]" value="jeux">
        <input type ="submit" name = "valider" value ="valider"><br>


        

</form>
<?php
    if(isset($_REQUEST["valider"]))
        {
        if(isset($_POST["loisirs"]))
        {
        
        $loisirs=$_POST["loisirs"];
        foreach( $loisirs as $li=> $l){
            echo $loisirs[$li]."<br/>";
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
         if (isset($_POST["valider"]))

         $prenom=$_POST["prenom"];
        $description =$_POST["description"];

         if(isset($prenom)&& (isset($description))) 
         {
            echo "le prenom:".$user."<br/>";
            echo "la description:".$description."<br/>"; 
         }


    
        if(isset($loisirs) && (isset($radio))){
            foreach($loisirs as $clef =>$eval){
                echo $loisirs[$clef] . "<br>";
            }
        }    
    
        if (isset($radio)){
            echo "vous etes :" .$radio;
        }
        if(isset($_REQUEST["valider"]))
        {
        if(isset($_POST["nationalite"]))
        {
        
        $nationalite=$_POST["nationalite"];
        foreach( $nationalite as $na => $n){
            echo $nationalite[$na]."<br/>";
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