<?php
/**
 * Created by PhpStorm.
 * User: Yannick
 * Date: 05/07/2016
 * Time: 11:48
 */



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Voiture</title>
    <link rel="stylesheet" href="styles/style1.css" type="text/css" />
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div id="jeu" class=".col-sx-9 .col-sm-9 .col-md-12 .col-lg-12" >
                    <img id="fond1" class="fond" src="./imgs/route.png">
                    <img id="fond2" class="fond" src="./imgs/route.png">
                    <img id="vj" src="./imgs/vj.png"> <!-- La voiture jaune -->
                    <img id="vr" src="./imgs/vr.png"> <!-- La voiture rouge -->
                </div>
                <div id="affichage" class=".col-sx-3 .col-sm-3 .col-md-12 .col-lg-12 text-center">
                    <table id="panel">
                        <tr>
                            <td></td>
                            <td>Collisions : <span id="info">0</span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Temps de jeu: <span id="temps">0</span> s</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
