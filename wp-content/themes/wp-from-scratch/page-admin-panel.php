<?php
/*
 * Template Name: Admin-Panel
 */

get_header(); ?>

<section>
    <?php algo_navbar_desktop(); ?>
    <?php algo_connexion_admin(); ?>

    <?php models_ajouts_images(); ?>
</section>

<?php
get_footer();
