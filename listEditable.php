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

    $query = $db->prepare('SELECT `id`, `title` FROM `games`;');
    $query->execute();

    $result = $query->fetchAll();

    $return = '';

    foreach ($result as $game) {
        $return .=     '<div class=editGame>'
                         . '<form method="get"><input class="hidden" type="number" value="' . $game['id'] . '" id="gameId" name="gameId" action="#">'
                             . '<h3>'. $game['title'] . '</h3>'
                             . '<input class="editButton" type="submit" value="Edit">' 
                         . '</form>'
                     . '</div>';
    }

    return $return;
}