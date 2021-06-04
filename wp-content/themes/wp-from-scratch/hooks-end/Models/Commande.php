<?php
if ( !defined('ABSPATH')) exit;

function add_commande(){

    $connexion_bdd = algo_login_bdd();
    $codeClient = htmlspecialchars($_SESSION['connexionClient']);
    $date = date("y.m.d");

    if (isset( $_POST['produitAchete'] ) ){

        mysqli_query($connexion_bdd, "INSERT INTO _commande SET commande_codeClient='".$codeClient."', commande_date ='".$date."'");

        $last_commande_id = mysqli_insert_id($connexion_bdd);

        $lesQuantites = $_POST['quantity'];

        foreach ($_POST['produitAchete'] as $unProduit) {

            mysqli_query ($connexion_bdd,"INSERT INTO _commandeligne SET commande_id = '".$last_commande_id."', product_id = '".$unProduit."', quantite = '".$lesQuantites[''.$unProduit.'']."'");

        }

    }
?>
    <div class="flex text-center flex-col items-center mt-56 text-white text-xl">

        <div>

            Votre commande a bien été prise en compte. <br>
            Elle sera traitée dans les plus brefs délais par notre équipe

        </div>

        <div class="py-4">

            Vous pouvez toutefois vous renseigner sur votre compte en allant dans votre historique de commande.

        </div>

        <div class="pt-2 flex-row flex">

            <?php algo_bouton('Retour boutique', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'http://local.dev.algobreizh.com/boutique/'); ?>
            <?php algo_bouton('Historique de commande', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl ml-4', 'http://local.dev.algobreizh.com/historique/'); ?>


        </div>

    </div>


<?php
}

