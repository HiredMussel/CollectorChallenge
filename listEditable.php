<?php

require_once 'connectToDb.php';

/**
 * Function to print out a summary of items in the database to later allow for editing them
 * 
 * Because the function interacts with a database, it is not unit testable. However, anecdotal testing indicates that it
 * functions as intended
 * 
 * @return String a list of entries allowing each item in the db to be edited
 */
function listEditable() : String {
    $db = connectToDb();

    $query = $db->prepare('SELECT `id`, `title` FROM `games` WHERE `is_deleted`=0;');
    $query->execute();

    $result = $query->fetchAll();

    $return = '';

    foreach ($result as $game) {
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

    return $return;
}