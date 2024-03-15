<?php
$databaseHost = 'localhost';
$databaseName = 'u920553048_mission_shakti';
$databaseUsername = 'u920553048_mission_shakti';
$databasePassword = 'P@55word';
 
try {
    $con = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
  echo $e->getMessage();
}
 
?>