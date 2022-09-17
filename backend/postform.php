<?php
require 'utils.php';

//Sanitize de tous les posts
$formDatas = sanitizePOST();

$errors = errorsInForm($formDatas);

var_dump($_POST);

//S'il n'y a pas d'erreur de formulaire
if (!$errors) {
    echo "Le formulaire est valide";
    //Récupération des images dans tmp
    processImages();


    //Envoie des datas en BDD

    //Envoie du mail
} else {
    echo "le formulaire est invalide...";
    var_dump($errors);
}
