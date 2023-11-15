<main class="container my-5">
<h1><?php echo $student->name ?> <?php echo $student->surname ?></h1>
  <p>
    Matricola: <?php echo $student->registration_number ?> <br>
    Email: <?php echo $student->email ?> <br>
  </p>

  <div>
    <a class="btn btn-success" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php?offset=<?php echo $offset ?>">Torna</a>
  </div>
</main>