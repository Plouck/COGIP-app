<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="/assets/CSS/style.css">
  </head>

  <body>

<header>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <img class="float-left" src="assets/image/COGIP.png" alt="">
      </div>
      <div class="col-md-8">
        COGIP C LA VI TAVU
      </div>
      <div class="col-md-2">
        <form class="float-right" action="controllers/header.php" method="post">
          <input type="text" name="log" value="Login">
          <input type="text" name="mdp" value="Mot de passe">
          <input type="submit" name="send" value="Envoi">
        </form>
      </div>
    </div>
  </div>
</header>
