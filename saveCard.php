<?php

require_once 'card.php';
require_once 'connectToDb.php';

/**
 * Function to save the information to construct a card to a database
 * 
 * Has no return type, instead saving passed information to a DB
 * Because this function interacts with the database, it is not unit tested.
 * 
 * @param $cardToSave Array containing the information about the game which will be saved to the database
 * @param $db PDO an active connection to the database
 */
function saveCard(Array $cardToSave, PDO $db) {
    /**
     * If a title is not set then this function will fail with exception TypeError::class due to the constructor for a new card
     * being passed NULL
     */

    $query = $db->prepare('INSERT INTO `games` (`title`, `genre`, `completion`, `description`)
                                            VALUES (:title, :genre, :completion, :description);');

    $query->bindParam(':title', $cardToSave['title']);
    $query->bindParam(':genre', $cardToSave['genre']);
    $query->bindParam(':completion', $cardToSave['completion']);
    $query->bindParam(':description', $cardToSave['description']);
    $query->execute();
}