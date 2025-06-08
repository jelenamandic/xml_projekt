<?php
$xml = simplexml_load_file('podaci/putnici.xml');
?>

<!doctype html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Putnici</title>
  <link rel="stylesheet" href="destinacije.css">
</head>
<body>
<header>
    <h1>Putovanja</h1>
    <a href="pocetna.html">Početna</a>
    <a href="index.php">Putnici</a>
    <a href="destinacije.php">Destinacije</a>
</header>
<div class="container mt-5">
  <h2>Popis putnika</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Email</th>
        <th>Destinacija</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($xml->putnik as $p): ?>
        <tr>
          <td><?= $p->ime ?></td>
          <td><?= $p->prezime ?></td>
          <td><?= $p->email ?></td>
          <td><?= $p->destinacija ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
