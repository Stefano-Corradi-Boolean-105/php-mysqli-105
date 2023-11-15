<?php


define('DB_SERVERNAME', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_university');

// connessione al DB
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn && $conn->connect_error){
  var_dump('Errore di connsssione');
  exit();
}
