<!DOCTYPE html>
<html>
<head>
  <title>Ajouter un événement</title>
  <?php include 'Composants/lien.php';?>
</head>
<body>
<?php include 'Composants/Header.php';?>

  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="col-lg-8">
      <h1 class="text-center">Ajouter un événement</h1>
      <form action="./Backend/Insertevent.php" method="post" role="form" class="php-email-form">
        <div class="row">
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" id="type" name="type" placeholder="type d'événements" required>
          </div>

          <div class="col-md-6 form-group" style="margin-top: 25px;">
            <input type="date" id="date" name="date" class="form-control" placeholder="Date de l'événement" required>
          </div>
          
          <div class="form-group mt-3">
            <textarea class="form-control" name="description" rows="5" placeholder="Description de l'événement" required></textarea>
          </div> 
          <div class="text-center">
            <button type="submit">Ajouter</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php include 'Composants/Footer.php';?>
</body>
</html>
