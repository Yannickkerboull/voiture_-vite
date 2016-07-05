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
    <title>Voiture</title>
    <link rel="stylesheet" href="styles/style1.css" type="text/css" />
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div id="jeu">
        <img id="fond1" class="fond" src="./imgs/route.png">
        <img id="fond2" class="fond" src="./imgs/route.png">
        <img id="vj" src="./imgs/vj.png"> <!-- La voiture jaune -->
        <img id="vr" src="./imgs/vr.png"> <!-- La voiture rouge -->
    </div>
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

</body>
</html>
