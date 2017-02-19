/**
 * Variable de selection d'entité
 * @global {object} sel
 * @var {object} sel
 */
var sel;

/**
 * Nom de l'entité affiché sur la page
 * @global {string} nom
 * @var {string} nom
 */
var nom;

/**
 * Tableau des logins
 * @global {array} logins
 * @var {array} logins
 */
var logins;

/**
 * Enumération des types d'actions possibles sur le serveur
 * @global {array} types
 * @const {array} types
 * @type {{ENREGISTREMENT: string, MODIFICATION: string, SUPPRESSION: string, UTILISATEUR: string, DOCUMENT: string, PROJET: string, GROUPE: string}}
 */
const types = {
    ENREGISTREMENT: "enregistré", // demande d'enregistrement
    MODIFICATION: "modifié", // demande de modification
    SUPPRESSION: "supprimé", // demande de suppression
    UTILISATEUR: "utilisateur", // demande d'optention des utilisateurs d'une entité
    DOCUMENT: "document", // demande d'optention des documents d'une entité
    PROJET: "projet", // demande d'optention des projets d'une entité
    GROUPE: "groupe", // demande d'optention des groupes d'une entité
};

// ======================================================================================================
// FONCTIONS CLIENT
// ======================================================================================================

/**
 * Fonction permettant d'activer le back to top
 */
function backToTop() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    var $btp = $('#back-to-top');
    $btp.click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $btp.tooltip('show');
}

/**
 * Fonction pour activer les elements jquery
 */
function activeDefault() {
    $('[data-toggle="tooltip"]').tooltip(); // permet de jouer les tooltips
    $('[data-toggle="popover"]').popover(); // permet de jouer les popover
}

/**
 * Fonction pour mettre à jour le nombre d'utilisateurs inactifs
 * et le nombre d'entités total
 */
function updateNbEntity() {
    var $table = $('#table_admin'); // récupération du tableau admin

    // ne s'execute que si on est sur la page users_admin
    if (window.location.href.indexOf("users_admin") > -1) {
        var nbInactifs = 0;
        // récupère les utilisateurs actifs
        var inactifs = $.map($table.bootstrapTable('getData'), function (rows) {
            return rows.actif;
        });
        for (var i = 0; i < inactifs.length; i++) {
            if (inactifs[i] != "1") {
                nbInactifs++; // filtre dans nbInactifs le nombre d'utilisateurs inactifs
            }
        }

        if (nbInactifs > 0) { // active ou désactive le toggle toggle-new-users si il y a des utilisateurs inactifs
            $('#toggle-new-users').bootstrapToggle('enable');
        } else {
            $('#toggle-new-users').bootstrapToggle('disable');
        }
        $('#span-nb-inactifs').html(nbInactifs); // inscrit le nombre d'utilisateurs inactifs dans le span
    }

    // inscrit le nombre d'entités total dans le span
    $('#span-nb-entity').html($table.bootstrapTable('getData').length);
}

/**
 * Fonction pour ajouter un utilisateurs en temps que propriétaire.
 * Ajoute l'id de l'entité enfant au formulaire de création
 * @param js_arg, , id de l'entité enfant
 */
function addUser(js_arg) {
    $('#gedi_basebundle_' + nom + '_idUtilisateurFk' + (nom.charAt(0).toUpperCase() + nom.slice(1))).val(js_arg);
}

/**
 * Fonction pour ajouter un projet en temps que parent.
 * Ajoute l'id de l'entité enfant au formulaire de création
 * @param js_arg, id de l'entité enfant
 */
function addProject(js_arg) {
    $('#gedi_basebundle_projet_parent').val(js_arg);
    $('#gedi_basebundle_document_idProjetFkDocument').val(js_arg);
    $('.list-activable-item').removeClass('active');
    $('#list-activable-item-project-' + js_arg).addClass('active');
}

/**
 * Fonction pour afficher ou cacher le span du nombre d'entités sélectionnés
 * des boutons de controle.
 * @param nbSel, nombre d'éléments selectionnés
 */
function hideOuShow(nbSel) {
    if (nbSel < 1) {
        $('.spanNbSel').hide();
        $('.bouton-desactive').prop('disabled', true);
    } else {
        $('.spanNbSel').show();
        $('.bouton-desactive').prop('disabled', false);
    }
}

/**
 * Fonction d'affichage de popups de notification.
 * @param texte, texte à afficher
 * @param icon, icone bootstrap à afficher
 * @param type, type de notification à afficher [success, info, primary, warning, danger]
 */
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

