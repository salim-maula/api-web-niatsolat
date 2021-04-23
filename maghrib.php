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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container text-center">

    <div class="col align-self-center">
                <div class="card p-3 mb-3 shadow rounded bg-secondary" style="margin-top: 80px;">
                    <div class="card-body text-white">
                        <p class="card-text text-center display-6 fw-bold">
                            <?= $data[3]['name']; ?>
                        </p>
                        <p class="text-center"><?= $data[3]['arabic']; ?></p>
                        <p class="text-center"><?= $data[3]['latin']; ?></p>
                        <p class="text-center"><?= $data[3]['terjemahan']; ?></p>
                    </div>
                </div>
            </div>

    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>
