<?php

// mi connetto al DB
require_once __DIR__  . '/conn.php';

$limit = 20;

// al primo caricamento offset è 0 agli altri è quello che viene passato in GET
$offset = $_GET['offset'] ?? 0;

$sql = "SELECT * FROM `students` LIMIT $limit OFFSET $offset";
// eseguo la query e salvoil risultato in una variabile
$result = $conn->query($sql);

// seleziono tutti gli studenti per contarli
$sql = "SELECT * FROM `students`";
$result_all = $conn->query($sql);
$tot_students = $result_all->num_rows;



require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';

require_once __DIR__ . '/views/students.php';

require_once __DIR__ . '/partials/footer.php';

$conn->close();
