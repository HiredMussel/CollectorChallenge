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
            <a href="curate.php">Curate Collection</a>
        </div>

    </nav>

    <div class="container">
        <?php

            require_once 'Card.php';

            /**
             * Load card from database
             */
            $db = new PDO('mysql:host=db;dbname=collector_challenge', 'root', 'password');
            $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = $db->prepare('SELECT `title`,`genre`,`completion`,`description` FROM `games`;');
            $query->execute();

            $result = $query->fetchAll();

            /**
             * parse the return from the database into a card
             */
            foreach ($result as $entry) {
                $cardTitle = $entry['title'];
                unset($entry['title']);
                if (isset($entry['completion'])) {
                    $entry['completion'] .= '%';
                }
                $card = new Card($cardTitle, $entry);
                $card->printCard();
            }
        ?>
    </div>
</body>