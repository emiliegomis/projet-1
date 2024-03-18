<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $bdname = "dfe";

    $conn=mysqli_connect( $servername, $username, $password, $bdname)
    or die ("Erreur de connexion".mysqli_errno($conn));
    echo "Connexion réussie";
?>