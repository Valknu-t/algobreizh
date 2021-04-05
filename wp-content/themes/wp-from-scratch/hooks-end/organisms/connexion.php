<?php
if ( !defined('ABSPATH')) exit;

function algo_connexion(){
?>

<div>
    <div class="flex justify-center text-white text-3xl mt-72 ">
        <form action method="post">
            <div>
                <label for="id_codeClient" class="pr24">Code client</label>
                <input type="text" name="codeClient" id="id_codeClient" placeholder="012345" class="bg-greenab bg-opacity-0 text-xl w-28">
            </div>
            <p class="white-bar"></p>
            <div class="pt-6">
                <label for="id_password" class="pr-2">Mot de passe</label>
                <input type="password" name="password" id="id_password" placeholder="••••••••••••" class="bg-greenab bg-opacity-0 text-xl w-100">
            </div>
            <p class="white-bar"></p>
            <div class="flex flex-row-reverse pt-10">
                <div>
                    <input type="submit" id="id_connexion" name="connexion" value="Connexion" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl ml-22"> 
                </div>
                <div>
                    <?php algo_bouton('S\'inscrire', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'http://local.dev.algobreizh.com/inscription/'); ?>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
}