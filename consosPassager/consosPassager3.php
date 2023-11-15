<?php

echo " Saisir la somme due par le passager : \n " ; 

$sommedue = rtrim ( fgets(STDIN) ) ; 

if ( $sommedue <= 0 ) {
	
	echo " Le passager n'a plus de dette \n " ; 
	
}

else {
	
	echo " Le passager doit" , $sommedue , "en euros \n " ; 
	
}

?>
