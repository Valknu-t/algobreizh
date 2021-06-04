<?php
if ( !defined('ABSPATH')) exit;

function algo_boutique_desktop(){

    $connexion_bdd = algo_login_bdd();

    $requete = "SELECT product_name, product_desc FROM _product";
    $resultat = $connexion_bdd -> query($requete);

?>
<body>

    <form action="http://local.dev.algobreizh.com/commande/" method="POST">

        <?php


            while ($ligne = $resultat -> fetch_assoc()) {
                ?>

            <div class="pt-20 flex justify-center ml6">

                <div class="flex rounded-lg bg-lightgreen flex-col pb-1 px-2 opa-30 ">

                    <div class="font-semibold text-center text-lg">

                        <?php
                            echo $ligne['product_name'];
                        ?>

                    </div>

                    <div class="text-center">

                        <?php
                            echo $ligne['product_desc'];
                        ?>

                    </div>

                    <div class="my-2 w-7 justify-center flex">

                        <input type="hidden" name="produitAchete[<?php echo $ligne['product_name'];?>]" value="<?php echo $ligne['product_name'];?>">
                        <input type="number" id="quantity[<?php echo $ligne['product_name'];?>]" name="quantity[<?php echo $ligne['product_name'];?>]" min="0" class="text-center w-3/6" placeholder="0" required >

                    </div>



                </div>

            </div>

            <?php
            }

        ?>

        <div class="flex justify-center mt-20">

            <div class="text-center w-56 h-8 text-white font-semibold">

                <input type="submit" id="id_buy" name="buy" value="Achat" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl">

            </div>

        </div>

    </form>

</body>


<?php
}
