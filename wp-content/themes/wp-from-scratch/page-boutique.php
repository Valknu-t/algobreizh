<?php
/*
 * Template Name: Boutique
 */

add_commande();

session_start();

$isConnected = $_SESSION['connexionClient'];

echo 'Voici ton numéro client : ', htmlspecialchars($_SESSION['connexionClient']);

if (!$isConnected) {
    header('Location: http://local.dev.algobreizh.com/');
    exit;
}

get_header(); ?>

<section>
    <?php algo_navbar_desktop();?>
    <?php algo_boutique_desktop(); ?>
</section>

<?php
get_footer();
