<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>dari</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <p>dari@contact.gmail</p> 
            <p>+212.34.35.67.89.76</p>
          </div>
        </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link " href="index.php">Hotels</a>
        <a class="nav-item nav-link " href="appartemment.php">Appartement</a>
        <a class="nav-item nav-link " href="galery.php">Gallery</a>
         <?php
         if (isset($_SESSION['admin']) || isset($_SESSION['user'])) {
          
          echo '<a class="nav-item nav-link" href="logout.php">deconnecter</a>';
          if (isset($_SESSION['admin'])) {
            echo '<a class="nav-item nav-link " href="admin.php">Admine</a>';
          }
          
        } else {
          echo '<a class="nav-item nav-link " href="login.php">login</a>';
          echo '<a class="nav-item nav-link" href="inscription.php">Inscription</a>';
        }
        ?>
        
      </div>
    </div>
  </nav>
