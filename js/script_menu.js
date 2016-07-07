/**
 * Created by Yannick on 07/07/2016.
 */

$(document).ready(function() {
    var continued = true;
    $("#voiture_simple_").hide();
    $("#master_").show();

    $('#master').click(function(e){
        $("#voiture_simple_").hide();
        $("#master_").show();
    });

    $('#voiture_simple').click(function(e){
        $("#master_").hide();
        $("#voiture_simple_").show();
        voiture();
    });
});