<?php
if ( !defined('ABSPATH')) exit;

function models_ajouts_images(){

    if (isset($_FILES['image'])) {
        transfert_images();
    }

?>
    <div>
    <br>
        <div>
            Pour envoyer une image, veuillez d'abord à lui donner un bon nom, c'est celui-ci qui vous permettra de la retrouver pour la sélection d'un produit.
        </div>

        <div class="mt-4">
            <form enctype="multipart/form-data" action="#" method="POST">
                <input type="hidden" name="max_file_size" value="250000">
                <input type="file" name="image" size="50">
                <input type="submit" value="Envoyer" class="cursor-pointer opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-base">

            </form>
        </div>

        <!-- <div>
            <a href="liste_image.php">Liste</a>
        </div> -->
    </div>

<?php
}
