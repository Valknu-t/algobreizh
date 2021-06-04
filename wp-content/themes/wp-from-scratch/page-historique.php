<?php
/*
 * Template Name: Historique
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
    <?php algo_historique(); ?>
</section>

<?php
get_footer();