/**
 * Fonction d'édition d'entité. La fonction renseigne les champs du formulaire.
 * @param js_object_arg, infos de l'entité à mettre dans le formulaire
 */
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
    $('#gedi_basebundle_document_nom').prop('disabled', false);
    $('#gedi_basebundle_document_typeDoc').prop('disabled', false);
    $('.assign-user').hide(); // masque le panel d'assignation d'utilisateur
    $('#bouton-upload').hide(); // masque le bouton upload
}

/**
 * Fonction de vérification de formulaire, permet de valider les champs coté client.
 * Cette fonction s'execute uniquement sur la page users_admin
 */
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
        $('#popup-add').animateCss('shake');
    } else if (pass1 == pass2 && (pass1 != "" && pass2 != "")) {
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-success)');
        $('.bouton-submit-admin-entity').prop('disabled', false);
    } else {
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        $('.bouton-submit-admin-entity').prop('disabled', true);
    }

    // test si le login n'est pas déjà utilisé
    if (logins != null && logins.includes(username)) {
        $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-error)');
        $('.bouton-submit-admin-entity').prop('disabled', true);
        $('#popup-add').animateCss('shake');
    } else {
        $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-default)');
        $('.bouton-submit-admin-entity').prop('disabled', false);
    }

    // test si tous les champs sont remplis
    if (username == "" || pass1 == "" || pass2 == "" || nom == "" || prenom == "") {
        $('.bouton-submit-admin-entity').prop('disabled', true);
    }
}

/**
 * =======================================================================
 * block jquery
 */
