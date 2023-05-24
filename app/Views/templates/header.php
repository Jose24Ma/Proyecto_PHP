<!doctype html>
<html>
<head>
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Proyecto PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?=base_url('principal')?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('login')?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('registro')?>">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('datos')?>">Datos</a>
        </li>
      </ul>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>