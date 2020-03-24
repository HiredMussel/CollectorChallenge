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

    <div class="curatePage container">
        <h1>Curate Collection</h1>

        <h2>Add new game:</h2>

        <form>
            <label for="title">Game Title:</title>
            <input type="text" id="title" name="title">
            <label for="genre">Genre:</title>
            <input type="text" id="genre" name="genre">
            <label for="completion">Completion:</title>
            <input type="number" min="0" max="255" id="completion" name="completion">%<br>
            <label for="description">Description:</title>
            <input type="text" id="description" name="description">
        </form>
    </div>
</body>