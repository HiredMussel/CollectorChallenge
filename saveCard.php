<?php

require_once 'card.php';
require_once 'connectToDb.php';

/**
 * Function to save the information to construct a card to a database
 * 
 * 
 */
function saveCard(Array $cardToSave) {
    /**
     * If a title is not set then this function will fail with exception TypeError::class due to the constructor for a new card
     * being passed NULL
     */
    $db = connectToDb();

    $query = $db->prepare('INSERT INTO `games` (`title`, `genre`, `completion`, `description`)
                                            VALUES (:title, :genre, :completion, :description);');

    $query->bindParam(':title', $cardToSave['title']);
    $query->bindParam(':genre', $cardToSave['genre']);
    $query->bindParam(':completion', $cardToSave['completion']);
    $query->bindParam(':description', $cardToSave['description']);
    $query->execute();
}