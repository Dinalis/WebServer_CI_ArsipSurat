<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- style css -->
  <style>
    .badge {
      margin-left: 3px;
    }
  </style>
  <!--   <title>Hello, world!</title> -->
  <title><?php echo $title ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container col-12">
      <!-- <img src="3.jpg" width="5%"> &nbsp; -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#<?= base_url('surat_masuk'); ?>">Data Surat Masuk</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#<?= base_url('surat_keluar'); ?>">Data Surat Keluar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#<?= base_url('instansi'); ?>">Instansi</a>
          </li> -->
          <li class="nav-item">
          <a class="nav-item nav-link" href="<?=base_url();?>auth/logout">Logout</a>
          </li> 
          <!--<li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
        </ul>
      </div>
    </div>
  </nav>