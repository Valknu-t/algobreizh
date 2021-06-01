<?php
if ( !defined('ABSPATH')) exit;

function add_commande(){

    // var_dump("add");
    // die;

    if (isset( $_GET['amount'] ) ){

        $amount = null;

        $connexion_bdd = algo_login_bdd();
        $codeClient = htmlspecialchars($_SESSION['connexionClient']);
        $product_name = "SELECT product_name FROM _product" ;

        mysqli_query ($connexion_bdd,"INSERT INTO _commande SET commande_codeClient='".$codeClient."', commande_product='".$product_name."', commande_quantityt='".$_GET['amount']."'");

        echo "Commande bien passer";

    }



}

