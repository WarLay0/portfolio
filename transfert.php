<?php

if (empty($_POST['prenom'])) {
    $erreur['prenom'] = 'Veuillez entrer un prénom.'; 
}

if (empty($_POST['nom'])) {
    $erreur['nom'] = 'Veuillez entrer un nom.'; 
}

if (empty($_POST['email'])) {
    $erreur['email'] = 'Veuillez entrer un email.'; 
}

if (empty($_POST['text'])) {
    $erreur['text'] = 'Veuillez entrer un message.'; 
}

if (empty($erreur)) {
    echo json_encode(true);
}else {
    echo json_encode($erreur);
}