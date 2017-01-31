/**
 * Created by explorer on 30/12/16.
 */

var sel; // variable de selection d'entité
var nom; // nom de l'entité affiché sur la page

// =======================================================================
// elements lancés au chargement de la page
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip(); // script permettant de jouer les tooltips
    $('.bouton-desactive').prop('disabled', true); // désactive par défaut les boutons de type bouton-desactive

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
    updateNbEntity();
});

// =======================================================================
// fonction pour mettre à jour le nombre d'utilisateurs inactifs
// et le nombre d'entités total
function updateNbEntity() {

    if (window.location.href.indexOf("users_admin") > -1) {
        var nbInactifs = 0;
        // nombre d'utilisateurs actifs
        var $table = $('#table_admin');
        var inactifs = $.map($table.bootstrapTable('getData'), function (rows) {
            return rows.actif;
        });
        for (var i = 0; i < inactifs.length; i++) {
            if (inactifs[i] != "1") {
                nbInactifs++;
            }
        }

        if (nbInactifs > 0) {
            $('#toggle-new-users').bootstrapToggle('enable');
        } else {
            $('#toggle-new-users').bootstrapToggle('disable');
        }
        $('#span-nb-inactifs').html(nbInactifs);
    }

    // nombre d'entités
    $('#span-nb-entity').html($table.bootstrapTable('getData').length);
}

// =======================================================================
// fonction pour afficher ou cacher le span des boutons de controle
function hideOuShow(nbSel) {
    if (nbSel < 1) {
        $('.spanNbSel').hide();
        $('.bouton-desactive').prop('disabled', true);
    } else {
        $('.spanNbSel').show();
        $('.bouton-desactive').prop('disabled', false);
    }
}

