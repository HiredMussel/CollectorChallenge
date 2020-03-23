<?php

require_once '../Card.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
    public function testSuccessCardContruct() {
        $cardTest = new Card ('Test Card', ['Test Key' => 'Test Value']);
        
        $expectedTitle = 'Test Card';
        $expectedValue = 'Test Value';

        $this->assertEquals($cardTest->getTitle(), $expectedTitle);
        $this->assertEquals($cardTest->getAttrib('Test Key'), $expectedValue);
    }
}