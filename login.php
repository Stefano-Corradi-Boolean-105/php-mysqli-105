<?php
require_once __DIR__  . '/conn.php';

// se non esiste la sessione la apro
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$md5Password = md5($password);

// constrollo della stringa della query per evitare SQL Injection
$stmt = $conn->prepare("SELECT * FROM `users` WHERE `username` = ? AND `password` = ?");
$stmt->bind_param('ss',$username, $md5Password);
$stmt->execute();


$result = $stmt->get_result();
$user = $result->fetch_object();


if($user){
  // se sono loggato salvo se info utente in sessione
  $_SESSION['userID'] = $user->id;
  $_SESSION['userEmail'] = $user->email;
  header('Location: students.php');
}else{

}



require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';

require_once __DIR__ . '/views/login.php';

require_once __DIR__ . '/partials/footer.php';