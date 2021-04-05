<?php
if ( !defined('ABSPATH')) exit;

function algo_image(
    $size = "100%",
    $src,
    $alt = null
) {
?>
    <picture>
        <source srcset="<?php echo $src; ?>" type="image/webp">
        <img width="<?php echo $size; ?>" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
    </picture>
<?php
}