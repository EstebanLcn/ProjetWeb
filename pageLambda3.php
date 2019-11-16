<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/projectfooter.css" />
  <link rel="stylesheet" href="css/projectnav.css" />
  <link rel="stylesheet" href="css/project.css" />
  <link rel="stylesheet" href="css/pageL.css" />
  <link rel="icon" href="images/bde.png" />
  <title>page associations</title>
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

            <img src="images/musique.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association musique</h5>
              <p class="card-text">Si vous avez le sens du rythme et aimer faire des soirées karaokés alors cette association est faite pour vous.</p>
              <a href="description9.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/combat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association combat</h5>
              <p class="card-text">On attends l'heure, la date, le jour. Octogone.</p>
              <a href="description10.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/drole.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association humour</h5>
              <p class="card-text">Si vous voulez apprendre à être drôle, cette association est faite pour vous.</p>
              <a href="description11.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/jeu.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association jeux de sociétés</h5>
              <p class="card-text">Le "Où est Thomas" et le jeu des 7 différences font de cette association une des meilleures.</p>
              <a href="description12.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>

            </div>
          </div>
          <nav class="pages">
            <nav aria-label="Page navigation example">
              <ul class="pagination">

                <li class="page-item"><a class="page-link" href="pageLambda.php">1</a></li>
                <li class="page-item"><a class="page-link" href="pageLambda2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>

              </ul>
            </nav>
          </nav>
        </div>

      </div>


      <footer class="jean">


        <?php include 'footer.php' ?>

      </footer>

</body>

</html>