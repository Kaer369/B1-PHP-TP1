<?php
echo " saisir le nom du port \n " ; 
$port = rtrim(fgets(STDIN));

if ( $port == "Quiberon"| $port == "Sauzon" | $port == "Le Palais" ) {
      echo  "Morbihan" ;
}

elseif ( $port == "Concarneau" | $port == "Douarnenez" ) {
	   echo  "finistère" ; 
}

elseif ( $port == "Piriac-sur-Mer" | $port == "Pornic" ) {
	   echo  "Loire-Atlantique" ; 
}

elseif ( $port == "ile-d'yeu" ) {
	   echo  "vendée" ; 
}

else {
	echo "rien" ; 
}
?>