// =======================================================================
// fonction d'affichage de popups
function showNotify(texte, icon, type) {
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

// =======================================================================
// fonction d'édition d'entité
function edit(js_object_arg) {

    // récupération de l'entité au format json et transformation
    // en tableau javascript
    var js_object = JSON.parse(js_object_arg);

    // remplissages de champs des formulaires
    for (var key in js_object) {
        if (key == 'actif' && js_object[key] == '1') {
            $('#gedi_basebundle_' + nom + '_' + key).bootstrapToggle('on');
        } else if (key == 'password') {
            $('#gedi_basebundle_' + nom + '_' + key + '_first').val(js_object[key]);
            $('#gedi_basebundle_' + nom + '_' + key + '_second').val(js_object[key]);
        } else {
            $('#gedi_basebundle_' + nom + '_' + key).val(js_object[key]);
        }
    }

    // modification du popup ajout / edition
    $('#popup-admin-add-titre').html('Modifier un ' + nom);
    var $bsae = $('.bouton-submit-admin-entity');
    $bsae.val('Appliquer');
    $bsae.prop('disabled', false);
}

// =======================================================================
// block jquery
$(function () {

    // fonction d'envoi de la requete en POST et rechargement de la page actualisée
    function ajaxSend(selection, typeAction) {
        $.ajax({
            type: 'POST',
            url: window.location,
            data: {'data': selection, 'typeaction': typeAction},
            success: function (data) {
                var $table = $('#table_admin');
                if (typeAction == "supprimé" && data['reponse'] == "OK") {
                    var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
                        return row.id;
                    });
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: ids
                    });
                } else {
                    if (typeAction == "enregistré") {
                        $table.bootstrapTable('append', data.reponse);
                    } else if (typeAction == "modifié") {
                        $table.bootstrapTable('updateByUniqueId', {id: data.reponse.id, row: data.reponse});
                    }
                    $table.bootstrapTable('filterBy', {});
                    $table.bootstrapTable('scrollTo', 'bottom');
                    if (data.reponse.actif != "1") {
                        $('tr[data-uniqueid=' + data.reponse.id + ']').addClass('info text-info'); //BUG #2
                    } else {
                        $('tr[data-uniqueid=' + data.reponse.id + ']').removeClass('info text-info');
                    }
                    $('form').trigger("reset");
                    $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
                    $('.modal-backdrop').remove();
                    $('#popup-add').modal('toggle');
                }
                sel = null;
                hideOuShow(0);
                updateNbEntity();

                showNotify('<strong>' + (nom.charAt(0).toUpperCase() + nom.slice(1)) +
                    ((typeAction == "supprimé" && selection.length > 1) ? 's bien ' + typeAction + 's' :
                        ' bien ' + typeAction) + '</strong>', 'glyphicon glyphicon-ok', 'success');
            },
            error: function () {
                showNotify('<strong>' + 'La requête n\'a pas abouti' + '</strong>',
                    'glyphicon glyphicon-remove', 'danger');
            }
        });
    }

    // listener sur les cases à cocher du tableau pour mettre à jour
    // les boutons et les spans
    $('#table_admin').on({
        'check.bs.table': function () {
            sel = $('#table_admin').bootstrapTable('getSelections');
            $('.spanNbSel').html(sel.length);
            hideOuShow(sel.length);
        }, 'uncheck.bs.table': function () {
            sel = $('#table_admin').bootstrapTable('getSelections');
            $('.spanNbSel').html(sel.length);
            hideOuShow(sel.length);
        }, 'check-all.bs.table': function () {
            sel = $('#table_admin').bootstrapTable('getSelections');
            $('.spanNbSel').html(sel.length);
            hideOuShow(sel.length);
        }, 'uncheck-all.bs.table': function () {
            sel = $('#table_admin').bootstrapTable('getSelections');
            $('.spanNbSel').html(sel.length);
            hideOuShow(sel.length);
        }
    });

    // listener sur les elements de classe bouton-desactive
    // mise à jour du popup de suppression
    $('.bouton-desactive').click(function () {
        var nom_temp = null;
        if (typeof sel != 'undefined') {
            // ajoute un 's' si la selection contient plusieurs élements
            // dans le popup de suppression
            (sel.length > 1) ? nom_temp = nom + 's' : nom_temp = nom;

            // écrit le texte dans le popup indiquant le nombre d'entités dans le tableau
            $('#nbSel').html('Vous êtes sur le point de supprimer définitivement ' +
                sel.length + ' ' + nom_temp);
        }
    });

    // listener sur le toggle de filtre des demandes d'ajout
    $('#toggle-new-users').change(function () {
        if (!$('#toggle-new-users').prop('checked')) {
            $('#table_admin').bootstrapTable('filterBy', {actif: ""});
        } else {
            $('#table_admin').bootstrapTable('filterBy', {});
        }
    });

    // listener sur le bouton supprimer du popup de suppression
    // envoi la selection à supprimer au controller
    $('#delete-entity').click(function () {
        ajaxSend(sel, "supprimé");
    });

    // listener sur le bouton créer ou modifier du popup de d'ajout et de modification
    // envoi l'entité à traiter au controller
    $('.form-admin').submit(function (event) {
        // Eviter le comportement par défaut (soumettre le formulaire)
        event.preventDefault();

        // récupération des données du formulaire
        var selection = $('form').serializeArray();

        // une checkbox non cochée dans un formulaire n'est n'apparait pas dans
        // le tableau après un serializeArray. On doit donc dire à la main qu'elle
        // n'est pas cochée
        if (!$('#gedi_basebundle_utilisateur_actif').prop('checked')) {
            selection.splice(5, 0, {
                name: "gedi_basebundle_utilisateur[actif]",
                value: false
            });
        } else {
            selection.splice(5, 1, {
                name: "gedi_basebundle_utilisateur[actif]",
                value: true
            });
        }
        if (selection[6].value == "") {
            ajaxSend(selection, "enregistré");
        } else {
            ajaxSend(selection, "modifié");
        }
    });

    // listener sur le formulaire d'ajout d'utilisateur
    // permet de valider les champs coté client
    // tous les champs doivent être rempli et le mot de passe
    // et la confirmatin de mot de passe doivent concorder
    $('#popup-add').keyup(function () {
        var pass1 = document.getElementById("gedi_basebundle_utilisateur_password_first").value;
        var pass2 = document.getElementById("gedi_basebundle_utilisateur_password_second").value;
        var username = document.getElementById("gedi_basebundle_utilisateur_username").value;
        var nom = document.getElementById("gedi_basebundle_utilisateur_nom").value;
        var prenom = document.getElementById("gedi_basebundle_utilisateur_prenom").value;

        if (pass1 != pass2 && (pass1 != "" && pass2 != "")) {
            $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-error)');
        } else if (pass1 == pass2 && (pass1 != "" && pass2 != "")) {
            $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-success)');
        } else {
            $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        }

        if (username == "" || pass1 == "" || pass2 == "" || nom == "" || prenom == "") {
            $('.bouton-submit-admin-entity').prop('disabled', true);
        } else {
            if (pass1 != pass2) {
                $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-error)');
                $('.bouton-submit-admin-entity').prop('disabled', true);
            } else {
                $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-success)');
                $('.bouton-submit-admin-entity').prop('disabled', false);
            }
        }
    });

    // listener sur les elements de classe bouton-dismiss-entity
    // vide le formulaire de son contenu
    $(".bouton-dismiss-entity").click(function () {
        $('form').trigger("reset");
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
    });

    // listener sur le bouton créer une entité
    // vide le formulaire de son contenu
    $(".bouton-admin-popup-add").click(function () {
        // modification du popup ajout / edition
        $('#popup-admin-add-titre').html('Créer un ' + nom);
        var $bsae = $('.bouton-submit-admin-entity');
        $bsae.val('Créer');
        $bsae.prop('disabled', true);
    });
});
