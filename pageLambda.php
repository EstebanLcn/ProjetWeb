<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/projectfooter.css" />
  <link rel="stylesheet" href="css/projectnav.css" />
  <link rel="stylesheet" href="css/project.css" />
  <link rel="stylesheet" href="css/pageL.css" />

  <title>PageLambda</title>
</head>

<body>

  <?php include("header.php");
  ?>

  <div id="container">


    <?php include("nav.php");
    ?>
    <div class="title">
      <h1>Liste des associations</h1>
      <div>

        <div class="big">
          <div class="card" style="width: 18rem;">
            <img src="images/basket.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association Basket</h5>
              <p class="card-text">Si vous avez envie de fouler le parquet et mettre des trois points de l'autre bout du terrain. Cette association est faite pour vous.</p>
              <a href="description.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/biblio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association Bibliothèque</h5>
              <p class="card-text">Si vous avez lu des "classiques" et que vous aimez dire chut avec votre doigt devant votre bouche. Cette association est faite pour vous.</p>
              <a href="description2.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/hacker.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Root me</h5>
              <p class="card-text">Si vous pensez qu'hackez un compte dofus et de jouer a Watch Dogs fait de vous un anonymous. Cette association est faite pour vous.</p>
              <a href="description3.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/muscu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association muscu</h5>
              <p class="card-text">Damnnnnnn les gens, les petites</p>
              <a href="description4.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <nav class="pages">
            <nav aria-label="Page navigation example">
              <ul class="pagination">

                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="pageLambda2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="pageLambda3.php">3</a></li>

              </ul>
            </nav>
          </nav>
        </div>

      </div>


      <footer class="jean">



        <a href="mentions_legales.php">Mentions légales</a>
        <a href="#">Contactez-nous</a>
        <a href="#">Menu</a>
        <a href="#">@Home</a>

      </footer>

</body>

</html>