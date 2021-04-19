<?php
if ( !defined('ABSPATH')) exit;

function models_ajouts_produits(){
    $connexionBDD = algo_login_bdd();
?>

<body>
    <div>
        <div class="flex text-white text-3xl mt-72 ">

            <form action="#" method="GET">

                <div>
                    <label for="id_nameProduct" class="pr-2">Nom du produit</label>
                    <input type="text" name="nameProduct" id="id_nameProduct" placeholder="Epice marine" class="bg-greenab bg-opacity-0 text-xl w-28" required>
                </div>

                <p class="white-bar"></p>

                <div class="pt-6">
                    <label for="id_description" class="pr-22">Description</label>
                    <textarea name="description" id="id_description" placeholder="Produit fait à base d'algues, récolté près de ..." class="bg-greenab bg-opacity-0 text-xl w-100" required cols="10" rows="6"></textarea>
                </div>

                <p class="white-bar"></p>

                <div class="pt-6">
                    <label for="id_selectImg">Image du produit</label>
                    <select name="imgProduct" id="id_selectImg" class="bg-greenab bg-opacity-0 text-xl w-100">

                        <?php
                            $img = $connexionBDD->query('SELECT * FROM _images');

                            while ($donnees = $img->fetch_assoc())
                            {
                            ?>

                                <option value="<?php echo $donnees['img_id']; ?>"> <?php echo $donnees['img_nom'];  ?></option>

                            <?php
                            }
                        ?>

                    </select>
                </div>

                <div class="pt-10">
                    <input type="submit" id="id_addProduct" name="addProduct" value="Add product" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl ml-22">
                </div>

            </form>

        </div>
    </div>
</body>

<?php
    if (isset($_GET['nameProduct'], $_GET['description'], $_GET['imgProduct'])) {
        $nameProduct = null;
        $description = null;
        $imgProduct = null;

        $query_name = mysqli_query ($connexionBDD, "SELECT * FROM _product WHERE product_name='".$_GET['nameProduct']."'");
        $query_row_name = mysqli_num_rows($query_name);

        if ( $query_row_name == 1)
        {
            echo "Ce produit est déjà dans la boutique";
        }

    }
}