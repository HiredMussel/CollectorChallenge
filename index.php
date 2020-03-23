<head>
    <title>My Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            // Change evaluated condition in for loop to generate desired number of test cards
            $cardTest = [];
            for ($i = 0; $i < 8; $i++) {
                $cardTest[] = new Card('Test Card', ['Test Key' => 'Test Value']);
                $cardTest[$i]->printCard();
            }

        ?>
    </div>
</body>