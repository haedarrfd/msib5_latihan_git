<?php
$name = 'Haedar Roofid';
$domisili = 'Tangerang, Indonesia';
$hobby = [
  'hobby_1' => 'Olahraga',
  'hobby_2' => 'Mendengarkan Music'
];
$nama_univ = 'Universitas Pamulang';
$jurusan = 'Teknik Informatika';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Latihan Week 1 | Haedar Roofid</title>
  <!-- Bootstrap 5.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- My Style -->
  <style>
    .row {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .card {
      transition: all .2s ease-in-out;
      cursor: no-drop;
      background: rgb(92, 59, 227)
    }

    .card:hover {
      box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
      transform: scale(1.01);
    }
  </style>
</head>

<body class="bg-body-secondary">
  <div class="container">
    <div class="row">
      <div class="col-10 col-md-6 col-lg-5">
        <div class="card mx-auto text-white">
          <div class="card-body">
            <h5 class="card-title text-center text-uppercase"><?= $name; ?></h5>
            <h6 class="card-subtitle text-center pt-1 mb-2 text-secondary-emphasis"><?= $domisili; ?></h6>
            <p class="card-text pt-2">Halo perkenalkan nama saya <?= $name; ?> dan saya kuliah di <?= $nama_univ; ?> jurusan <?= $jurusan; ?>, domisili saya di <?= $domisili; ?>. Hobi saya adalah <?= $hobby['hobby_1']; ?> dan <?= $hobby['hobby_2']; ?>. Alasan saya memilih Web Developer karena saya mempunyai minat dalam bidang mengembangkan website.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>