<?php
$xml = simplexml_load_file('podaci/destinacije.xml');
?>

<!doctype html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Destinacije</title>
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
  <h2>Popis destinacija</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Naziv</th>
        <th>Država</th>
        <th>Cijena (EUR)</th>
        <th>Tip putovanja</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($xml->destinacija as $d): ?>
        <tr>
          <td><?= $d->naziv ?></td>
          <td><?= $d->drzava ?></td>
          <td><?= $d->cijena ?></td>
          <td><?= $d->tip ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
