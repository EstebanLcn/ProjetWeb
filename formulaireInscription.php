<?php
if (isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/projectfooter.css" />
<link rel="stylesheet" href="css/projectnav.css" />
<link rel="stylesheet" href="css/project.css" />
<link rel="icon" href="images/bde.png" />
<title>Inscription</title>

</head>

<body>

  <?php include("header.php");        ?>
  <div id="container">
    <div class="ee">
      <?php
      if (isset($_SESSION['errors'])) : ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>

      <?php endif; ?>
      <?php
      if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success">
          Votre email a été bien envoyé
        </div>

      <?php endif; ?>
      <form class="big_formulaire" action="post_contact.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNom">Nom</label>
            <input type="text" name="name" class="form-control" id="inputNom" placeholder="Nom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPrenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Votre email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Ville</label>
            <input type="text" name="city" class="form-control" id="inputCity" value="<?= isset($_SESSION['inputs']['city']) ? $_SESSION['inputs']['city'] : ''; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Promo</label>
            <select id="inputState" name="promo" class="form-control" value="<?= isset($_SESSION['inputs']['promo']) ? $_SESSION['inputs']['promo'] : ''; ?>">
              <option selected>Votre promo</option>
              <option value="0" selected>A1</option>
              <option value="1">A2</option>
              <option value="2">A3</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Vos motivations au sein de cette association</label>
          <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
  <footer class="jean">


    <?php include 'footer.php' ?>


  </footer>
</body>

</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>