<?php
if ( !defined('ABSPATH')) exit;

function algo_text(
    $texte,
    $class = null
){
?>

    <div class="<?php echo $class; ?>">
        <?php echo $texte; ?>
    </div>

<?php
}
