/**
 * Created by explorer on 30/12/16.
 */

var sel; // variable de selection d'entité
var nom; // nom de l'entité affiché sur la page
var logins; // tableau des logins

// =======================================================================
// elements lancés au chargement de la page
$(document).ready(function () {
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
    } else if (window.location.href.indexOf("home_admin") > -1) {
        // if (nbNewUsers != null && nbNewUsers > 0) {
        var nbNewUsers = 3;
        showNotify('<strong>' + 'Vous avez ' + nbNewUsers +
            ((nbNewUsers > 1) ? ' demandes' : ' demande') + 'd\'ajout' +
            '</strong>', 'glyphicon glyphicon-info-sign', 'info');
        // }
    }

    //bouton de contact
    if ((window.location.href.indexOf("home_admin") > -1) || (window.location.href.indexOf("docs_admin") > -1) || (window.location.href.indexOf("projects_admin") > -1) || (window.location.href.indexOf("groups_admin") > -1)|| (window.location.href.indexOf("users_admin") > -1) || (window.location.href.indexOf("contact") > -1))
    {}
    else {
        showNotifyRight('<strong>' + 'Contactez-nous' +
            '</strong>', 'glyphicon glyphicon-comment', 'success');
    }

    updateNbEntity();
    activeDefault();
});

// =======================================================================
// fonction pour activer les elements jquery
function activeDefault() {
    $('[data-toggle="tooltip"]').tooltip(); // permet de jouer les tooltips
    $('[data-toggle="popover"]').popover(); // permet de jouer les popover
}

