<?php
if ( !defined('ABSPATH')) exit;

function algo_admin(){
?>

<div>
    <div class="flex justify-center text-white text-3xl mt-72 ">
        <form action method="GET">
            <div class="py-6">
                <label for="id_password" class="pr-2">Mot de passe</label>
                <!--Le mot de passe est MatosLeMagnifique -->
                <input type="password" name="password_admin" id="id_password_admin" placeholder="••••••••••••" class="bg-greenab bg-opacity-0 text-xl w-100" required>
            </div>
                    <input type="submit" id="id_connexionAdmin" name="connexionAdmin" value="Connexion" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl ml-22">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
}