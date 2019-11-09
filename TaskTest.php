<?php
include('app/shiftAlgorithm.php');
use shiftAlgorithm\shiftAlgorithm;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {
    /**
     * function to test shift encryption.
     */
    public function testFirstTaskEncryption() {
        $task_1 = new shiftAlgorithm();
        $string = "hello world";
        $encrypt = $task_1->shiftEncryptionAlgorithm($string);
        // check if hello world encrytion is right.
        $this->assertEquals($encrypt, 'khoor zruog');
        // check that it will return false if the encryption was wrong.
        $this->assertNotEquals($encrypt, 'wrong_encryption');
    }
}