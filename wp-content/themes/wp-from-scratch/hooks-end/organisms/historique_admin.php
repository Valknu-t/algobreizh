<?php
if ( !defined('ABSPATH')) exit;

function algo_historique_admin(){

    $connexion_bdd = algo_login_bdd();
    // $codeClient = htmlspecialchars($_SESSION['connexionClient']);

    $requete_commande = mysqli_query($connexion_bdd, "SELECT * FROM _commande ");

    ?>

        <div class="text-white text-center mt-5 text-xl font-semibold">

            Historique des commandes :

        </div>

    <?php

    while ($commande = $requete_commande -> fetch_assoc()) {

        // var_dump($commande['commande_codeClient']);
        // var_dump($commande['commande_id']);

        $commande_id = $commande['commande_id'];
        $codeClient = $commande['commande_codeClient'];
        $etat_commande = $commande['etat'];
        $date = $commande['commande_date'];


        if ($etat_commande == 0) {
            $etat = "Commande en attente";

        $requete_contenu = mysqli_query($connexion_bdd, "SELECT * FROM _commandeligne WHERE commande_id = '".$commande_id."' ");

    ?>
    <div class="flex justify-center">

        <div class=" text-white ml-10 font-medium flex flex-row">

            Numéro de commande: <?php echo $commande_id ; ?>

            <div class=" ml-20">

                codeClient : <?php echo $codeClient ; ?>

            </div>

            <div class=" ml-20">

                Etat de la commande : <?php echo $etat ; ?>

            </div>

            <div class=" ml-20">

                Date de la commande : <?php echo $date ; ?>

            </div>

        </div>
    </div>
<!-- ________________________________________________________________________________________________________________________________________________ -->
    <div>

        <form action="http://local.dev.algobreizh.com/etat-commande/" method="POST">

            <div class="flex flex-row justify-center mt-4">
                <div class="mx-2">

                    <input class="py-1 px-2 cursor-pointer" type="submit" id="accepter[<?php echo $commande_id ; ?>]" value="accepter" name="accepter[<?php echo $commande_id ; ?>]">

                </div>

                <div class="mx-2">

                    <input class="py-1 px-2 cursor-pointer" type="submit" id="refuser[<?php echo $commande_id ; ?>]" value="refuser" name="Refuser">

                </div>
            </div>

        </form>

    </div>

<!-- ________________________________________________________________________________________________________________________________________________ -->

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

}