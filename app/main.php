<?php
include('shiftAlgorithm.php');
use shiftAlgorithm\shiftAlgorithm;

// shift algorithm run.
$str = "hello world";
// function call
$shiftAlgortihm = new shiftAlgorithm();
$shiftedString = $shiftAlgortihm->shiftEncryptionAlgorithm($str);
$originalSring = $shiftAlgortihm->shiftDecryptionAlgorithm($shiftedString);
echo "Shifted String is:" . $shiftedString . " ---- " . " Original String is:" . $originalSring. "<br>";


?>