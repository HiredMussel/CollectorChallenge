<?php

// This is currently a debug page to test the functionality of the "print card" function. Styling will be applied via
// a stylesheet later

require_once 'Card.php';

$cardTest = new Card('Test Card', ['Test Key' => 'Test Value']);

$cardTest->printCard();