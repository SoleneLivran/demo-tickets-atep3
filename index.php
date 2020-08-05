<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Billets ATEP3</title>
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">

    <h1 class="text-center">Générateur de billets</h1>
    <h3 class="text-center">Festival À Contre Sens</h3>
    <h3 class="text-center mb-2">Version de démonstration</h3>

    <form action="tickets.php" method="get" class="form">
      <div class="form-group row">
        <label for="inputTitle" class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Titre du spectacle">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputCompany" class="col-sm-2 col-form-label">Compagnie</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputCompany" name="inputCompany" placeholder="Nom de la compagnie">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputRoom" class="col-sm-2 col-form-label">Lieu</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputRoom" name="inputRoom" placeholder="Salle 25, Salle Dort, Amphi B, cafeteria, ..." maxlength="20">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputDateTime" class="col-sm-2 col-form-label">Date et heure</label>
        <div class="col-sm-10">
          <input type="datetime-local" class="form-control" id="inputDateTime" name="inputDateTime" required>
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Partie pour le vote ?</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="vote" id="yesvoteradio" value="yes" checked>
              <label class="form-check-label" for="yesvoteradio">
                Avec vote
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="vote" id="novoteradio" value="no">
              <label class="form-check-label" for="novoteradio">
                Sans vote
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group row">
        <label for="inputPlacesNbr" class="col-sm-2 col-form-label">Jauge</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPlacesNbr" name="inputPlacesNbr" placeholder="Nombre de billets à éditer" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="spectatorsNames" class="col-sm-2 col-form-label">Spectateur-ices</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="spectatorsNames" name="spectatorsNames" placeholder="Nom Prenom<?= "\n" ?>Nom Prenom<?= "\n" ?>Nom Prenom<?= "\n" ?>Etc etc..." /></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-lg btn-primary">Créer les billets</button>
    </form>

  </div>

  <footer class="mt-5 pt-5">
    <div class="row justify-content-center text-center">
      <ul class="list-inline" style="line-height:1rem;">
        <li class="list-item">
          <p>Developpé par Solène Livran</p>
        </li>
        <li class="list-item">
          <p>Bugs, questions, modifs : <a href="mailto:s.livran@gmail.com">me contacter</a></p>
        </li>
        <li>
          Repo Github de cette demo : <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
        </li>
      </ul>
    </div>
  </footer>
</body>

</html>