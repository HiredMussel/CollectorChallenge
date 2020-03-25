<?php

require_once 'connectToDb.php';

if (isset($_POST['title'])) {
    $db = connectToDb();
    $query = $db->prepare('UPDATE `games` 
                            SET `title`=:title, `genre`=:genre, `completion`=:completion, `description`=:description
                            WHERE `id`=:gameId;');
    $query->bindParam(':gameId', $_POST['gameId']);
    $query->bindParam(':title', $_POST['title']);
    $query->bindParam(':genre', $_POST['genre']);
    $query->bindParam(':completion', $_POST['completion']);
    $query->bindParam(':description', $_POST['description']);
    $query->execute();
}

header('Location: ./curate.php');