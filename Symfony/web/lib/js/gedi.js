/**
 * Created by explorer on 30/12/16.
 */

// =======================================================================
// script permettant de jouer les tooltips
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// =======================================================================
// mise à jour du popup de suppression
function majPopupDelete() {
    var nom;
    // change le nom en fonction de la page ou l'on est
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
    if ($('#table_admin').bootstrapTable('getSelections').length > 1) {
        nom = nom + 's';
    }

    // écrit le texte dans le popup
    $('#nbSel').html('Vous êtes sur le point de supprimer définitivement ' +
        $('#table_admin').bootstrapTable('getSelections').length + ' ' + nom);
}

// =======================================================================
// script permettant de mettre à jour le nombre d'élements
// selectionnés dans le span
$(function () {
    $(document).ready(
        hideOuShow(),
        showNotifyUser("")
    );
});

function hideOuShow() {
    if ($('#table_admin').bootstrapTable('getSelections').length < 1) {
        $('.spanNbSel').hide();
        $('.boutonDesactive').prop('disabled', true);
    } else {
        $('.spanNbSel').show();
        $('.boutonDesactive').prop('disabled', false);
    }
}

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
        }
    });
});

function showNotifyUser($texte) {
    if ($texte.length > 1) {
        $.notify($texte, {
            animate: {
                enter: 'animated bounceInDown',
                exit: 'animated bounceOutUp'
            }
        });
    }
}