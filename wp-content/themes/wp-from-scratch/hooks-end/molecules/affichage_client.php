<?php
if ( !defined('ABSPATH')) exit;

function affichage_client(){

    $connexion_bdd = algo_login_bdd();

    $connexion_bdd -> set_charset("utf8");
    $codeClient = "jt";

    $requete = "SELECT codeClient, email FROM _membres";
    $resultat = $connexion_bdd -> query($requete);
    $supprimer = "DELETE FROM _membres WHERE `codeClient` = {$codeClient}";

    while ($ligne = $resultat -> fetch_assoc()) {

        echo $ligne['codeClient'] . ' ' . $ligne['email']. ' '.' <a href="'. $supprimer .'">Supprimer</a>' .'<br>';

    }

}