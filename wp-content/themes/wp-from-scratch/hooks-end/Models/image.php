<?php
if ( !defined('ABSPATH')) exit;

function models_ajouts_images(){

    if (isset($_FILES['image'])) {
        transfert_images();
    }

?>
    <div>
        <div>
            Envoie d'une image.
        </div>

        <div>
            <form enctype="multipart/form-data" action="#" method="POST">
                <input type="hidden" name="max_file_size" value="250000">
                <input type="file" name="image" size="50">
                <input type="submit" value="Envoyer">

            </form>
        </div>

        <!-- <div>
            <a href="liste_image.php">Liste</a>
        </div> -->
    </div>

<?php
}
