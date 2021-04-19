<?php
/*
 * Template Name: Admin-Panel
 */
algo_verif_inscription();
get_header(); ?>

<section>
    <?php algo_navbar_desktop(); ?>
    <?php algo_connexion_admin(); ?>

    <div class="ml-12 text-white text-xl">

        <div class="flex align-middle mt-10 flex-col">
            Pour générer un nouveau code client appuyer sur ce bouton : <?php generator_code_client(); ?>
        </div>

        <?php models_ajouts_images(); ?>
        <?php models_ajouts_produits(); ?>



        <!-- <div>
            <br>
            Afficher la liste des clients : <a target="_blank" class="text-white hover:text-lightgreen" href="http://local.dev.algobreizh.com/affichage-client/" > Liste </a>
        </div>

        <?php //algo_inscription_admin() ?>
        <?php //change_codeClient() ?>
        <?php //change_email() ?> -->

    </div>

</section>

<?php
get_footer();
