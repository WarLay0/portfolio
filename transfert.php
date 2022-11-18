<?php

if (empty($_POST['prenom'])) {
    $erreur['prenom'] = 'Prénom Vide'; 
}

if (empty($_POST['nom'])) {
    $erreur['nom'] = 'nom Vide'; 
}

if (empty($_POST['email'])) {
    $erreur['email'] = 'email Vide'; 
}

if (empty($_POST['text'])) {
    $erreur['text'] = 'text Vide'; 
}

if (empty($erreur)) {
    echo json_encode(true);
}else {
    echo json_encode($erreur);
}