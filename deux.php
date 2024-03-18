<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();

if (isset( $_SESSION['password'])) {
$password=$_SESSION["password"];
echo "password : " .$password."<br/>";
}
if (isset( $_SESSION['login'])){ 
$password=$_SESSION["login"];
echo "login : " .$mois."<br/>";
}
$password =123456;
$_SESSION["password"]=$password;
Unset($_SESSION["login"]);
?>
<a href="prem.php.php">Aller page 1</a>
<a href="trois.php">Aller page 3</a>
</body>
</html>