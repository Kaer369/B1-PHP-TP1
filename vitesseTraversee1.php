<?php
echo " Saisir la vitesse : \n " ; 

$vitesse = fgets ( STDIN); 

if ( $vitesse > 0 ) { 
	echo " vitesse  : " , $vitesse , "noeuds\n" ; 
}
else {
	echo " vitesse : 0 noeuds " ; 
}
?>
