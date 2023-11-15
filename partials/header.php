<?php

//var_dump($_SERVER);
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

$logged = false;
if(isset($_SESSION['userID'])){
  $logged = true;
}

?>


<header>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/">Home</a>
  </li>
  <?php if($logged ): ?>
    <li class="nav-item">
      <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php">Elenco Studenti</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/logout.php">Logout</a>
  </li>
  <?php endif; ?>
  <?php if(!$logged ): ?>
  <li class="nav-item">
    <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/login.php">Login</a>
  </li>
  <?php endif; ?>
</ul>
</header>