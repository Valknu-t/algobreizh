<?php
if ( !defined('ABSPATH')) exit;

function affichage_client(){

    $connexion_bdd = algo_login_bdd();

    $connexion_bdd -> set_charset("utf8");
    $codeClient = "jt";

    $requete = "SELECT codeClient, email, prospecteur FROM _membres";
    $resultat = $connexion_bdd -> query($requete);
    $supprimer = "DELETE FROM _membres WHERE `codeClient` = {$codeClient}";

    function estClient($ligneGrade){
        if($ligneGrade == 1){
            ?>
                <input type="checkbox" id="checkGrade" name="checkGrade" checked>
            <?php
        } else{
            ?>
                <input type="checkbox" id="checkGrade" name="checkGrade">
            <?php
        }
    }

    while ($ligne = $resultat -> fetch_assoc()) {

        settype($ligne['grade'], "int");
        echo $ligne['codeClient'] . ' ' . $ligne['email'] . ' '. estClient($ligne['grade']) .' <a class="font-semibold text-red-900 hover:text-red-700 hover:underline" href="'. $supprimer .'"> Supprimer</a>' . '<br>';

    }

}
