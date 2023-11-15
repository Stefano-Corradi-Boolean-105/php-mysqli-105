<main class="container my-5">
<h1>Elenco studenti</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Cognome</th>
      <th scope="col">Matricola</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    <?php if($result && $result->num_rows > 0):
      while($row = $result->fetch_object()):
      ?>
        <tr>
          <td scope="row"><?php echo $row->id ?></td>
          <td><?php echo $row->name ?></td>
          <td><?php echo $row->surname ?></td>
          <td><?php echo $row->registration_number ?></td>
          <td><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/student.php?id=<?php echo $row->id ?>&offset=<?php echo $offset ?>" class="btn btn-success">VAI</a></td>
        </tr>
    <?php endwhile; ?>

    <?php else: ?>
      <h3>Non ci sono risultati</h3>
    <?php endif; ?>

  </tbody>
</table>

<div class="container my-3 text-center">
  
  <?php if($offset > 0): ?>
    <a class="btn btn-success" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php?offset=0" > |<< </a>
    <a class="btn btn-success me-3" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php?offset=<?php echo $offset - $limit  ?>" > << </a>
  <?php endif; ?>

  <?php if($offset + $limit < $tot_students): ?>
    <a class="btn btn-success" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php?offset=<?php echo $offset + $limit  ?>" > >> </a>
    <a class="btn btn-success" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-mysqli/students.php?offset=<?php echo $tot_students - $limit  ?>" > >>| </a>
  <?php endif; ?>
</div>


</main>