<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/projectfooter.css" />
  <link rel="stylesheet" href="css/projectnav.css" />
  <link rel="stylesheet" href="css/project.css" />
  <link rel="stylesheet" href="css/contact_us.css" />
  <link rel="icon" href="images/bde.png" />
  <title>Contact</title>
</head>

<body>
  <?php include("header.php");
  ?>

  <div id="container">
    <div class="title">

    </div>
    <video autoplay muted loop id="myVideo">
      <source src="video.mp4" type="video/mp4">
    </video>

    <!-- Optional: some overlay text to describe the video -->
    <div class="content">
      <h1>Comment nous joindre ?</h1>
      <p>Adresse mail : bdecesi33@gmail.com</p>
      <p>Numéro de téléphone : 118 218</p>
      <!-- Use a button to pause/play the video with JavaScript -->
      <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>
  </div>

  <footer class="jean">


    <?php include 'footer.php' ?>


  </footer>
  <?php
  ?>
</body>
<script>
  // Get the video
  var video = document.getElementById("myVideo");

  // Get the button
  var btn = document.getElementById("myBtn");

  // Pause and play the video, and change the button text
  function myFunction() {
    if (video.paused) {
      video.play();
      btn.innerHTML = "Pause";
    } else {
      video.pause();
      btn.innerHTML = "Play";
    }
  }
</script>

</html>