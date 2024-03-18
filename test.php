<¨

-!-DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function affichertableau($tableau){
      foreach($tableau as $element){
        echo $element . "<br>";
      }
    }

    $prenoms = array("alice","bob","david","eva");


    affichertableau($prenoms)


    // calculer la moyenne 
    $notes = array(12,15,17,14,16);
    function calculerMoyenne($tableau) {
      return array_sum ($tableau) / count($tableau);
      }
      $moyenne = calculerMoyenne($notes);
      echo "la moyenne des notes est: " .moyenne . "<br>";


      //filterspairs
      <
$nombres = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function filtrerPairs($tableau) {
    return array_filter($tableau, function($element) {
        return $element % 2 === 0;
    });
}

$nombresPairs = filtrerPairs($nombres);
echo "Les nombres pairs sont : ";
afficherTableau($nombresPairs);



// Inverser le tableau de mots 
$mots = array("Bonjour", "le", "monde");

function inverserTableau($tableau) {
    return array_reverse($tableau);
}

$motsInverses = inverserTableau($mots);
echo "Les mots inversés sont : ";
afficherTableau($motsInverses);
 
    
        

      ?>

      </body>
      </html>
         

    