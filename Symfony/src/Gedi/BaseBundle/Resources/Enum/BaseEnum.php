<?php

namespace Gedi\BaseBundle\Resources\Enum;

abstract class BaseEnum
{
    const ENREGISTREMENT = "enregistré"; // demande d'enregistrement
    const UPLOAD = "uploadé"; // demande d'enregistrement de fichiers
    const DOWNLOAD = "téléchargé"; // demande de téléchargement de fichier
    const MODIFICATION = "modifié"; // demande de modification
    const SUPPRESSION = "supprimé"; // demande de suppression
    const UTILISATEUR = "utilisateur"; // demande d'optention des utilisateurs d'une entité
    const DOCUMENT = "document"; // demande d'optention des documents d'une entité
    const PROJET = "projet"; // demande d'optention des projets d'une entité
    const GROUPE = "groupe"; // demande d'optention des groupes d'une entité
}
