<?php

/**
 * This is a page whose sole purpose is to remove an item from the database and then redirect the user to the curate.php page.
 * The flag 'is_deleted' prevents the game from appearing in the list of games on either index.php or curate.php. Since nothing
 * confidential is being stored, this method is preferred as the restoration of unintentionally-deleted data is still possible.
 */
require_once 'connectToDb.php';

if (isset($_GET['gameId'])) {
    $db = connectToDb();
    $query = $db->prepare('UPDATE `games`
                            SET `is_deleted`=1
                            WHERE `id`=:gameId;');
    $query->bindParam(':gameId', $_GET['gameId']);
    $query->execute();
}

header('Location: ./curate.php');