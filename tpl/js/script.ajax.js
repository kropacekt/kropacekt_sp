/**
 * Created by Tomáš Kropáček on 29.04.2017.
 */

$(function () {
    var inputNick = $("input[name$='nick']");

    $(inputNick).blur(function () {
        console.log("ready");
        if (inputNick.val()) {
            console.log(inputNick.val());

            $.ajax({
                url: "tpl/php/script.ajax.php?nick=" + inputNick.val(),
                dataType: "JSON",

                success: function(data) {
                    console.log("success");
                    if(data) {
                        $("#user-exists").html("<p>Chystáte se přihlásit jako:</p> <p>" + data.jmeno + "</p>").removeClass("alert-danger").addClass("alert-info").show();
                        $("#profile-img").attr('src', 'tpl/img/profile/' + data.id + '.jpg'); //po dropzoně pořešit koncovku souboru! <----------------------------------------
                    }

                },

                error: function(data) {
                    if(data) {
                        $("#profile-img").attr('src', '//ssl.gstatic.com/accounts/ui/avatar_2x.png');
                        $("#user-exists").text("Uživatel s daným nickem neexistuje!").removeClass("alert-info").addClass("alert-danger").show();
                    }

                }
            });
        }


    });

});

