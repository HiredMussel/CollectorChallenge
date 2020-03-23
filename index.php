<?php

require_once 'Card.php';

$cardTest = new Card('Test Card', ['Test Key' => 'Test Value']);

$cardTest->printCard();