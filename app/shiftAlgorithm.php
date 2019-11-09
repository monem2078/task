<?php

namespace shiftAlgorithm;

class shiftAlgorithm {
    /**
     * function encrypt string by shifting it.
     * 
     * @param string $string the string to be encrypted.
     */
    function shiftEncryptionAlgorithm($string){
        //number of shift.
        $key = 3;

        // new shifted string
        $newSring = "";

        // iterate for every characters in string.
        for($i = 0; $i < strlen($string); $i++)
        {
            // get the ASCII value of the char.
            $val = ord($string[$i]);
            //check if the char is a space.
            if (preg_match('/\s/', $string[$i])) {
                $newSring = $newSring . chr(32);
            } else {
                // if k-th ahead character exceed 'z'
                if ($val + $key > 122) {
                    $key -= (122 - $val);
                    $key = $key % 26;
                    $newSring = $newSring . chr(96 + $key);
                } else
                    $newSring = $newSring . chr($val + $key);

                $key = 3;
            }
        }

        // print the new string
        return $newSring;
    }
}
?>