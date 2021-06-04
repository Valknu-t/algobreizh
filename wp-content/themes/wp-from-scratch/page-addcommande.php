<?php
/*
 * Template Name: Commande
 */

session_start();

$isConnected = $_SESSION['connexionClient'];

if (!$isConnected) {
    header('Location: http://local.dev.algobreizh.com/');
    exit;
}

get_header(); ?>

<section>
    <?php algo_navbar_desktop();?>
    <?php add_commande(); ?>
</section>

<?php
get_footer();
