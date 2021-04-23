<?php
    $url = file_get_contents('https://islamic-api-zhirrr.vercel.app/api/niatshalat');
    $data = json_decode($url, true);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- Font AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Niat Solat</title>
  </head>
  <body>

  <nav class="navbar navbar-dark navbar-expand bg-dark">
  <div class="container">
    <a href="index.php" class="navbar-brand"><i class="fas fa-mosque"></i> Yuk, Solat</a>
  </div>
</nav>

<div class="list-group">
  <a href="subuh.php" class="list-group-item list-group-item-action">
  Niat Sholat Subuh
  </a>
  <a href="zuhur.php" class="list-group-item list-group-item-action">Niat Sholat Dzuhur</a>
  <a href="asar.php" class="list-group-item list-group-item-action">Niat Sholat Ashar</a>
  <a href="maghrib.php" class="list-group-item list-group-item-action">Niat Sholat Maghrib</a>
  <a href="isya.php" class="list-group-item list-group-item-action">Niat Sholat Isya</a>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
