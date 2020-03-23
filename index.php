<head>
    <title>My Games</title>
</head>

<body>

    <nav>

        <div class=links>
            <!-- Link goes nowhere for now, but will eventually link to the "add game" functionality -->
            <a href="#">Dummy Link</a>
        </div>

    </nav>

    <?php

        // This is currently a debug page to test the functionality of the "print card" function. Styling will be applied via
        // a stylesheet later

        require_once 'Card.php';

        $cardTest = new Card('Test Card', ['Test Key' => 'Test Value']);

        $cardTest->printCard();

    ?>

</body>