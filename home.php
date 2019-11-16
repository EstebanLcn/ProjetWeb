<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/projectfooter.css" />
  <link rel="stylesheet" href="css/projectnav.css" />
  <link rel="stylesheet" href="css/project.css" />
  <link rel="stylesheet" href="css/pageL.css" />
  <link rel="stylesheet" href="css/home.css" />

  <title>Home</title>
</head>

<body>
  <div class="head">
    <img src="images/head_bde.jpg" alt="" class="head_img">
  </div>
  <?php include("header.php"); ?>
  <div id="container">
    <?php include("nav.php");
    ?>
    <div class="corps">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/home.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/bde_cesi.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/soiree.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <a class="linkz" href="evenement.php">Rejoignez la soirée</a>
      <div class="border border-dark presentation">

        <p>Le BDE est une organisation à but non lucratif qui vise à promouvoir la vie associative du Cesi Bordeaux en donnant une impulsion aux projets et envies des étudiants. Nous avons pu par exemple organiser un gala, un week-end ski sans compter les nombreuses soirées actives que nous pratiquons en réservant bars, boites.</p>
        <p>La vie associative est fondamentale au BDE et nous offrons un large panel de découverte au fil de l'année.</p>
        <p>Nous vivons grâce à nos nombreuses actions (pull, photo de classe mais aussi ventes de gâteaux) mais nous sommes toujours à la recherche de nouveaux éléments puisque chaque année la promotion suivante prends les rennes.</p>
        <a class="linkz" href="#">Alors prenez les devants</a>

      </div>
      <h3>Les dirigeants du BDE</h3>
      <div class="card-group">
        <div class="card">
          <img src="images/leo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Leo</h5>
            <p class="card-text">Président du BDE</p>
          </div>

        </div>
        <div class="card">
          <img src="images/nelson.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nelson</h5>
            <p class="card-text">Vice-président</p>
          </div>

        </div>
        <div class="card">
          <img src="images/romain.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Romain</h5>
            <p class="card-text">Trésorier</p>
          </div>

        </div>
        <div class="card">
          <img src="images/julien.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Julien</h5>
            <p class="card-text">Vice-trésorier</p>
          </div>

        </div>
        <div class="card">
          <img src="images/Aurelien.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aurélien</h5>
            <p class="card-text">Secrétaire</p>
          </div>
        </div>
        <div class="card">
          <img src="images/lea.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lea</h5>
            <p class="card-text">Vice-secrétaire</p>
          </div>

        </div>

      </div>
      <h3>Nos actions
      </h3>
      <div class="triple">
        <div class="card" style="width: 18rem;">
          <img src="images/evenement.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><a class="linkz" href="#">Evénements</a></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/associations.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><a class="linkz" href="pageLambda">Associations</a></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/bde_cesi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><a class="linkz" href="panier/boutique.php">Boutique</a></p>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-dark fin">Rejoignez-nous</button>

    </div>
  </div>
  <footer class="jean">
    <a href="mentions_legales">Mentions légales</a>
    <a href="contact_us">Contactez-nous</a>
    <a href="#">Menu</a>
    <a href="home.php">@Home</a>

  </footer>
  <script>
    (function() {
      if (!localStorage.getItem('cookieconsent')) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(request.responseText);
            var eu_country_codes = ['AL', 'AD', 'AM', 'AT', 'BY', 'BE', 'BA', 'BG', 'CH', 'CY', 'CZ', 'DE', 'DK', 'EE', 'ES', 'FO', 'FI', 'FR', 'GB', 'GE', 'GI', 'GR', 'HU', 'HR', 'IE', 'IS', 'IT', 'LT', 'LU', 'LV', 'MC', 'MK', 'MT', 'NO', 'NL', 'PO', 'PT', 'RO', 'RU', 'SE', 'SI', 'SK', 'SM', 'TR', 'UA', 'VA'];
            if (eu_country_codes.indexOf(data.countryCode) != -1) {
              document.body.innerHTML += '\
					<div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
						This site uses cookies. By continuing to use this website, you agree to their use. \
						<a href="#" style="color:#CCCCCC;">I Understand</a>\
					</div>\
					';
              document.querySelector('.cookieconsent a').onclick = function(e) {
                e.preventDefault();
                document.querySelector('.cookieconsent').style.display = 'none';
                localStorage.setItem('cookieconsent', true);
              };
            }
          }
        };
        request.open('GET', 'http://ip-api.com/json', true);
        request.send();
      }
    })();
  </script>
</body>

</html>