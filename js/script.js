/**
 * Created by Yannick on 05/07/2016.
 */
//$(document).ready(function() {


function voiture(){

    var continued = true;
    var ok = 1;
    var savDebTime = $.now();
    var temps = 0;
    var result = -20;
    var pertePoints = 0;
    var nbLife = 10;

    function deplace()
    {
        if (continued){
            $('#vr').animate({top: '-=600'}, 2500, 'linear', function(){
                var vrX = Math.floor(Math.random()*194)+70;
                var vrY = 400;
                $('#vr').css('top',vrY);
                $('#vr').css('left',vrX);
                ok = 1;
                if (pertePoints == 0) {
                    result = result + 20;
                }else{
                    pertePoints = 0;
                }
                $('#result').text(result + " ");

            });
            $('#vr').animate({top: '-=600'}, 2500, 'linear', function(){
                var vrX = Math.floor(Math.random()*194)+70;
                var vrY = 400;
                $('#vr').css('top',vrY);
                $('#vr').css('left',vrX);

                $('#result').text(result + " ");

            });
            $('.fond').animate({top: '-=360'}, 1000, 'linear', function(){
                $('.fond').css('top',0);
                deplace();
            });
        }else
        {
            $('#vr').stop(true,true);
            $('.fond').stop(true,true);
            $("#voiture_simple_").hide();
            $("#voiture_results_").show();
            $('#result1').text(result + " ");
            $('#temps1').text(temps + " ");
        }
    }


    //Partie touche de l'appli
    $('#droite').click(function (e) {
        if (continued) {
            vjX = parseInt($('#vj').css('left'));
            if (vjX < 280)
                $('#vj').css('left', vjX + 30);
        }
    });
    $('#gauche').click(function (e) {
        if (continued) {
            vjX = parseInt($('#vj').css('left'));
            if (vjX > 70)
                $('#vj').css('left', vjX - 30);
        }
    });

    //Partie touche du clavier
    $(document).keydown(function (e) {
        if (continued) {
            if (e.which == 39) {
                vjX = parseInt($('#vj').css('left'));
                if (vjX < 280)
                    $('#vj').css('left', vjX + 30);
            }
            if (e.which == 37) {
                vjX = parseInt($('#vj').css('left'));
                if (vjX > 70)
                    $('#vj').css('left', vjX - 30);
            }
        }
    });

    function collision() {
        vjX = parseInt($('#vj').css('left'));
        vrX = parseInt($('#vr').css('left'));
        vjY = 10;
        vrY = parseInt($('#vr').css('top'));
        if (((vrX > vjX) && (vrX < (vjX + 66)) && (vrY > vjY) && (vrY < (vjY + 150)) && (ok == 1))
            || ((vjX > vrX) && (vjX < (vrX + 66)) && (vrY > vjY) && (vrY < (vjY + 150)) && (ok == 1))) {
            collision = parseInt($('#info').text()) + 1;
            $('#info').text(collision);
            ok = 0;
            result = result - 10;
            pertePoints = 10;
            $('#result').text(result + " ");
            vieCompt();
        }
    }

    function vieCompt(){
        nbLife--;
        $('#life').text(nbLife);
        if (nbLife == 0) {
            continued = false;
        }
    }

    function timer(){
        if (continued) {
            temps = ( $.now() - savDebTime) / 1000;
            temps = parseInt(temps);
            if (temps > 60) {
                var min = 0;
                var sec = 0;
                min = parseInt(temps / 60);
                sec = temps - (min * 60);
                temps = min + " min " + sec + " ";
            }
            $('#temps').text(temps);
        }
    }
    deplace();
    setInterval(collision, 10);//Temps d'attente avant de revérifier la collision
    setInterval(timer, 1000);
}