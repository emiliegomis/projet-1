<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$bdname = "dfe";

$conn=mysqli_connect( $servername, $username, $password, $bdname)
or die ("Erreur de connexion".mysqli_errno($conn));
echo "Connexion réussie";



$req = "update apprenant set prenom='amy', nom='ndiaye' where id=1";

//$result = mysqli_query($conn,$req);



//$req1="insert into apprenant(prenom,nom,age,tel)
//values('saly','ndiaye',20,'2342577666')";
if(mysqli_query($conn,$req) == true)
{
echo "Enregistrement bien reussi";
}
else
{
echo "Echec d'enregistrement";
}
$req2="select prenom,nom,tel  from apprenant";
if($result=mysqli_query($conn,$req2))
{
echo "nombre d'enregistrement : ".mysqli_num_rows($result);
// libération du résultat
mysqli_free_result($result);
}
else
{
echo "Erreur selection à la base de données";
}
?>
 