<?php

if(count($_POST)==0){
    header('Location: index.php/#contact');
}

// Vérifications :

    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    }else{
        echo '<script>alert("Le prénom n\'est pas renseigné")</script>';
    }

    if (!empty($_POST['nom'])) {
        $prenom = $_POST['nom'];
    }else{
        echo '<script>alert("Le nom n\'est pas renseigné")</script>';
    }

    if (!empty($_POST['email'])) {
        $prenom = $_POST['email'];
    }else{
        echo '<script>alert("L\'email n\'est pas renseigné")</script>';
    }

    if (!empty($_POST['text'])) {
        $prenom = $_POST['text'];
    }else{
        echo '<script>alert("Le texte n\'est pas renseigné")</script>';
    }
