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
            <a href="curate.php">View Collection</a>
        </div>

    </nav>

    <div class="curatePage container">
        <h1>Curate Collection</h1>

        <h2>Add new game:</h2>

        <form method="post" id="newGame">
            <label for="title">Game Title:</title>
            <input type="text" id="title" name="title" required>
            <label for="genre">Genre:</title>
            <input type="text" id="genre" name="genre">
            <label for="completion">Completion:</title>
            <input type="number" min="0" max="255" id="completion" name="completion" value="0" required>%<br>
            <label for="description">Description:</title>
            <textarea id="description" name="description"></textarea>
            <input type="submit" id="submit" name="submit">
        </form>
    </div>
    <?php
        var_dump($_POST);
    ?>
</body>