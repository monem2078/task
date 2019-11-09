<?php
include('app/shiftAlgorithm.php');
use shiftAlgorithm\shiftAlgorithm;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {
    /**
     * function to test shift encryption.
     */
    public function testFirstTaskEncryption() {
        $shiftAlgorithm = new shiftAlgorithm();
        $string = "hello world";
        $encrypt = $shiftAlgorithm->shiftEncryptionAlgorithm($string);
        // check if hello world encrytion is right.
        $this->assertEquals($encrypt, 'khoor zruog');
        // check that it will return false if the encryption was wrong.
        $this->assertNotEquals($encrypt, 'wrong_encryption');
    }

    /**
     * function to test shift decryption.
    */   
    public function testFirstTaskDecryption() {
        $shiftAlgorithm = new shiftAlgorithm();
        $string = "khoor zruog";
        $decrypt = $shiftAlgorithm->shiftDecryptionAlgorithm($string);
        // check if khoor zruog decrytion is right.
        $this->assertEquals($decrypt, 'hello world');
        // check that it will return false if the decryption was wrong.
        $this->assertNotEquals($decrypt, 'wrong_decryption');
    }
}