<?php
require_once __DIR__  . '/conn.php';

// se non esiste la sessione la apro
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

session_destroy();
header('Location: index.php');

