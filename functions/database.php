<?php

/**
 * Connect to the DB
 *
 * @return PDO
 */
function connectDB()
{
    try {
        return new PDO('mysql:host=localhost;dbname=msprwis2;charset=UTF8', 'root', 'root');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
