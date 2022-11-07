<?php

$_SESSION['erreur'] = FALSE;
$_SESSION['errid'] = array();
if(count($_POST)==0){
    header('Location: /#contact');
}

// Vérifications :

    if (!empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    }else{
        echo 'Le prénom n\'est pas renseigné';
        $_SESSION['erreur'] = TRUE;
        array_push($_SESSION['errid'],'prenom');
    }

    if (!empty($_POST['nom'])) {
        $prenom = $_POST['nom'];
    }else{
        echo 'Le nom n\'est pas renseigné';
        $_SESSION['erreur'] = TRUE;
        array_push($_SESSION['errid'],'nom');
    }

    if (!empty($_POST['email'])) {
        $prenom = $_POST['email'];
    }else{
        echo 'L\'email n\'est pas renseigné';
        $_SESSION['erreur'] = TRUE;
        array_push($_SESSION['errid'],'email');
    }

    if (!empty($_POST['text'])) {
        $prenom = $_POST['text'];
    }else{
        echo 'Le texte n\'est pas renseigné';
        $_SESSION['erreur'] = TRUE;
        array_push($_SESSION['errid'],'text');
    }

if ($_SESSION['erreur'] == TRUE) {
    foreach ($_SESSION['errid'] as $key => $value) {
        echo '<script>var element = document.getElementById('.$value.');element.innerHTML = <p>Test</p>';
        echo 'Ajout de l\'erreur  '.$value;
    }
}else{
    echo '<script>alert("C\'est bon")</script>';
    header('Location: /#contact');
}