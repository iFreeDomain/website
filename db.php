<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18439140_root');
define('DB_PASSWORD', '13Q?17x_9ixl8Utp');
define('DB_NAME', 'id18439140_server	');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
