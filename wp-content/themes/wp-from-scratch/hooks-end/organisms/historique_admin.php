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

        <form action="#" method="POST">

            <div>

                <input type="submit" id="accepter"  value="accepter" name="Accepter">

            </div>

            <div>

                <input type="submit" id="refuser" value="refuser" name="Refuser">

            </div>

        </form>

    </div>

    <?php

        if (isset($_POST['accepter'])) {

            // var_dump($commande_id);

                mysqli_query($connexion_bdd," UPDATE _commande SET etat = 2 WHERE commande_id = '".$commande_id."'");


        }

    ?>
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