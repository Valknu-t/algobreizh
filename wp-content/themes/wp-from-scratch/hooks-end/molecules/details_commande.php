<?php

    $connexion_bdd = algo_login_bdd();

    $requete = "SELECT commande_id, commande_date, commande_codeClient FROM _commande";
    $resultat = $connexion_bdd -> query($requete);

?>
