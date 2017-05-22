/**
 * Created by Tomáš Kropáček on 21.05.2017.
 */

$(function () {

    $("#pridani").submit(function() {
        event.preventDefault();
        var serializedData = $(this).serialize();
        //console.log(serializedData);

        $.ajax({
            url: "tpl/php/pridani.ajax.php",
            type: "POST",
            data: serializedData,

            success: function(data) {
                console.log(data);
                $(".kropihoAlertik").text("Výrobek byl úspěšně přidán do databáze.").removeClass("alert-danger").addClass("alert-success").show();
            },

            error: function(xhr, status) {
                console.log(xhr);
                console.log(status);
                $(".kropihoAlertik").text("Výrobek nebyl přidán do databáze!").removeClass("alert-success").addClass("alert-danger").show();
            }

        });

    });

});