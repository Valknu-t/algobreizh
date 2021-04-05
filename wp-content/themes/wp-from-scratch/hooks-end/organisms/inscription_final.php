<?php
if ( !defined('ABSPATH')) exit;

function algo_inscription_final(){
?>

<div class="flex text-center flex-col items-center mt-56 text-white text-xl">
    <div>
        Votre compte a bien été créer.
    </div>
    <div class="py-4">
        Si vous êtes un téléprospecteur, n'hésitez pas à nous contacter à l'adresse suivante : <br>
        teleprospecteur@algobreizh.bzh
    </div>
    <div>
        Sinon, je vous laisse vous dirigez vers la boutique
    </div>
    <div class="pt-2">
        <?php algo_bouton('La boutique', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'http://local.dev.algobreizh.com/boutique/'); ?>
    </div>

</div>

<?php
}