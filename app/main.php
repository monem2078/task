<?php
include('shiftAlgorithm.php');
use shiftAlgorithm\shiftAlgorithm;

// shift algorithm run.
$str = "hello world";
// function call
$shiftAlgortihm = new shiftAlgorithm();
$shiftedString = $shiftAlgortihm->shiftEncryptionAlgorithm($str);
echo "Shifted String is:" . $shiftedString . "<br>";


?>