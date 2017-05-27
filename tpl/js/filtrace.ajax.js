/**
 * Created by Tomáš Kropáček on 17.05.2017.
 */
$(function () {

    //http://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php

    $("#filtrace").submit(function(event) {

        event.preventDefault(); //zablokuje poslani formu
        var serializedData = $(this).serialize();
        //console.log(serializedData);

        $.ajax({
            url: "tpl/php/filtrace.ajax.php",
            type: "POST",
            dataType: "JSON",
            data: serializedData,

            //http://stackoverflow.com/questions/1964839/how-can-i-create-a-please-wait-loading-animation-using-jquery
            beforeSend: function() { $('.modal').show(); },

            complete: function() {
                $('.modal').hide();
                tableEdit(); //fce ze souboru edit.tableEdit.js

                //defaultne se pres tabledit nastavuje vsem inputum type="text", timto kodem osetruji, aby cena byla zadana jako cislo
                $('.tabledit-input').each(function() {
                    $(this).prop("required", true); //nepomuze, neni to form

                    if($(this).attr('name') === "cena") {
                         $(this).attr('type', 'number');
                    }
                });
            },

            success: function(data) {
                $("#vysledekFiltrace > tbody").html("");

                $.each(data, function(index, vyrobek) {
                    //bylo by lepsi toto resit v backendu, browser jinak pri velkem poctu zaznamu zamrzne
                    $('#vysledekFiltrace tbody').append("<tr><td>" + vyrobek.id + "</td><td>" + vyrobek.nazev + "</td><td>" + vyrobek.jednotky + "</td><td>" + vyrobek.cena + "</td></tr>");
                });

                $('#vypisFiltrace').show();
            },

            error: function(xhr, status) {
                console.log(xhr);
                console.log(status);
            }

        });

    });

});