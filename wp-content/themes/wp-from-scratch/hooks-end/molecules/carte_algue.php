<?php
if ( !defined('ABSPATH')) exit;

function algo_carte_algue(
    $pad_image,
    $size = "100%",
    $src,
    $alt = null,
    $name_product,
    $description_product
){
?>

<div class="flex rounded-lg bg-lightgreen flex-col wid py-4 px-2 opa-30 h-full">
    <div class="block mx-auto <?php echo $pad_image; ?>">
        <img width="<?php echo $size; ?>" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
    </div>
    <div class="font-semibold text-center">
        <?php echo $name_product; ?>
    </div>
    <div class="text-center">
        <?php echo $description_product; ?>
    </div>
    <div class="w-7">
        <form action="" method="POST">
            <input class="input_boutique" type="number" id="nombre" name="<?php echo $name_product; ?>" placeholder="0">
        </form>
    </div>
</div>

<?php
}