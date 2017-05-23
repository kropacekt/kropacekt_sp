/**
 * Created by Tomáš Kropáček on 23.05.2017.
 */

function tableEdit() {
    var jednotky = '{"1": "BA", "2": "BM", "3": "KG", "4": "KS", "5": "L", "6": "M", "7": "M2", "8": "M3", "9": "PÁR", "10": "Q", "11": "SAD"}';

    //http://markcell.github.io/jquery-tabledit/#home
    $("#vysledekFiltrace").Tabledit ({
        url: "tpl/php/editaceMazani.ajax.php",
        restoreButton: true,

        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'nazev'], [2, 'jednotky', jednotky], [3, 'cena']]
        },

        buttons: {

            edit: {
                class: 'btn btn-sm btn-default',
                html: '<span class="glyphicon glyphicon-pencil"></span>',
                action: 'edit'
            },

            delete: {
                class: 'btn btn-sm btn-default',
                html: '<span class="glyphicon glyphicon-trash"></span>',
                action: 'delete'
            },

            restore: {
                class: 'btn btn-sm btn-warning',
                html: 'Vrátit zpět',
                action: 'restore'
            },

            save: {
                class: 'btn btn-sm btn-success',
                html: 'Uložit'
            },

            confirm: {
                class: 'btn btn-sm btn-danger',
                html: 'Smazat'
            }

        },

        onSuccess: function(data, textStatus, jqXHR) {
            // Occurs whenever it is made a successful ajax request (edit or remove action).
            //console.log(data);
            //console.log(textStatus);
            //console.log(jqXHR);
        },

        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }

    });

}