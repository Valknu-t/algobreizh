<?php
if ( !defined('ABSPATH')) exit;

function change_codeClient(){
?>

    <div>
    <div class="flex justify-start text-white text-3xl mt-10">
        <form action="#" method="GET">
            <div>
                <label for="id_ancien_codeClient" class="pr-2 text-base">Ancien code client</label>
                <input type="text" name="ancien_codeClient" id="id_ancien_codeClient" placeholder="012345" class="bg-greenab bg-opacity-0 text-base w-28" required>
            </div>
            <p class="white-bar"></p>
            <div class="pt-6">
                <label for="id_email" class="pr-2 text-base">Nouveau code client</label>
                <input type="text" name="nouveau_codeClient" id="id_nouveau_codeClient" placeholder="678910" class="bg-greenab bg-opacity-0 text-base w-28" required>
            </div>
            <p class="white-bar"></p>
            <div class="pt-10">
                <input type="submit" id="id_nouveaucode" name="nouveaucode" value="Nouveau code" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-base ml-22">
            </div>
        </form>
    </div>
</div>

<?php
}