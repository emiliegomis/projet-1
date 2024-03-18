<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prem.php">
        <label for="login">login</label>
        <input type="text" name ="login" id="login" >

        <label for="passeword">passeword</label>
        <input type="password" name ="password"  >

        
        <input type="submit" value ="submit" >


    </form>
    <?php
    
session_start();
$password=0;
$login=0 ;
$_SESSION["password"]=$password;
$_SESSION["login"]=$login;
echo "password :"
.$_SESSION["password"]."<br/>" ;
echo "login:"
.$_SESSION["login"]."<br/>"
?>
<a href="deux.php">Aller page 2</a>
<a href="trois.php">Aller page 3</a>

</body>
</html>