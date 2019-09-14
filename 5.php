<?php
function cetak($panjang)
{
	$karakter='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$string='';

	for ($i=0; $i <=32 ; $i++) { 
		$pos = rand(0, strlen($karakter)-1);
		$string.= $karakter{$pos};
	}

	return $string;
}

echo cetak(3);

  ?>