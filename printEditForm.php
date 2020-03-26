<?php

require_once 'connectToDb.php';


function printEditForm() : String {
    $db = connectToDb();
    $query = $db->prepare('SELECT `id`, `title`, `genre`, `completion`, `description` FROM `games` WHERE `id` = :id;');
    $query->bindParam(':id', $_GET['gameId']);
    $query->execute();
    $result = $query->fetchAll();

    
    return  '<form method="post" id="newGame" action="./saveEdit.php">

                <input class="hidden" type="number" value="' . $result[0]['id'] . '" id="gameId" name="gameId">

                <label for="title">Game Title:</label>
                <input type="text" id="title" name="title" value="' . $result[0]['title'] . '" required>

                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre" value="' . $result[0]['genre'] . '">

                <label for="completion">Completion:</label>
                <input type="number" min="0" max="255" id="completion" name="completion" value="' . $result[0]['completion'] . '" required>%<br>

                <label for="description">Description:</label>
                <textarea id="description" name="description">' . $result[0]['description'] . '</textarea>

                <input type="submit" id="submit" name="submit" value="Save Changes">

            </form>';
}