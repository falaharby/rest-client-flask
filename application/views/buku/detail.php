<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  
  <title>Detail Data Buku Perpustakaan
  </title>
  <style>
    .navbar {
			background-image: url(<?php echo base_url()?>assets/img/header-api.png);
		}
  </style>
</head>

<body style ="background-image: url(<?php echo base_url()?>assets/img/bg-api.png);
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" style="color: #15377C; font-family: 'Cabin', sans-serif; font-size: 35px" href="#">DATA BUKU PERPUSTAKAAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa"></a>
        </div>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Buku
                </div>
                <?php foreach ($books as $rows) :?>
                <div class="card-body">
                
                    <p class="card-title">Title : <?= $rows->title; ?></p>
                    <p class="card-text">Author : <?= $rows->author; ?></p>
                    <p class="card-text">First Sentence : <?= $rows->first_sentence; ?></p>
                    <p class="card-text">Published :<?= $rows->published; ?></p>
                    <a href="<?= base_url(); ?>buku" class="btn btn-primary">Kembali</a>
                </div>
                <?php endforeach;?>
            </div>
        
        </div>
    </div>
<br>
<a href="http://falahwebservice.pythonanywhere.com/books/<?php echo $rows->id?>">Lihat JSON</span></a>
</div>



   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
  </body>
</html>