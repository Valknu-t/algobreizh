<?php
if ( !defined('ABSPATH')) exit;

function algo_boutique_desktop(){
?>
<body>
    <div  class="pt-20 flex justify-center ml7">
        <!--1er produit -->
        <div>
            <?php algo_carte_algue("pem","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/epices_marine.webp',"","Epice marine", "Ceci est une epice faite dans le nord de la France");?>
        </div>
        <!--2ème produit -->
        <div>
            <?php algo_carte_algue("","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/haricot_mer_saumure.webp',"","Haricot de mer de saumure", "Ceci est une epice faite dans le nord de la France");?>
        </div>
        <!--3ème produit -->
        <div>
            <?php algo_carte_algue("ppa","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/pates_algues.webp',"","Pâtes aux algues", "Ceci est une epice faite dans le nord de la France");?>
        </div>
    </div>
    <div class="pt-20 flex justify-center ml7">
        <!--4ème produit -->
        <div>
            <?php algo_carte_algue("psn","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/salicornes_naturel.webp',"","Salicornes naturel", "Ceci est une epice faite dans le nord de la France");?>
        </div>
        <!--5ème produit -->
        <div>
            <?php algo_carte_algue("psv","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/salicornes_vinaigre.webp',"","Salicornes au vinaigre", "Ceci est une epice faite dans le nord de la France");?>
        </div>
        <!--6ème produit -->
        <div>
            <?php algo_carte_algue("","", get_template_directory_uri() . '/BuildFrontAsset/dist/images/sels_algues.webp',"","Sels aux algues", "Ceci est une epice faite dans le nord de la France");?>
        </div>
    </div>

    <div class="flex justify-center mt-20">
        <div class="text-center w-56 h-8 text-white font-semibold">
            <?php algo_bouton('Acheter', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'www.google.com'); ?>
        </div>
    </div>
</body>


<?php
}