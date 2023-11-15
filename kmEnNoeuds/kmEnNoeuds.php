<?php

echo "Saisir la vitesse en noeuds :  \n "; 

$vitessenoeuds = fgets(STDIN);

echo "Vitesse en km/h : " , $vitessenoeuds / 1.852  , "noeuds \n "; 

echo "Résultat de la conversion : " , $vitessenoeuds ; 

?>

