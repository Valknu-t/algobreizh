<?php
/*
 * Template Name: Première_connexion
 */

session_start();

$message = null;
$premiere_connexion = algo_controller_premiere_connexion();

if (isset($_SESSION['idClient']) && !empty($_SESSION['idClient'])) {

    $status = algo_get_client_firstconnexion_by_id($_SESSION['idClient']);

    if ($premiere_connexion == "error_old") {
        $message = "L'ancien mot de passe ne correspond pas.";
    }

    if ($premiere_connexion == "valide" || $status == "false") {
        wp_redirect(get_home_url() . '/boutique');
        exit;
    }

} else {
    wp_redirect( get_home_url() );
    exit;
}

get_header(); ?>

<section>
    <?php algo_first_connexion(); ?>

    <?php if ($message): ?>
        <div>
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
</section>

<?php
get_footer();
