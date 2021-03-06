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
                <!-- Link back to homepage -->
                <a href="index.php">View Collection</a>
            </div>

        </nav>

        <div class="curatePage container">
            <h1>Curate Collection</h1>
            <!-- Declaration of form to add items to db. Items have fields for title, genre, completion, and description -->

            <h2>Add new game:</h2>

            <form method="post" id="newGame">

                <label for="title">Game Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre">

                <label for="completion">Completion:</label>
                <input type="number" min="0" max="255" id="completion" name="completion" value="0" required>%<br>

                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>

                <input type="submit" id="submit" name="submit">

            </form>

            <?php
                require_once 'saveCard.php';
                require_once 'listEditable.php';

                $db=connectToDb();

                /**
                 * Logic to allow the result of the form to be added to the database
                 */

                if (isset($_POST['title'])) {
                    saveCard($_POST, $db);

                    echo '<h3>Game Added!</h3>';
                }

                echo '<h2> Edit your Games:</h2>';

                echo listEditable($db);
            ?>

        </div>

    </body>
</html>