<?php
if ( !defined('ABSPATH')) exit;

// Coté admin
// je dois avoir un pannel afin de créer un nouvelle utilisateur et générer un code client afin de le fournir au client

// coté client
// champs sélection code client
// Si le client existe pas alors return false
// Si le client existe alors on vérifie si il as rentré sont adresse mail
// Sinon on le redirige vers un formulaire pour ajouter son email

// Mot de passe
// Générer un mot de passe
// si première connexion alors demande de changement de mot de passe

function algo_verif_inscription() {

    if (isset($_GET['codeClient'], $_GET['email'])) {
        $codeClient = null;
        $email = null;

        $connexionBDD = algo_login_bdd();

        $key = 'Ghl4[^QSd';

        $password = randomPassword();
        $password_hash = md5($key.$password);

        $query_code = mysqli_query ($connexionBDD, "SELECT * FROM _membres WHERE codeClient='".$_GET['codeClient']."'");
        $query_email = mysqli_query ($connexionBDD, "SELECT * FROM _membres WHERE email = '".$_GET['email']."'");

        $query_row_code = mysqli_num_rows ($query_code);
        $query_row_item = mysqli_num_rows ($query_email);

        if( $query_row_item == 1) {
            exit ("Cette adresse email est déjà utilisé !");
        }

        if ( $query_row_code == 1 ){
            echo "Ce code client est déjà utilisé.";

        } else {
            if (!mysqli_query ($connexionBDD,"INSERT INTO _membres SET codeClient='".$_GET['codeClient']."',email='".$_GET['email']."',pasword='{$password_hash}'")){
                mysqli_query($connexionBDD,"INSERT INTO _membres SET PASSWORD FOR codeClient='".$_GET['codeClient']."'");
            } else {
                algo_send_mail($password, $_GET['email'], $_GET['codeClient']);
                header ('Location: http://local.dev.algobreizh.com/finalisation/');
                exit();
            }
        }
    }
?>
<?php
}
