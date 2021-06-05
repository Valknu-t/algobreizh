<?php
/*
 * Template Name: Connexion
 */

session_start();

algo_controller_connexion();

if (isset($_SESSION['connexionClient']) && !empty($_SESSION['connexionClient'])) {
    header( 'Location: http://local.dev.algobreizh.com/boutique/');
    exit;
}

get_header(); ?>

<section>
    <?php algo_navbar_desktop();?>
    <?php algo_connexion(); ?>
</section>

<?php
get_footer();
