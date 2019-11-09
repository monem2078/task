<?php
include('shiftAlgorithm.php');
include('reverseAlgorithm.php');
use shiftAlgorithm\shiftAlgorithm;
use reverseAlgorithm\reverseAlgorithm;

// shift algorithm run.
$str = "hello world";
// function call
$shiftAlgortihm = new shiftAlgorithm();
$shiftedString = $shiftAlgortihm->shiftEncryptionAlgorithm($str);
$originalSring = $shiftAlgortihm->shiftDecryptionAlgorithm($shiftedString);
echo "Shifted String is:" . $shiftedString . " ---- " . " Original String is:" . $originalSring. "<br>";



//reverse algorithm
$str = "hello world";
$reverseAlgortihm = new reverseAlgorithm();
$reversedString = $reverseAlgortihm->reverseAlgorithmEncryption($str);
$reversedString = substr($reversedString, 11, 11);
$originalSring = $reverseAlgortihm->reverseAlgorithmDecryption($reversedString);
$originalSring = substr($originalSring, 11, 11);
echo "Reversed String is:" . $reversedString . " ---- " . " Original String is:" . $originalSring;

?>