<?php

require_once '../Card.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
    public function testSuccessCardConstruct() {
        $cardTest = new Card ('Test Card', ['Test Key' => 'Test Value']);
        
        $expectedTitle = 'Test Card';
        $expectedValue = 'Test Value';

        $this->assertEquals($cardTest->getTitle(), $expectedTitle);
        $this->assertEquals($cardTest->getAttrib('Test Key'), $expectedValue);
    }

    public function testFailureCardConstruct() {
        $this->expectException(ArgumentCountError::class);

        $cardTest = new Card ();
    }

    public function testMalformedTitleCardConstruct() {
        $this->expectException(TypeError::class);

        $cardTest = new Card ([0 => 0]);
    }

    public function testMalformedAttribsCardConstruct() {
        $this->expectException(TypeError::class);

        $cardTest = new Card('Test Title', 'Test Attribs');
    }
}