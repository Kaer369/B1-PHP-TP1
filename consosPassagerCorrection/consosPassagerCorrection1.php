<?php

echo " Saisir la somme due par le passager : \n "  ; 

$prix = fgets(STDIN); 

if ($prix < 0) { 
	echo " Le passager s'est aquité de la somme due " ; 
}
else { 
	echo " Le passager ne s'est pas aquité de la somme due " ; 
}

?>
