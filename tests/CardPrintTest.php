<?php

require_once '../Card.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
    /**
     * Success Test with test input type
     */
    public function testSuccessCardPrint() {
        $testCard = new Card ('Test Title', ['Test Key One' => 'Test Value One', 'Test Key Two' => 'Test Value Two']);

        $return = $testCard->printCard();

        $expected = '<div class="itemCard"><h1>Test Title</h1><h2>Test Key One</h2><p>Test Value One</p><h2>Test Key Two</h2><p>Test Value Two</p></div>';

        $this->assertEquals($return, $expected);
    }

    /**
     * A Card with an undefined title cannot exist due to the constructor. Only possibly failure case is therefore empty attrib
     * array
     */
    public function testFailureCardPrint() {
        $testCard = new Card ('Test Title');

        $return = $testCard->printCard();

        $expected = '<div class="itemCard"><h1>Test Title</h1></div>';

        $this->assertEquals($return, $expected);
    }

    /**
     * Since this function accepts no input, no malformed test exists or is possible
     */
}