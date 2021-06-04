<?php
if ( !defined('ABSPATH')) exit;

function algo_historique(){

    $connexion_bdd = algo_login_bdd();
    $codeClient = htmlspecialchars($_SESSION['connexionClient']);

    $requete_commande = mysqli_query($connexion_bdd, "SELECT * FROM _commande WHERE commande_codeClient = '".$codeClient."' ");

    ?>

        <div class="text-white text-center mt-5 text-xl font-semibold">

            Votre historique de commande :

        </div>

    <?php

    while ($commande = $requete_commande -> fetch_assoc()) {

        // var_dump($commande['commande_codeClient']);
        // var_dump($commande['commande_id']);

        $commande_id = $commande['commande_id'];
        $etat_commande = $commande['etat'];
        $date = $commande['commande_date'];


        if ($etat_commande == 2) {
            $etat = "Commande valider";
        }
        elseif ($etat_commande == 1){
            $etat = "Commande annulé";
        }
        else {
            $etat = "Commande en attente";
        }


        $requete_contenu = mysqli_query($connexion_bdd, "SELECT * FROM _commandeligne WHERE commande_id = '".$commande_id."' ");

    ?>
    <div class="flex justify-center">

        <div class=" text-white ml-10 font-medium flex flex-row">

            Numéro de commande: <?php echo $commande_id ; ?>

            <div class=" ml-20">

                Etat de la commande : <?php echo $etat ; ?>

            </div>

            <div class=" ml-20">

                Date de la commande : <?php echo $date ; ?>

            </div>

        </div>
    </div>

    <div class="mb-2 ml-16 flex justify-center">

        Contenu :

    </div>

    <?php

    while ( $produit = $requete_contenu ->fetch_assoc() ) {

        // var_dump($produit['product_id']);
        // var_dump($produit['quantite']);
        $nom = $produit['product_id'] ;
        $quantite = $produit['quantite'] ;

    ?>

    <div class="mb-2 ml-20 flex justify-center">

        <?php echo $nom," : " ,$quantite ; ?>

    </div>

    <?php
        }
    }
}