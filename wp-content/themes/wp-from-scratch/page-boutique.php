<?php
/*
 * Template Name: Boutique
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
    <?php algo_boutique_desktop(); ?>
</section>

<?php
get_footer();
