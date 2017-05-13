/**
 * Created by Tomáš Kropáček on 13.05.2017.
 */

/*https://api.jqueryui.com/slider/*/

var minCena = 0;
var maxCena = 541560; //tahat z dtb? dle meho zbytecne

$( function() {
    $( "#slider" ).slider({
        range: true,
        min: minCena,
        max: maxCena,
        values: [minCena, maxCena],

        create: function (event, ui) {
            //$("input[name$='cenaOd']").val(minCena);
            //$("input[name$='cenaDo']").val(maxCena);
            $("#cenaOd").val(minCena);
            $("#cenaDo").val(maxCena);
        },

        slide: function(event, ui) {
            //$("input[name$='cenaOd']").val(ui.values[0]);
            //$("input[name$='cenaDo']").val(ui.values[1]);
            $("#cenaOd").val(ui.values[0]);
            $("#cenaDo").val(ui.values[1]);
        }
    });


    // Pri zadani hodnot rucne do inputu se zmeni hodnoty na slideru
    // http://stackoverflow.com/questions/12795307/jquery-ui-slider-change-value-of-slider-when-changed-in-input-field

    $("#cenaOd").keyup(function () {
        $("#slider").slider('values', 0, $(this).val());
    });

    $("#cenaDo").keyup(function () {
        $("#slider").slider('values', 1, $(this).val());
    });

} );