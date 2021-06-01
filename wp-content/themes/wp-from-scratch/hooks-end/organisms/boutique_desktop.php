<?php
if ( !defined('ABSPATH')) exit;

function algo_boutique_desktop(){

    $connexion_bdd = algo_login_bdd();

    $requete = "SELECT product_name, product_desc FROM _product";
    $resultat = $connexion_bdd -> query($requete);

?>
<body>

    <form action="../Models/Commande.php" method="GET">

        <?php


            while ($ligne = $resultat -> fetch_assoc()) {
                ?>

            <div class="pt-20 flex justify-center ml7">

                <div class="flex rounded-lg bg-lightgreen flex-col py-4 px-2 opa-30 ">

                    <div class="font-semibold text-center">

                        <?php
                            echo $ligne['product_name'];
                        ?>

                    </div>

                    <div class="text-center">

                        <?php
                            echo $ligne['product_desc'];
                        ?>

                    </div>

                    <div class="w-7 ">

                        <input type="number" id="id_<?php echo $ligne['product_name'];?>_quantity" name="<?php echo $ligne['product_name'];?>_quantity" min="0" >

                    </div>



                </div>

            </div>

            <?php
            }

        ?>


        <div  class="pt-20 flex justify-center ml7">



        </div>
        <div class="pt-20 flex justify-center ml7">

        </div>

        <div class="flex justify-center mt-20">

            <div class="text-center w-56 h-8 text-white font-semibold">

                <input type="submit" id="id_buy" name="buy" value="Achat" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl">

            </div>

        </div>

    </form>

</body>


<?php
}
