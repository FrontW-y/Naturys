<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/favorie.css">
        <link type="text/css" rel="stylesheet" href="../css/header.css">
        <link type="text/css" rel="stylesheet" href="../css/ff.css">
        <title>acceuil</title>
    </head>
    <body>
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li><a class="titre" href="#">Naturalia</a></li>
                <li><a class="active" href="#">Quiz du jour</a></li>
                <li><a class="active" href="#">Encyclopédie des espèces</a></li>
                <li><a class="active" href="#">Créer un article</a></li>
                <li class="search-bar"><input type="text" placeholder="Rechercher" /><button type="submit"><img
                            src="../img/loupe.png" alt="" width="20" height="20"></button>
                    <div class="dropdown">
                <li><img onclick="myFunction()" class="icone" src="../img/utilisateur.png" alt="" width="30"
                        height="30"></li>
                <div id="myDropdown" class="dropdown-content">
                    <a href="">Mon profil</a>
                    <a href="">Mes favoris</a>
                    <a href="">Mes amis</a>
                    <a href="">Se déconnecter</a>
                </div>
                </div>
            </ul>
        </nav>
        <div class="feuille">
            <img src="../img/feuille.PNG" alt="" width="70" height="70">
        </div>
    </header>
            <script src="../js/bouton.js"></script>

            <div class="favorites-section">
                <h2 class="favorites-title">Favoris</h2>
                <br>
                <br>
                <div class="favorites-icon">
                    <img src="../img/ETOILE-JAUNE.png"
                        alt="Star with plus sign" />
                </div>
                <br>
                <br>
                <br>
                <br>
                <button class="favorites-button">VOIR LES ARTICLES</button>
            </div>

            <br>
            <br>
            <br>

            <footer class="site-footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>À propos de nous</h3>
            <p>Notre site est une fenêtre ouverte 
                <br>sur l'extraordinaire diversité de la vie animale.
                <br> chaque espèce joue un rôle unique dans l'équilibre de la nature.</p>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email : Naturalia@gmail.fr</p>
            <p>Téléphone : <br> +33 7 78 70 81 53</p>
        </div>
        <div class="footer-section">
            <h3>Newsletter</h3>
            <p>Inscrivez-vous pour recevoir des mises à jour et des informations fascinantes sur la diversité de la vie animale.</p>
            <input type="email" name="email" placeholder="Entrez votre email">
            <button type="submit">S'abonner</button>
        </div>
    </div>
    <div class="footer-bottom">
        <h3>&copy; 2023 NATURALIA.com - Tous droits réservés </h3>
    </div>
</footer>
        </body>
    </html>