<?php
if ( !defined('ABSPATH')) exit;

function transfert_images(){
    $ret = false;
    $img_blob = '';
    $img_taille = 0;
    $img_type = '';
    $img_nom = '';
    $taille_max = 250000;
    $ret = is_uploaded_file($_FILES['image']['tmp_name']);

    if (!$ret) {
        echo "Problème de transfert";
        return false;
    } else {
        $img_taille = $_FILES['image']['size'];

        if ($img_taille > $taille_max) {
            echo "Trop gros !";
            return false;
        }

        $img_type = $_FILES['image']['type'];
        $img_nom = $_FILES['image']['name'];

        $connexion_bdd = algo_login_bdd();

        $img_blob = file_get_contents($_FILES['image']['tmp_name']);

        $req = "INSERT INTO _images (" .
                "img_nom, img_taille, img_type, img_blob " .
                ") VALUES (" .
                "'" . $img_nom . "', " .
                "'" . $img_taille . "', " .
                "'" . $img_type . "', " .
                "'" . addslashes ($img_blob) . "') ";

        $ret = mysqli_query ($connexion_bdd ,$req) or die (mysqli_error ($connexion_bdd));
        return true;
    }

}