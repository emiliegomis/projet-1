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
if (isset($_SESSION['password'])) {
$annee=$_SESSION["password"];
echo "password :" .$password."<br/>";
}
if (isset( $_SESSION['login'])) {
$login=$_SESSION["login"];
echo "login :" .$login."<br/>";
}
else
echo "login inexistant<br/>";
?>
<a href="prem.php">Aller page 1</a>
<a href="deux.php">Aller page 2</a>
</body>
</html>