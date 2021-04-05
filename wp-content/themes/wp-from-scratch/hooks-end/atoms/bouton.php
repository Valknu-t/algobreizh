<?php
if ( !defined('ABSPATH')) exit;

function algo_bouton(
    $texte_bouton,
    $color_bouton,
    $link = null
){
?>
    <div class="<?php echo $color_bouton ;?> ">
        <a href="<?php echo $link; ?>">
            <?php echo $texte_bouton; ?>
        </a>
    </div>
<?php
}