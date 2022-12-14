<?php

/**
 * Retourne une liste d'erreur s'il y en a si rien renvoie false
 */
function errorsInForm(array $arrDatas)
{
    $errors = [];

    //Verification du firstName 
    if (!preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,255}$/u", $arrDatas['firstName'])) {
        $errors['firstName'] = "First Name not valid";
    }
    //Vérification du lastName
    if (!preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,255}$/u", $arrDatas['firstName'])) {
        $errors['lastName'] = "Last Name not valid";
    }
    //Verification de l'email
    if (!filter_var($arrDatas['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['lastName'] = "Last Name not valid";
    }

    //Verification de la taille et format de fichier (modifier sur le serveur s'il faut)

    //Vérification de la description
    if (strlen($arrDatas['description']) < 10 || strlen($arrDatas['description']) > 1000) {
        $errors['description'] = "description not valid";
    }

    //vérification des erreurs
    if (count($errors) == 0) return false;
    else return $errors;
}

//Sanitize les éléments du form et les renvoie dans un nouveau tableau
function sanitizePOST()
{
    $formDatas = [];

    //sanitize du firestName && lastName && description
    $formDatas['firstName'] = isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '';
    $formDatas['lastName'] = isset($_POST['lastName']) ? htmlspecialchars($_POST['lastName']) : '';
    $formDatas['description'] = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';

    //sanitize du mail

    $formDatas['email'] = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    return $formDatas;
}


function processImages()
{
    for(i=0;i<count($_FILES))
    //parcours chaque images
    //Pour chaque images, vérifier le format
    //Pour chaque images, vérifier la taille

    //Si tout ok
    //generate Image Name base
    //changer le nom de l'image et son répertoire
    //Envoyer les noms en base de données

    //Si tout est ok, retourner true
    //sinon envoyer false 



    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

}
