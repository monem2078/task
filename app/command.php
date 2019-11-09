<?php
use shiftAlgorithm\shiftAlgorithm;

include(__DIR__.'/shiftAlgorithm.php');
// as the first argument is the file name.
unset($argv[0]);
$result = "";
if ($argc == 4) {
    if ($argv[2] == "shift_algorithm") {
        $command = new shiftAlgorithm();
        if ($argv[3] == "encrypt") {
            $result = $command->shiftEncryptionAlgorithm($argv[1]);
        } elseif ($argv[3] == "decrypt") {
            $result = $command->shiftDecryptionAlgorithm($argv[1]);
        } else {
            print "Enter the method to be used";
        }
    } elseif ($argv[2] == "matrix_algorithm") {
        if ($argv[3] == "encrypt") {
            //do some code.
        } elseif ($argv[3] == "decrypt") {
            //do some code.
        } else {
            print "Enter the method to be used";
        }
    } else {
        print "Enter the alogrithm to be used";
    }
    
}

print $result;
?>