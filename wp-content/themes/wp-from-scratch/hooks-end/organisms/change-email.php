<?php
if ( !defined('ABSPATH')) exit;

function change_email(){
    ?>

        <div>
        <div class="flex justify-start text-white text-3xl mt-10">
            <form action="#" method="GET">
                <div>
                    <label for="id_ancien_codeClient" class="pr-2 text-base">Ancien email</label>
                    <input type="email" name="ancien_email" id="id_ancien_email" placeholder="ancien@algobreizh.bzh" class="bg-greenab bg-opacity-0 text-base w-100" required>
                </div>
                <p class="white-bar"></p>
                <div class="pt-6">
                    <label for="id_email" class="pr-2 text-base">Nouveau email</label>
                    <input type="email" name="nouveau_email" id="id_nouveau_email" placeholder="nouveau@algobreizh.bzh" class="bg-greenab bg-opacity-0 text-base w-100" required>
                </div>
                <p class="white-bar"></p>
                <div class="pt-10">
                    <input type="submit" id="id_nouveauemail" name="nouveauemail" value="Nouveau email" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-base ml-22">
                </div>
            </form>
        </div>
    </div>

<?php
}