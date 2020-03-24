<head>
    <title>My Games</title>
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
        /**
         * Logic to allow the result of the form to be added to the database
         */
        if (isset($_POST['title'])) {
            $db = new PDO('mysql:host=db;dbname=collector_challenge', 'root', 'password');
            $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $query = $db->prepare('INSERT INTO `games` (`title`, `genre`, `completion`, `description`)
                                    VALUES (:title, :genre, :completion, :description);');

            $query->bindParam(':title', $_POST['title']);
            $query->bindParam(':genre', $_POST['genre']);
            $query->bindParam(':completion', $_POST['completion']);
            $query->bindParam(':description', $_POST['description']);
            $query->execute();

            echo '<h3>Game Added!</h3>';
        }
    ?>
    </div>
</body>