<?php
define('DB_SERVER', 'sql6.freesqldatabase.com');
define('DB_USERNAME', 'sql6491278');
define('DB_PASSWORD', '6IebBW9dyx');
define('DB_NAME', 'sql6491278');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
