<?php echo form_open('buku/create');?>
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
  
  <title>Tambah Data Buku Perpustakaan
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
<?php echo $this->session->flashdata('hasil'); ?>


    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Buku
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" id="author">
                            <small class="form-text text-danger"><?= form_error('author'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="first_sentence">First Sentence</label>
                            <input type="text" name="first_sentence" class="form-control" id="first_sentence">
                            <small class="form-text text-danger"><?= form_error('first_sentence'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="published">Published</label>
                            <input type="text" name="published" class="form-control" id="published">
                            <small class="form-text text-danger"><?= form_error('published'); ?></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                    <?php
echo form_close();
?>
                </div>
            </div>


        </div>
    </div>

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
