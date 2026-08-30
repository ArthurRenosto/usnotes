<?php

    include_once("config/url.php");
    include_once("config/process.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de contatos</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- FONTES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
  <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">

</head>

<body>

    <header>
    
      <nav class="navbar navbar-expand-lg">
    
        <div class="navbar-nav mx-auto">
    
          <a class="nav-link" href="<?= $BASE_URL ?>index.php">Notas</a>
        
          <a class="navbar-brand mx-3" href="<?= $BASE_URL ?>index.php">
          <img src="<?= $BASE_URL ?>img/home_img.png" alt="balioAndNavi"> <!-- Imagem -->
          </a>

          <a class="nav-link" href="<?= $BASE_URL ?>galery.php">Galeria</a>
    
        </div>

      </nav>
    
   </header>