// =======================================================================
// fonction pour mettre à jour le nombre d'utilisateurs inactifs
// et le nombre d'entités total
function updateNbEntity() {
    var $table = $('#table_admin');

    // ne s'execute que si on est sur la page users_admin
    if (window.location.href.indexOf("users_admin") > -1) {
        var nbInactifs = 0;
        // nombre d'utilisateurs actifs
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
// fonction pour ajouter un utilisateurs en temps que propriétaire
function addUser(js_arg) {
    $('#gedi_basebundle_' + nom + '_idUtilisateurFk' + (nom.charAt(0).toUpperCase() + nom.slice(1))).val(js_arg);
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

//fonction d'affichage de pop-up sur la droite
function showNotifyRight(texte, icon, type) {
    if (texte.length > 1) {
        $.notify({
            //options
            icon: icon,
            message: texte,
            // à changer plus tard
            url: 'http://localhost/Gedi/Symfony/web/contact'
        }, {
            //settings
            type: type,
            allow_dismiss: false,
            placement: {
                from: "bottom",
                align: "right"
            },
            offset: {
                x: 0,
                y: 0
            },
            delay: 0,
            animate: {
                enter: 'animated slideInRight'
            },
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
    $('.assign-user').hide();
}

// =======================================================================
// fonction de vérification de formulaire
// permet de valider les champs coté client
function validFormUtilisateur() {
    var pass1 = document.getElementById("gedi_basebundle_utilisateur_password_first").value;
    var pass2 = document.getElementById("gedi_basebundle_utilisateur_password_second").value;
    var username = document.getElementById("gedi_basebundle_utilisateur_username").value;
    var nom = document.getElementById("gedi_basebundle_utilisateur_nom").value;
    var prenom = document.getElementById("gedi_basebundle_utilisateur_prenom").value;

    // test si le mot de passe concorde avec la confirmation
    if (pass1 != pass2 && (pass1 != "" && pass2 != "")) {
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-error)');
        $('.bouton-submit-admin-entity').prop('disabled', true);
    } else if (pass1 == pass2 && (pass1 != "" && pass2 != "")) {
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-success)');
        $('.bouton-submit-admin-entity').prop('disabled', false);
    } else {
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        $('.bouton-submit-admin-entity').prop('disabled', true);
    }

    // test si le login n'est pas déjà utilisé
    if (window.location.href.indexOf("users_admin") > -1) {
        if (logins != null && logins.includes(username)) {
            $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-error)');
            $('.bouton-submit-admin-entity').prop('disabled', true);
        } else {
            $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-default)');
            $('.bouton-submit-admin-entity').prop('disabled', false);
        }
    }

    // test si tous les champs sont remplis
    if (username == "" || pass1 == "" || pass2 == "" || nom == "" || prenom == "") {
        $('.bouton-submit-admin-entity').prop('disabled', true);
    }
}

// =======================================================================
// block jquery
$(function () {
    var $table = $('#table_admin');

    // fonction d'envoi de la requete en POST et rechargement de la page actualisée
    function ajaxSend(selection, typeAction) {
        // console.log(selection);
        $.ajax({
            type: 'POST',
            url: window.location,
            data: {'data': selection, 'typeaction': typeAction},
            success: function (data) {
                if (typeAction == "children") {
                    if (data.reponse.length > 0) {
                        for (var i = 0; i < data.reponse.length; i++) {
                            if (i % 2 == 0) {
                                $('#liste-membres').prepend('<li class="list-group-item"' +
                                    'style="background-color: #f9f9f9">' + data.reponse[i] + '</li>');
                            } else {
                                $('#liste-membres').prepend('<li class="list-group-item">' + data.reponse[i] + '</li>');
                            }
                        }
                    } else {
                        $('#liste-membres').prepend('<li class="list-group-item">... vide</li>');
                    }
                } else {
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
                        if (window.location.href.indexOf("users_admin") > -1) {
                            if (data.reponse.actif != "1") {
                                $('tr[data-uniqueid=' + data.reponse.id + ']').addClass('info text-info'); //BUG #2
                            } else {
                                $('tr[data-uniqueid=' + data.reponse.id + ']').removeClass('info text-info');
                            }
                            $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
                        }
                        $('form').trigger("reset");
                        $('.modal-backdrop').remove();
                        $('#popup-add').modal('toggle');
                    }
                    sel = null;
                    hideOuShow(0);
                    updateNbEntity();
                    activeDefault();

                    showNotify('<strong>' + (nom.charAt(0).toUpperCase() + nom.slice(1)) +
                        ((typeAction == "supprimé" && selection.length > 1) ? 's bien ' + typeAction + 's' :
                            ' bien ' + typeAction) + '</strong>', 'glyphicon glyphicon-ok', 'success');
                }
            },
            error: function () {
                showNotify('<strong>' + 'La requête n\'a pas abouti' + '</strong>',
                    'glyphicon glyphicon-remove', 'danger');
            }
        });
    }

    // listener sur les cases à cocher du tableau pour mettre à jour
    // les boutons et les spans
    $table.on({
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

    // listener pour voir les entités contenus par une entité parente
    $table.on('click', '.btn-view-entity', function () {
        var id = $(this).closest("tr").attr('data-uniqueid');
        $('#liste-membres').empty();
        ajaxSend(id, "children");
    });

    // listener sur les elements de classe bouton-desactive
    // mise à jour du popup de suppression
    $('.bouton-desactive').click(function () {
        var nom_temp = nom;
        if (typeof sel != 'undefined') {
            // ajoute un 's' si la selection contient plusieurs élements
            // dans le popup de suppression
            (sel.length > 1) ? nom_temp += 's' : nom_temp;

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

        if (window.location.href.indexOf("users_admin") > -1) {
            // une checkbox non cochée dans un formulaire n'est n'apparait pas dans
            // le tableau après un serializeArray. On doit donc dire à la main qu'elle
            // n'est pas cochée
            if (!$('#gedi_basebundle_utilisateur_actif').prop('checked')) {
                selection.splice(6, 0, {
                    name: "gedi_basebundle_utilisateur[actif]",
                    value: false
                });
            } else {
                selection.splice(6, 1, {
                    name: "gedi_basebundle_utilisateur[actif]",
                    value: true
                });
            }
        }

        if (selection[0].value == "") {
            ajaxSend(selection, "enregistré");
        } else {
            ajaxSend(selection, "modifié");
        }
    });

    // listener sur le formulaire d'ajout d'utilisateur
    $('#popup-add').on({
        'keyup': function () {
            if (window.location.href.indexOf("users_admin") > -1) {
                validFormUtilisateur();
            }
        }, 'focusout': function () {
            if (window.location.href.indexOf("users_admin") > -1) {
                validFormUtilisateur();
            }
        }
    });

    // listener sur les elements de classe bouton-dismiss-entity
    // vide le formulaire de son contenu
    $(".bouton-dismiss-entity").click(function () {
        $('form').trigger("reset");
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-default)');
        logins = null;
    });

    // listener sur le bouton créer une entité
    // vide le formulaire de son contenu
    $(".bouton-admin-popup-add").click(function () {
        $('form').trigger("reset");
        // modification du popup ajout / edition
        $('#popup-admin-add-titre').html('Créer un ' + nom);
        var $bsae = $('.bouton-submit-admin-entity');
        $bsae.val('Créer');
        $('.assign-user').show();

        // ne s'execute que si on est sur la page users_admin
        // récupère tous les login pour vérifier coté client si
        // on a pas un doublon de login
        if (window.location.href.indexOf("users_admin") > -1) {
            $bsae.prop('disabled', true);
            logins = $.map($('#table_admin').bootstrapTable('getData'), function (rows) {
                return rows.login;
            });
        }
    });
});
