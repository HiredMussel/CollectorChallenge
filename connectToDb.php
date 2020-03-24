<?php

/**
 * Function to connect to the relevant database and set the return type to associative array
 * 
 * @return PDO the database which has been connected to, with the necessary parameter set
 */
function connectToDb() {
    $db = new PDO ('mysql:host=db;dbname=collector_challenge', 'root', 'password');
    $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}