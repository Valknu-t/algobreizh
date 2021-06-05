<?php
if ( !defined('ABSPATH')) exit;

function algo_etat_commande(){

    $connexion_bdd = algo_login_bdd();

    $requete_commande = mysqli_query($connexion_bdd, "SELECT * FROM _commande ");

    // var_dump($_POST['accepter']);

    while ($commande = $requete_commande -> fetch_assoc()) {

        $commande_id = $commande['commande_id'];

        // var_dump($commande_id);

    }

    // var_dump($commande_id);


    if (!empty($_POST) ) {

        var_dump($commande_id);

        mysqli_query ($connexion_bdd, "UPDATE _commande SET etat = 2 WHERE commande_id = '".$commande_id."'");
    }



    ?>

    <div>
        la commande
    </div>

<?php
}