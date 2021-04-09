<?php
if ( !defined('ABSPATH')) exit;

function algo_connexion_admin(){

    if (isset ($_GET['connexionAdmin'])) {

        $password = htmlentities($_GET['password_admin'], ENT_QUOTES, "ISO-8859-1");
        $valide = "MatosLeMagnifique";

        if ($password != $valide) {
            exit ("Tu n'as rien à faire ici !");
        } else {
            $_SESSION['connexionAdmin'] = $password;
            echo "Vous êtes à présent connecté !";
        }

    }
}