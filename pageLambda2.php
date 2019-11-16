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
            <img src="images/surf.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association surf</h5>
              <p class="card-text">Si vous aimez override en swiftant sur le backside. Cette association est faite pour vous.</p>
              <a href="description5.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/foot.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association foot</h5>
              <p class="card-text">Coupe du monde, Mbappé et Pierre Ménes sont les raisons évidentes de rejoindre cette association.</p>
              <a href="description6.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/Faker.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association e-sport</h5>
              <p class="card-text">Si t'aimes jouer tout en disant que tu es dans une association alors que c'est faux. Rejoins l'arnaque.</p>
              <a href="description7.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="images/eloquence.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Association éloquence</h5>
              <p class="card-text">Si vous aimez les envolées lyriques et débats enflammés alors ce n'est pas la bonne association. Viens quand même.</p>
              <a href="description8.php" class="btn btn-warning">Description</a>
              <a href="formulaireInscription.php" class="btn btn-warning">Inscription</a>

            </div>
          </div>
          <nav class="pages">
            <nav aria-label="Page navigation example">
              <ul class="pagination">

                <li class="page-item"><a class="page-link" href="pageLambda.php">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="pageLambda3.php">3</a></li>

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