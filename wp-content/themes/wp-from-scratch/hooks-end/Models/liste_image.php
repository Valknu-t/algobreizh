<?php
if ( !defined('ABSPATH')) exit;

function models_liste_images(){

    $connexion_bdd =  algo_login_bdd();

    $req = "SELECT img_nom, img_id " .
            "FROM _images ORDER BY img_nom";

    $ret = mysqli_query($connexion_bdd, $req) or die (mysqli_error($connexion_bdd));

    while ($col = mysqli_fetch_row($ret)) {
        echo "<a href=\"apercu.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
    }

?>

<?php
}
