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
    <script src="js/script_menu.js"></script>

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <section id ="voiture_simple_">
        <div  id="jeu" class="text-center">
            <img id="fond1" class="fond" src="./imgs/route.png">
            <img id="fond2" class="fond" src="./imgs/route.png">
            <img id="vj" src="./imgs/vj.png"> <!-- La voiture jaune -->
            <img id="vr" src="./imgs/vr.png"> <!-- La voiture rouge -->
            <img id="bl" src="./imgs/bl.png"> <!-- ballon           -->
            <img id="ok" src="./imgs/ok.png"> <!-- bonbon           -->
        </div>
        <div class="col-xs-1 text-right">
            <a id="gauche"><button class="btn btn-success btn-lg" >g</button></a>
        </div>
        <div id="affichage" class="col-xs-10 text-center">
            <p>
                Collisions : <span id="info">0</span><br>
                Score: <span id="result"> 0 </span>pts<br>
                Temps de jeu: <span id="temps">0</span> s<br>
                Vie de la voiture : <span id="life"> 10 </span>
            </p>
        </div>
        <div class="col-xs-1 text-left">
            <a id="droite"><button class="btn btn-warning btn-lg" >d</button></a>
        </div>
    </section>
    
    <section id ="voiture_results_">
        <div id="score" class="text-center">
            <p>
                Score: <span id="result1"> </span>pts<br>
                Temps de jeu: <span id="temps1"> </span> s<br>
            </p>
        </div>
        <br>
        <div class="text-center">
            <a id="rejouer" href="index.php"><button class="btn btn-success btn-lg" >Rejouer</button></a>
        </div>
    </section>

</body>
</html>
