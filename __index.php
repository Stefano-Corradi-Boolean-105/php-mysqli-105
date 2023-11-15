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


$sql = 'SELECT * FROM `students` LIMIT 5';
// eseguo la query e salvoil risultato in una variabile
$result = $conn->query($sql);

//var_dump($result);

// salvo tutti i risultati in un array
// $array_all = $result->fetch_all();
// var_dump($array_all);

// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());

// if($result && $result->num_rows > 0){
//   while($row = $result->fetch_array()){
//     echo "<br> " . $row['name'] . ' ' . $row['surname'];
//   }
// }

if($result && $result->num_rows > 0){
  while($row = $result->fetch_object()){
    echo "<br> " . $row->name . ' ' . $row->surname;
  }
}

// chiudo la connessione al DB
$conn->close();
?>