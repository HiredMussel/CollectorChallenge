<?php

require_once 'connectToDb.php';
require_once 'card.php';

/**
 * Function to load all cards stored in the DB to a String to be echoed onto the website
 * 
 * Because this function interacts with the database, it cannot currently be unit tested
 */
function loadCards() : String {
    $return = '';

    $db = connectToDb();

    $query = $db->prepare('SELECT `title`,`genre`,`completion`,`description` FROM `games` WHERE `is_deleted`=0;');
    $query->execute();

    $result = $query->fetchAll();

    /**
     * parse the return from the database into a card
     */
    foreach ($result as $entry) {
        /**
         * A new card is valid if it has a title set. If the card has a title, it can then be echoed (possibly with null values)
         * Otherwise it is not valid and is therefore not returned
         * 
         * If there are no valid cards in the database, this function will return the empty string.
         */
        if (is_string($entry['title'])) {
            $cardTitle = $entry['title'];
            unset($entry['title']);
            if (isset($entry['completion'])) {
                $entry['completion'] .= '%';
            }
            $card = new Card($cardTitle, $entry);
            $return .= $card->printCard();
        }
    }

    return $return;
}