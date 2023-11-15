<?php

// mi connetto al DB
require_once __DIR__  . '/conn.php';

$id_student = $_GET['id'];
$sql = "SELECT * FROM `students` WHERE `id` = $id_student";
$result = $conn->query($sql);
$student = $result->fetch_object();

$offset = $_GET['offset'] ?? 0;




require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';

require_once __DIR__ . '/views/student.php';

require_once __DIR__ . '/partials/footer.php';


$conn->close();
