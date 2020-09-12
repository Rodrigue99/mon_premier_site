<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body onload=showDate();>
    <div class="container">
        <div class="row">
            <div id="case1">
                <p class="un">
                    <img src="images/rodrigue.jpg" alt="Ma photo" class="photo"><br><br>
                    <marquee behavior="" direction="left">Bonjour <img src="images/1f44b.png" alt="sticker salut"
                            class="sticker" />, je suis Rodrigue HOUNKPATIN.</marquee>
                </p>
                <p class="text">
                    Etudiant en informatique et passionné du numérique.
                </p>
            </div>
        </div>
        <div class="row">
            <div id="images">
                <h2>Découvrez mon pays le Bénin</h2>
                <hr><br><br>
                <div class="col-md-12">
                    <img src="images/Basilica_of_Ouidah.jpg" alt="Basilique de Ouidah">
                    <img src="images/cotonou-benin.jpg" alt="Cotonou">
                    <img src="images/images (1).jpeg" alt="cotonou-benin">
                </div>
                <div class="col-md-12">
                    <img src="images/etoile_rouge.jpeg" alt="étoile rouge">
                    <img src="images/nasikiliza-benin-a-competition-to-transform-the-countrys-tourist-sites-into-a-laboratory-for-innovation-780x439.jpg"
                        alt="Benin">
                    <img src="images/porte-du-non-retour-benin.jpg" alt="porte-du-non-retour-benin">
                </div>
            </div>
        </div>
        <div class="row">
            <div id="horloge">
                <h2>L'heure a Cotonou et dans tout le pays</h2>
                <hr>
                <div class="col-md-12">
                    <h1 id="heure">12:01:58</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="contact">
                <h2>Contacter moi</h2>
                <hr>
                <div class="formulaire">
                    <form method="POST" action="cible.php">
                        <p>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="nom" class="form-control" placeholder="Nom"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
                                    class="form-control" style="height: 100px;"></textarea><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                            </div>
                        </div>
                        </p>
                    </form>
                </div>
                <div class="whatsapp">
                    <a href="https://whatsapp.com"><img src="images/téléchargement.png" alt="icône whatsapp"></a>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function refresh() {
            var t = 1000; // rafraîchissement en millisecondes
            setTimeout('showDate()', t)
        }

        function showDate() {
            var date = new Date()
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();
            if (h < 10) { h = '0' + h; }
            if (m < 10) { m = '0' + m; }
            if (s < 10) { s = '0' + s; }
            var time = h + ':' + m + ':' + s
            document.getElementById('heure').innerHTML = time;
            refresh();
        }
    </script>
</body>

</html>