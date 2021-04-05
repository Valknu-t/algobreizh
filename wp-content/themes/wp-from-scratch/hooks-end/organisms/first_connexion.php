<?php
if ( !defined('ABSPATH')) exit;

function algo_first_connexion(){
?>

<div>
    <div class="flex justify-center text-white text-3xl mt-72 ">
        <form action method="post">
            <div>
                <label for="id_codeClient" class="pr24">Ancien mot de passe</label>
                <input type="password" name="oldPassword" id="id_oldPassword" placeholder="••••••••••••" class="bg-greenab bg-opacity-0 text-xl w-28">
            </div>
            <p class="white-bar w80"></p>
            <div class="pt-6">
                <label for="id_password" class="pr-2">Nouveau mot de passe</label>
                <input type="password" name="password" id="id_password" placeholder="••••••••••••" class="bg-greenab bg-opacity-0 text-xl w-100">
            </div>
            <p class="white-bar w80"></p>
            <div class="pt-10">
                <input type="submit" id="id_changePassword" name="changePassword" value="Changer le mot de passe" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl ml-22">
            </div>
        </form>
    </div>
</div>


<?php
}