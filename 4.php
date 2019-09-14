<?php
	$panjang=5;
	for ($i=1; $i <=$panjang ; $i++) {
			for ($q=1; $q <=$panjang ; $q++) { 
				if (($i==1) || ($i==$panjang)) {
					echo "*";
				
			 } else{
			 	echo "-";
			 }
	}
	echo "<br/>";
}
  ?>