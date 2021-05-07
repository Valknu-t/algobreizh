<?php
if ( !defined('ABSPATH')) exit;

function algo_navbar_desktop(){
?>

<div class="flex flex-row w-full bg-darkgreenab opa-75 text-2xl justify-between px-10 h-16 items-center shadow-lg">
        <div><?php algo_logo("75px", get_template_directory_uri() . '/BuildFrontAsset/dist/images/logo.png', "logo"); ?></div>
        <div class="flex flex-row justify-between w-1/3 text-white pl-40 mt-6">
            <div><a class="flex text-white hover:text-lightgreen" href="<?php echo get_home_url(); ?>">Accueil</a></div>
            <?php
            if (isset($_SESSION['connexionClient']) or isset($_SESSION['connexionAdmin'])){
                ?> <!--AFFICHE LE BOUTON BOUTIQUE SI ADMIN OU USER EST CONNECTÉ-->
                <div><a class="flex text-white hover:text-lightgreen" href="/boutique">Boutique</a></div>
                <?php
            };
            if (isset($_SESSION['connexionAdmin'])){
                ?> <!--AFFICHE LE BOUTON ADMIN SI ADMIN EST CONNECTÉ-->
                <div><a class="flex text-white hover:text-lightgreen" href="/admin">Admin</a></div>
                <?php
            }
            ?>
            <div><a class="flex text-white hover:text-lightgreen" href="/contact">Contact</a></div>

            <form action="http://local.dev.algobreizh.com/deconnexion" method="POST">
                <button type="submit" id="id_deconnexion" name="deconnexion" class="flex text-white hover:text-lightgreen"> <?php algo_icon("user")?></button>
            </form>

        </div>
    </div>

<?php
}
