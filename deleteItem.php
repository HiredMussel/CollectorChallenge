<?php

/**
 * This is a page whose sole purpose is to remove an item from the database and then redirect the user to the curate.php page.
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