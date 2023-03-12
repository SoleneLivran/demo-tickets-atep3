<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="./css/index-style.css" rel="stylesheet">

    <title>Billets ATEP3</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">

    <h1 class="text-center">Générateur de billets</h1>
    <h3 class="text-center">Festival À Contre Sens</h3>
    <h3 class="text-center mb-2">Version de démonstration</h3>

    <div>
        <input id="instructions" class="hidden" type="checkbox">
        <label for="instructions" class="info-label" tabindex="1">
            (cliquer ici pour afficher/cacher le mode d'emploi)
        </label>
        <div class="info-details">
            <p>
                Remplir toutes les informations sur la représentation.
            </p>
            <p>
                Pour le champ "Spectateurices", vous pouvez simplement copier-coller une liste de noms, par exemple
                depuis un excel ou autre généré par Eventbrite. Les billets seront numérotés, dans l'ordre des noms
                renseignés.
            </p>
            <p>
                Le nombre renseigné dans le champ "jauge" sera le nombre de billets à imprimer.
            </p>
            <p>
                Si la jauge indiquée est plus grande que le nombre de noms dans "Spectateurices", les billets
                supplémentaires seront créés sans nom spécifique. Ca peut servir, pour avoir des billets "vierges" à
                distribuer au dernier moment aux personnes n'ayant pas réservé.
            </p>
            <p>
                Si la jauge indiquée est plus petite que le nombre de noms dans "Spectateurices", vous aurez une alerte
                en haut de la page des billets, pour y faire attention.
            </p>
            <p>
                Quand tout est ok, cliquez sur "Loutre", et cela va générer les billets. Si les billets semblent
                “bizarres”
                avant d’imprimer, c’est normal. Ils prennent les bonnes proportions au moment de l’impression.
                Le preview de l’impression vous montrera normalement leur vraie tête !
            </p>
            <p>
                Bon à savoir : cet outil a été développé pour fonctionner sous Google Chrome. Il est possible que cela
                ne fonctionne pas, ou pas bien, en utilisant un autre navigateur.
            </p>
            <p>
                En cas de questions, ou de souci, mes coordonnées sont en bas de la page, n'hésitez pas !
            </p>
            <p class="small">
                (Si vous vous demandez pourquoi "loutre", demandez à un·e ancien·ne atépien·ne ;) on vous aime, bon
                Festival !)
            </p>
        </div>
    </div>

    <form action="tickets.php" method="get" class="form">
        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" name="inputTitle"
                       placeholder="Titre du spectacle">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCompany" class="col-sm-2 col-form-label">Compagnie</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCompany" name="inputCompany"
                       placeholder="Nom de la compagnie">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRoom" class="col-sm-2 col-form-label">Lieu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputRoom" name="inputRoom"
                       placeholder="Salle 25, Salle Dort, Amphi B, cafeteria, ..." maxlength="20">
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
                <input type="number" class="form-control" id="inputPlacesNbr" name="inputPlacesNbr"
                       placeholder="Nombre de billets à éditer" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="spectatorsNames" class="col-sm-2 col-form-label">Spectateur-ices</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="spectatorsNames" name="spectatorsNames"
                          placeholder="Nom Prenom<?= "\n" ?>Nom Prenom<?= "\n" ?>Nom Prenom<?= "\n" ?>Etc etc..."/></textarea>
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