$(function () {
    var $table = $('#table_admin');

    /**
     * Elements lancés au chargement de la page
     */
    $(document).ready(function () {
        $('.bouton-desactive').prop('disabled', true); // désactive par défaut les boutons de la classe bouton-desactive
        document.getElementById("content").style.visibility = "visible";

        // change la variable nom en fonction de la page courante
        if (window.location.href.lastIndexOf("/") == window.location.href.length - 1) {
            document.getElementById("jumbo1").style.visibility = "visible";
            $('#jumbo1').animateCss('bounceInUp');
            setTimeout(function () {
                document.getElementById("bt1").style.visibility = "visible";
                $('#bt1').animateCss('bounceInUp');
                setTimeout(function () {
                    document.getElementById("bt2").style.visibility = "visible";
                    $('#bt2').animateCss('bounceInUp');
                    setTimeout(function () {
                        document.getElementById("bt3").style.visibility = "visible";
                        $('#bt3').animateCss('bounceInUp');
                    }, 400);
                }, 400);
            }, 400);
        } else if (window.location.href.indexOf("users_admin") > -1) {
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
        updateNbEntity(); // met à jour le nombre d'entités
        activeDefault(); // active les éléments par défaut
        backToTop();
    });

    // ======================================================================================================
    // LISTENERS
    // ======================================================================================================

    /**
     * Listener sur les cases à cocher du tableau pour mettre à jour
     * la sélection.
     */
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

    /**
     * Listener sur les éléments de la classe btn-view-entity
     * Permet de voir les entités contenus par une entité parente
     */
    $table.on('click', '.btn-view-entity', function () {
        var id = $(this).closest("tr").attr('data-uniqueid'); // récupère l'id de l'entité
        $('#liste-children').empty(); // vide la liste avant affichage

        if (window.location.href.indexOf("groups_admin") > -1) {
            ajaxSend(id, types.UTILISATEUR);
        } else if (window.location.href.indexOf("projects_admin") > -1) {
            ajaxSend(id, types.DOCUMENT);
        }
    });

    /**
     * Listener sur le bouton logout, je l'animation
     */
    $('#btn-logout').click(function () {
        $('#content').animateCss('zoomOut');
        $('#submit-search').animateCss('fadeOut');
        $('#search-bar').animateCss('fadeOut');
    });

    /**
     * Fonction permettant de jouer les animations
     * @param animationName, nom de l'animation à jouer
     */
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function () {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });

    /**
     * Listener sur les elements de classe bouton-desactive
     * Met à jour du popup de suppression
     */
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

    /**
     * Listener sur les elements de la classe list-activable-item.
     * Active l'element en couleur.
     */
    $('.list-activable-item').click(function (event) {
        $('.list-activable-item').removeClass('active');
        $('#' + event.currentTarget.id).addClass('active');
    });

    /**
     * Listener sur les elements de la classe list-group-item.
     * Affiche les projets d'un utilisateur
     */
    $('.list-users-item').click(function (event) {
        var tmp = event.currentTarget.id; // récupère l'id de la ligne de l'utilisateur
        ajaxSend(tmp.substring(20, tmp.length), types.PROJET);
    });

    /**
     * Listener sur le toggle de filtre des demandes d'ajout.
     * Filtre le tableau d'utilisateurs actifs | inactifs
     */
    $('#toggle-new-users').change(function () {
        if (!$('#toggle-new-users').prop('checked')) {
            $('#table_admin').bootstrapTable('filterBy', {actif: ""});
        } else {
            $('#table_admin').bootstrapTable('filterBy', {});
        }
    });

    /**
     * Listener sur le bouton d'upload de fichier.
     * Renseigne les champs nom de document et type.
     */
    $('#gedi_basebundle_document_fichier').change(function () {
        var uf = document.getElementById("gedi_basebundle_document_fichier").value;
        $('#gedi_basebundle_document_nom').val(uf.substring(uf.lastIndexOf('\\') + 1, uf.lastIndexOf('.')));
        $('#gedi_basebundle_document_typeDoc').val(uf.substring(uf.lastIndexOf('.'), uf.length));
    });

    /**
     * Listener sur le bouton supprimer du popup de suppression
     * envoi la selection à supprimer au controller via ajaxSend
     */
    $('#delete-entity').click(function () {
        ajaxSend(sel, types.SUPPRESSION);
    });

    /**
     * Listener sur les elements de la classe form-admin
     * Stope l'envoi normal du formulaire puis récupère le contenu du formulaire
     * et l'envoi au serveur avec la fonction ajaxSend
     */
    $('.form-admin').submit(function (event) {
        // Eviter le comportement par défaut (soumettre le formulaire)
        event.preventDefault();
        $('#gedi_basebundle_document_nom').prop('disabled', false);
        $('#gedi_basebundle_document_typeDoc').prop('disabled', false);

        // récupération des données du formulaire
        var selection = $('form').serializeArray();

        // ne s'execute que sur la page users_admin
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
            ajaxSend(selection, types.ENREGISTREMENT);
        } else {
            ajaxSend(selection, types.MODIFICATION);
        }
    });

    /**
     * Listener sur le formulaire d'ajout d'utilisateur.
     * Apelle la fonction validFormUtilisateur.
     * Ne s'execute que sur la page users_admin
     */
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

    /**
     * Listener sur les elements de classe bouton-dismiss-entity
     * Vide le formulaire de son contenu.
     */
    $(".bouton-dismiss-entity").click(function () {
        $('form').trigger("reset"); // reset le formulaire
        $('#gedi_basebundle_utilisateur_actif').bootstrapToggle('off'); // met le toggle sur off
        // remet le champ confirmation de mot de passe et login à la couleur par défaut
        $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        $('#gedi_basebundle_utilisateur_username').css('background-color', 'var(--color-default)');
        logins = null; // vide la variable globale logins
    });

    /**
     * Listener sur le bouton créer une entité.
     * Le listener fire dès que l'on clique sur un élément
     * de la classe bouton-admin-popup-add
     * La fonction vide le formulaire de son contenu et met à jour le modal
     */
    $(".bouton-admin-popup-add").click(function () {
        $('form').trigger("reset"); // reset le formulaire
        $('#gedi_basebundle_utilisateur_actif').bootstrapToggle('off'); // met le toggle sur off
        $('#liste-projets').empty(); // vide la liste des projets sur projects_admin
        $('#popup-admin-add-titre').html('Créer un ' + nom); // écrit le titre du modal
        var $bsae = $('.bouton-submit-admin-entity'); // récupère l'element de la classe bouton-submit-admin-entity
        $bsae.val('Créer'); // change la valeur de $bsae
        $('.assign-user').show(); // affiche le panel d'assignation d'utilisateur
        $('#bouton-upload').show(); // affiche le bouton upload
        $('#gedi_basebundle_document_nom').prop('disabled', true);
        $('#gedi_basebundle_document_typeDoc').prop('disabled', true);

        // ne s'execute que sur la page users_admin
        // récupère tous les login pour vérifier coté client si
        // on a pas un doublon de login
        if (window.location.href.indexOf("users_admin") > -1) {
            $bsae.prop('disabled', true); // desactive le bouton submit du formulaire
            logins = $.map($('#table_admin').bootstrapTable('getData'), function (rows) {
                return rows.login; // met la liste des logins du tableau dans la variable globale logins
            });
        }
    });

    // ======================================================================================================
    // ENVOI AJAX CLIENT -> SERVEUR
    // ======================================================================================================

    /**
     * Fonction d'envoi en Ajax de la requete en POST.
     * La fonction envoi des données au serveur dans la variable selection
     * et le type d'action à faire dans la variable typeAction.
     * La reponse du serveur arrive dans la variable data.
     * @param selection, données à envoyer au serveur
     * @param typeAction, type d'action à faire coté serveur [enregistré, modifié, supprimé, children]
     */
    function ajaxSend(selection, typeAction) {
        $.ajax({
            type: 'POST', // type d'envoi
            url: window.location, // url d'envoi, ici ce sera toujours la page courante
            data: {'data': selection, 'typeaction': typeAction}, // données à envoyer au serveur
            success: function (data) { // traitement en cas de succes
                switch (typeAction) {
                    case types.ENREGISTREMENT:
                        $table.bootstrapTable('append', data.reponse);
                        completeRow(data); // finalise la création ou la modification
                        break;
                    case types.MODIFICATION:
                        $table.bootstrapTable('updateByUniqueId', {id: data.reponse.id, row: data.reponse});
                        completeRow(data); // finalise la création ou la modification
                        break;
                    case types.SUPPRESSION:
                        deleteRow();
                        break;
                    case types.UTILISATEUR:
                        if (window.location.href.indexOf("groups_admin") > -1) {
                            $('#liste-children').prepend(data.reponse);
                        }
                        return 0;
                        break;
                    case types.DOCUMENT:
                        if (window.location.href.indexOf("projects_admin") > -1) {
                            $('#liste-children').prepend(data.reponse);
                        }
                        return 0;
                        break;
                    case types.PROJET:
                        if (window.location.href.indexOf("projects_admin") > -1
                            || window.location.href.indexOf("docs_admin") > -1) {
                            var $lp = $('#liste-projets');
                            $lp.empty();
                            $lp.prepend(data.reponse);
                        }
                        return 0;
                        break;
                    default:
                }

                sel = null; // remet la sélection à null
                hideOuShow(0);
                updateNbEntity();
                activeDefault();

                // affiche la notification de succes
                showNotify('<strong>' + (nom.charAt(0).toUpperCase() + nom.slice(1)) +
                    ((typeAction == types.SUPPRESSION && selection.length > 1) ? 's bien ' + typeAction + 's' :
                        ' bien ' + typeAction) + '</strong>', 'glyphicon glyphicon-ok', 'success');
            },
            error: function () { // traitement en cas d'echec
                // affiche la notification d'echec
                showNotify('<strong>' + 'La requête n\'a pas abouti' + '</strong>',
                    'glyphicon glyphicon-remove', 'danger');
            }
        });
    }

    // ======================================================================================================
    // FONCTIONS REPONSE SERVEUR -> CLIENT
    // ======================================================================================================

    /**
     * Fonction de suppression, la fonction supprime
     * les lignes du tableau qui ont été cochées pour la suppression
     */
    function deleteRow() {
        // récupère tous les id des lignes qui sont cochées
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        // supprime tous les id récupérés
        $table.bootstrapTable('remove', {
            field: 'id',
            values: ids
        });
    }

    /**
     * Fonction pour completer la création ou la modification d'entité.
     * Elle doit etre executée après un création ou une modification de
     * ligne dans le tableau.
     * @param data, objet reponse du serveur contenant un tableau reponse
     */
    function completeRow(data) {
        $table.bootstrapTable('filterBy', {}); // reset les filtres du tableau
        $table.bootstrapTable('scrollTo', 'bottom'); // scroll en bas du tableau
        // le code suivant ne s'execute que sur la page users_admin car les elements
        // suivants sont sur cette page uniquement
        if (window.location.href.indexOf("users_admin") > -1) {
            if (data.reponse.actif != "1") { // test des lignes du tableau reponse, on test si l'utilisateur est actif
                // met la ligne en bleu si l'utilisateur est inactif
                $('tr[data-uniqueid=' + data.reponse.id + ']').addClass('info text-info'); //BUG #2
            } else {
                // laisse la ligne normal si l'utilisateur est actif
                $('tr[data-uniqueid=' + data.reponse.id + ']').removeClass('info text-info');
            }
            // remet le champ confirmation de mot de passe à la couleur par défaut
            $('#gedi_basebundle_utilisateur_password_second').css('background-color', 'var(--color-default)');
        }
        $('form').trigger("reset"); // reset le formulaire de création
        $('.modal-backdrop').remove(); // enlève le modal-backdrop du formulaire
        $('#popup-add').modal('toggle'); // fait disparaitre le modal de création
    }
});
