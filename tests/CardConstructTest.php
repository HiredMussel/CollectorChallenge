<?php

require_once '../Card.php';

use PHPUnit\Framework\TestCase;

class ConstructTest extends TestCase {
    /**
     * Test that the card type can be constructed successfully. Test both the setting of the title and the card attributes
     */
    public function testSuccessCardConstruct() {
        $cardTest = new Card ('Test Card', ['Test Key' => 'Test Value']);
        
        $expectedTitle = 'Test Card';
        $expectedValue = 'Test Value';

        $this->assertEquals($cardTest->getTitle(), $expectedTitle);
        $this->assertEquals($cardTest->getAttrib('Test Key'), $expectedValue);
    }

    /**
     * The only failure cases for the constructor are either an empty input or a malformed input. Failure test is for empty input
     */
    public function testFailureCardConstruct() {
        $this->expectException(ArgumentCountError::class);

        $cardTest = new Card ();
    }

    /**
     * Separate tests for the cases of a malformed title and attribute array respectively
     */
    public function testMalformedTitleCardConstruct() {
        $this->expectException(TypeError::class);

        $cardTest = new Card ([0 => 0]);
    }

    public function testMalformedAttribsCardConstruct() {
        $this->expectException(TypeError::class);

        $cardTest = new Card('Test Title', 'Test Attribs');
    }
}