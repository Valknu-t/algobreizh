<?php
if ( !defined('ABSPATH')) exit;

function algo_controller_connexion(){

    if (isset ($_GET['connexion'])) {

        $codeClient = htmlentities($_GET['codeClient'], ENT_QUOTES, "ISO-8859-1");
        $password = htmlentities($_GET['password'], ENT_QUOTES, "ISO-8859-1");

        $key = 'Ghl4[^QSd';

        $connexion_bdd = algo_login_bdd();

        if (!$connexion_bdd) {
            echo "Erreur de connexion à la base de données.";

        } else {
            $request = mysqli_query($connexion_bdd, "SELECT * FROM ag_membres WHERE codeClient = '".$codeClient."' AND pasword = '".md5($key.$password)."'");

            if (mysqli_num_rows($request) == 0) {
                echo "Le codeClient ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
            } else {
                $_SESSION['connexionClient'] = $codeClient;
                echo "Vous êtes à présent connecté !";
            }

        }

    }
}