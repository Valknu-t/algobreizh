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

// créer un custom-post-type algo_utilisateur
// ajouter les champs avec ACF : Mot de pase / Token email / prenom / nom / première connexion (booleen)
// pages : connexion / inscription / première connexioon FAIT
// sendgrid FAIT

function algo_verif_inscription() {
    if (isset($_POST['codeClient'], $_POST['email'])) {
        $codeClient = null;
        $email = null;
        $tableauError = null;

        $connexionBDD = algo_login_bdd();

        $query_code = mysqli_query ($connexionBDD, "SELECT * FROM ag_membres WHERE codeClient='".$_POST['codeClient']."'");
        $query_email = mysqli_query ($connexionBDD, "SELECT * FROM ag_membres WHERE codeClient='".$_POST['email']."'");

        $query_row_code = mysqli_num_rows ($query_code);
        // $query_row_item = mysqli_num_rows ($query_email);

        if ( empty($_POST['codeClient']) ) {
            $tableauError[] = "Code";
        } else {
            $codeClient = $_POST['codeClient'];
        }

        if ( empty($_POST['email']) ) {
            $tableauError[] = "Email";
        } else {
            $email = $_POST['email'];
        }

        if (strlen($_POST['codeClient'] ) != 6) {
            $lenghtError = 'vous devez rentré 6 caractères';
        }

        if ( $query_row_code == 1 ){
            echo "Ce code client est déjà utilisé.";

        } else {
            if (!mysqli_query ($connexionBDD,"INSERT INTO ag_membres SET codeClient='".$_POST['codeClient']."',email='".$_POST['email']."'")){
                mysqli_query($connexionBDD,"INSERT INTO ag_membres SET PASSWORD FOR codeClient='".$_POST['codeClient']."'TO RANDOM");
            } else {
                header ('Location: http://local.dev.algobreizh.com/finalisation/');
                exit();
            }
        }
    }
?>
<?php
}
