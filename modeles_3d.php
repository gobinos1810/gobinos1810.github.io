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
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

    <main>
        <div class="explication">
            <h1>Mes Modèles 3D</h1>
            <p>Avec les outils de modélisations 3D, tel que Blender et BlockBench, j'en ai fait aussi bien pour me permettre de me perfectionner et apprendre l'utilisation du logiciel que pour des demandes d'amis.</p>
            <p>Découvrez donc ci-dessous ces modèles :</p>
        </div>

        <div class="carousel">
            <button class="fleche_gauche" aria-label="Défiler à gauche">◀</button>

            <div class="slides">
                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/monster.gltf"
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Monster</h2>
                            <p>Ce modèle 3D, fait sur l'outil BlockBench, avait pour but de créer un monstre pour le jeu Minecraft.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/puit.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Puit</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente un puit de style médiéval.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/walmart.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Walmart</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente un magasin Walmart.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/frigo.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Frigo</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente un frigo de style moderne.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/cybertruck.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Cybertruck</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente un Cybertruck de style futuriste.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/commode.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Commode</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente une commode de style moderne.</p>
                        </div>
                    </div>
                </div>

                <div class="contenu">
                    <div class="photo_texte">
                        <div class="slide-image">
                            <model-viewer
                                src="3D/lit.glb"
                                autoplay
                                auto-rotate
                                camera-controls
                                style="width: 80%; height: 600px;"
                                class="box">
                            </model-viewer>
                        </div>
                        <div class="slide-texte">
                            <h2>Lit</h2>
                            <p>Ce modèle 3D, fait sur l'outil Blender, représente un lit de style moderne.<br>
                        Ce modèle devait avoir le drap adapté au matelas, mais l'exportation ne voulais pas fonctionner correctement.</p>
                        </div>
                    </div>
                </div>

            </div>

            <button class="fleche_droite" aria-label="Défiler à droite">▶</button>

            <div class="categories"></div>
        </div>

    </main>
    <script src="java_3D.js"></script>
</body>

</html>
<?php
include 'footer.php';
?>