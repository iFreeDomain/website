<?php
define('DB_SERVER', 'tiny.db.elephantsql.com');
define('DB_USERNAME', 'meltmqnc');
define('DB_PASSWORD', 'amIUpGHZBvLiVZu2XPeRSm-BqBkJo58J');
define('DB_NAME', 'meltmqnc');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
