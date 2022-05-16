<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
</head>
<body>
    
<header>
    <div class="container">
        <div id="logoOuf" class="position-absolute top-0 start-10">
            <a href="index.php"><img src="" alt="logo "></a>
        </div>
        <div id="brandname">
          <h1 href="index.php" class="position-absolute top-0 start-50">Mini-Blog de merde</h1>
        </div>
        <!--      IDENTIFICATION OU INSCRIPTION     -->
        <div id="signInUp">
          <ul id="connInsc">
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signUp.php">Inscription</a>
            </li>
          </ul>
        </div>
    </div>

</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ACCUEIL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="articles.php">ARTICLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="postsExt.php">CONTRIBUTEURS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="autor.php">AUTEURS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDE</a>
        </li>
        <!--    NOUVEAUX ONGLETS NAV ICI     -->
      </ul>
    </div>
  </div>
</nav>