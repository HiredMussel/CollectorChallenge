 <html lang="en-GB">
 
    <head>

        <title>My Games</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="normalise.css">
        <link rel="stylesheet" type="text/css" href="styles.css">

    </head>

    <body>

        <nav>

            <div class=links>

                <!-- Link takes the user to an input form where they can add details of a new game -->
                <a href="curate.php">Curate Collection</a>

            </div>

        </nav>

        <div class="container">

            <?php

                require_once 'Card.php';
                require_once 'connectToDb.php';

                /**
                 * Load card from database
                 */
                $db = connectToDb();

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
                    echo $card->printCard();
                }
            ?>

        </div>

    </body>

</html>