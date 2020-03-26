<?php

require_once 'connectToDb.php';

/**
 * Function to print out a summary of items in the database to later allow for editing them
 * 
 * Because the function interacts with a database, it is not unit testable. However, anecdotal testing indicates that it
 * functions as intended
 * 
 * @param $db PDO an instantiated connection to the database
 * 
 * @return String a list of entries allowing each item in the db to be edited
 */
function listEditable(PDO $db) : String {

    $query = $db->prepare('SELECT `id`, `title` FROM `games` WHERE `is_deleted`=0;');
    $query->execute();

    $result = $query->fetchAll();

    $return = '';
    /**
     * If a title is set for a game, the relevant section of the page should have en entry added to it with a form
     * allowing that game's information to be edited or the game to be removed from the database (since nothing confidential
     * is being stored, this database uses a soft deletion)
     */
    foreach ($result as $game) {
        if (isset($game['title'])) {
            $return .=     '<div class=editGame>'
                            . '<form method="get" action="./editEntry.php">'
                                . '<input class="hidden" type="number" value="' . $game['id'] . '" id="gameId" name="gameId">'
                                . '<h3>'. $game['title'] . '</h3>'
                                . '<input class="editButton" type="submit" value="Edit">'
                            . '</form>'
                            . '<form method="get" action="./deleteItem.php">'
                                . '<input class="hidden" type="number" value="' . $game['id'] . '" id="gameId" name="gameId">'
                                . '<input class="deleteButton" type="submit" value="Delete">'
                            . '</form>'
                        . '</div>';
        }
    }

    return $return;
}