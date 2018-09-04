<?php require "models/login.php" ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/CSS/style.css">

</head>

  <body>
  <div class="container-fluid">

    <header>
        <div class="row" id="header">
          <div class="col-md-2">
            <figure>
              <img src="assets/image/COGIP.png" alt="logoCOGIP">
            </figure>
          </div>
          <div class="col-md-8" id="slogan">
            <p>Chez COGIP <br> pas de gossip <br> on cogit</p>
          </div>
          <div class="col-md-2">
            <?php require ('formlog.vues.php') ?>
          </div>
        </div>

    </header>
