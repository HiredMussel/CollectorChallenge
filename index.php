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

                require_once 'card.php';
                require_once 'connectToDb.php';
                require_once 'loadCards.php';

                /**
                 * Load card from database
                 */
                echo loadCards();
            ?>

        </div>

    </body>

</html>