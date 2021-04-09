<?php
/*
 * Template Name: Admin
 */

session_start();

algo_connexion_admin();

if (isset($_SESSION['connexionAdmin']) && !empty($_SESSION['connexionAdmin'])) {
    header( 'Location: http://local.dev.algobreizh.com/admin-panel/');
    exit;
}

get_header(); ?>

<section>
    <?php algo_navbar_desktop();?>
    <?php algo_admin(); ?>
</section>

<?php
get_footer();
