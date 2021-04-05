<?php
if ( !defined('ABSPATH')) exit;

function algo_logo(
    $size = "100%",
    $src,
    $alt = null
) {
?>
    <img width="<?php echo $size; ?>" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
<?php
}
