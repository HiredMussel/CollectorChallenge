<head>
    <title>My Games</title>
    <link rel="stylesheet" type="text/css" href="normalise.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <nav>

        <div class=links>
            <!-- Link goes nowhere for now, but will eventually link to the "add game" functionality -->
            <a href="#">Dummy Link</a>
        </div>

    </nav>

    <div class="container">
        <?php

            // This is currently a debug page to test the functionality of the "print card" function. Styling will be applied via
            // a stylesheet later

            require_once 'Card.php';

            $cardTest = new Card('Test Card', ['Test Key' => 'Test Value']);
            $cardTest2 = new Card('Test Card', ['Test Key' => 'Test Value']);
            $cardTest3 = new Card('Test Card', ['Test Key' => 'Test Value']);

            $cardTest->printCard();
            $cardTest2->printCard();
            $cardTest3->printCard();

        ?>
    </div>
</body>