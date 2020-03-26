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
                <!-- Link to return to curation section -->
                <a href="curate.php">Curate Collection</a>
            </div>

        </nav>

        <div class="curatePage container">
            <h1>Curate Collection</h1>
            <!-- Declaration of form to edit items within db. Form structure is defined in printEditForm.php -->

            <h2>Edit Game:</h2>

            <?php
                require_once 'printEditForm.php';

                echo printEditForm();
            ?>

        </div>

    </body>
</html>