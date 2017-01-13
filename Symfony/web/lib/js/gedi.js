/**
 * Created by explorer on 30/12/16.
 */

var sel; // variable de selection
var nom; // nom de l'entité affiché sur la page

// =======================================================================
// script permettant de jouer les tooltips
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// =======================================================================
// mise à jour du popup de suppression
function majPopupDelete() {
    // met la selection du tableau dans la variable sel
    sel = $('#table_admin').bootstrapTable('getSelections');

    if (typeof sel != 'undefined') {

        // change le texte du popup de suppression en fonction de la page
        if (window.location.href.indexOf("users_admin") > -1) {
            nom = 'utilisateur';
        } else if (window.location.href.indexOf("groups_admin") > -1) {
            nom = 'groupe';
        } else if (window.location.href.indexOf("projects_admin") > -1) {
            nom = 'projet';
        } else if (window.location.href.indexOf("docs_admin") > -1) {
            nom = 'document';
        }

        // ajoute un 's' si la selection contient plusieurs élements
        // dans le popup de suppression
        if (sel.length > 1) {
            nom = nom + 's';
        }

        // écrit le texte dans le popup indiquant le nombre d'entités dans le tableau
        $('#nbSel').html('Vous êtes sur le point de supprimer définitivement ' +
            sel.length + ' ' + nom);
    }
}

// =======================================================================
// listener sur le bouton supprimer du popup de suppression
// envoi la selection dans le formulaire de suppression
$(function () {
    document.getElementById('delete-entity').addEventListener("click", function () {
        // enregistre les id des utilisateurs à supprimer
        var selection = [];
        for (var i = 0; i < sel.length; i++) {
            selection[i] = sel[i][1];
        }

        // envoi de la requete de suppression en POST et rechargement
        // de la page actualisée
        $.ajax({
            type: 'POST',
            url: window.location,
            data: {data: selection},
            success: function (data) {
                showNotifyUser('<strong>' + (nom.charAt(0).toUpperCase() + nom.slice(1)) +
                    ((sel.length > 1) ? 's bien supprimés' : ' bien supprimé') + '</strong>',
                    'glyphicon glyphicon-ok', 'success');

                $('#content').load(window.location + '#content', function () {
                    sel = null;
                });
            },
            error: function () {
                showNotifyUser('<strong>' + 'La requête n\'a pas abouti' + '</strong>',
                    'glyphicon glyphicon-remove', 'danger');
            }
        });
    });
});

// =======================================================================
// script permettant de mettre à jour le nombre d'élements
// selectionnés dans le span
$(function () {
    $(document).ready(
        hideOuShow()
    );
});

// fonction pour afficher ou cacher le span des boutons de controle
function hideOuShow() {
    if ($('#table_admin').bootstrapTable('getSelections').length < 1) {
        $('.spanNbSel').hide();
        $('.boutonDesactive').prop('disabled', true);
    } else {
        $('.spanNbSel').show();
        $('.boutonDesactive').prop('disabled', false);
    }
}

// listener sur les cases à cocher du tableau pour mettre à jour
// les boutons et les spans
$(function () {
    $('#table_admin').on({
        'check.bs.table': function () {
            $('.spanNbSel').html($('#table_admin').bootstrapTable('getSelections').length);
            hideOuShow();
        }, 'uncheck.bs.table': function () {
            $('.spanNbSel').html($('#table_admin').bootstrapTable('getSelections').length);
            hideOuShow();
        }, 'check-all.bs.table': function () {
            $('.spanNbSel').html($('#table_admin').bootstrapTable('getSelections').length);
            hideOuShow();
        }, 'uncheck-all.bs.table': function () {
            $('.spanNbSel').html($('#table_admin').bootstrapTable('getSelections').length);
            hideOuShow();
        }, 'refresh.bs.table': function () {
            // $('#table_admin').bootstrapTable('refresh', {url: window.location});
        }
    });
});

// fonction d'affichage de popups
function showNotifyUser(texte, icon, type) {
    if (texte.length > 1) {
        $.notify({
            icon: icon,
            message: texte
        }, {
            type: type,
            animate: {
                enter: 'animated bounceInDown',
                exit: 'animated bounceOutUp'
            }
        });
    }
}