<?php

echo " Saisir la somme due par la passager :  \n " ; 

$passager = fgets(STDIN); 

if($passager <  0 ){
     echo "Valeur incorrecte " ;
}

else { 
   echo " valeur correcte " ;
}
?>
