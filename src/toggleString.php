<?php

//fscanf(STDIN, "%s\n", $lineOne);
$lineOne = "abcdE";
$lineOut = "";
for ($i=0; $i < strlen($lineOne); $i++) { 
	$ascii = ord($lineOne[$i]);
	if($ascii >= 97)
		$ascii-= 32;
	else
		$ascii+=32;
	$lineOut.= chr($ascii);
}

echo $lineOut;