<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="page_dessins.css">
</head>

<body>
    <main>
        <div class="explication">
            <h1>Mes Dessins Numériques</h1>
            <p>Sur cette page, vous découvrirez mes dessins fait sur tablette graphique.</p>
            <p>Découvrez ces porductions ci-dessous :</p>
        </div>

        <div class="carousel">
            <button class="fleche_gauche" aria-label="Défiler à gauche">◀</button>

            <div class="slides">
                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/Alen.png" alt="Alen">
                        </div>
                        <div class="slide-texte">
                            <h2>Alen</h2>
                            <p>Personnage de la série Invincible, je l'ai reproduit en pixel art pour un ami.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/107.png" alt="Tygnon Little Mac">
                        </div>
                        <div class="slide-texte">
                            <h2>Tygnon Little Mac</h2>
                            <p>Ce personnage est un pokemon que j'ai redessiner pour pouvoir le jouer dans le jeu Pokemon infinite Fusion.<br>
                        Il est un sprite du pokemon Tygnon, avec comme référence Little Mac, personnage du jeu Punch Out.</p>
                        </div>
                    </div>
                </div>
                
                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/269.450.png" alt="Togekiss & Nekrozma">
                        </div>
                        <div class="slide-texte">
                            <h2>Togekiss & Nekrozma</h2>
                            <p>Ce personnage est un pokemon que j'ai redessiner pour pouvoir le jouer dans le jeu Pokemon infinite Fusion.<br>
                        Il est un sprite du pokemon Togekiss fusionné avec le pokemon Nekrozma, avec comme référence Radiance, Boss final du jeu Hollow Knight.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/269.470.png" alt="Togekiss & Ultra Nekrozma">
                        </div>
                        <div class="slide-texte">
                            <h2>Togekiss & Ultra Nekrozma</h2>
                            <p>Ce personnage est un pokemon que j'ai redessiner pour pouvoir le jouer dans le jeu Pokemon infinite Fusion.<br>
                        Il est un sprite du pokemon Togekiss fusionné avec le pokemon Ultra Nekrozma, avec comme référence Radiance, Boss final du jeu Hollow Knight.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/King_K_Rool.png" alt="King K Rool">
                        </div>
                        <div class="slide-texte">
                            <h2>King K Rool</h2>
                            <p>Personnage de la Licence Donky Kong,<br>
                            Je l'ai reproduit en pixel art pour un projet Personnel de reproduire 
                            tout les personnages du jeu Super Smash Bros Ultimate.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/kirby.png" alt="Kirby">
                        </div>
                        <div class="slide-texte">
                            <h2>Kirby</h2>
                            <p>Personnage eponyme de la Licence Kirby,<br>
                            Je l'ai reproduit en pixel art pour un projet Personnel de reproduire 
                            tout les personnages du jeu Super Smash Bros Ultimate.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/Meta_Khight.png" alt="Meta Knight">
                        </div>
                        <div class="slide-texte">
                            <h2>Meta Knight</h2>
                            <p>Personnage de la Licence Kirby,<br>
                            Je l'ai reproduit en pixel art pour un projet Personnel de reproduire 
                            tout les personnages du jeu Super Smash Bros Ultimate.</p>
                        </div>
                    </div>
                </div>
                
                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <img src="numerique/Pirana_Plant.png" alt="Plante Piranha">
                        </div>
                        <div class="slide-texte">
                            <h2>Plante Piranha</h2>
                            <p>Personnage de la Licence Mario,<br>
                            Je l'ai reproduit en pixel art pour un projet Personnel de reproduire 
                            tout les personnages du jeu Super Smash Bros Ultimate.</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <button class="fleche_droite" aria-label="Défiler à droite">▶</button>

            <div class="categories"></div>
        </div>

    </main>
    <script src="java.js"></script>
</body>

</html>
<?php
include 'footer.php';
?>