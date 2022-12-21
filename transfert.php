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

$to = 'evan.bombart.pro@gmail.com';
$subject = 'Test';
$message = "Message de ".$_POST['prenom']." ".$_POST['nom']."/n Adresse mail : ".$_POST['email']."/n ".$_POST['text'];

 if (mail($to,$subject,$message)) {
    echo '<script>alert("Message envoyé : OK !")';
	} else {
		echo 'Erreur : message non envoyé !'."\n";
	}


if (empty($erreur)) {
    echo json_encode(true);
}else {
    echo json_encode($erreur);
}