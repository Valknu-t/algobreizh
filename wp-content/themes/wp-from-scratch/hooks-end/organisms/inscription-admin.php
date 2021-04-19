<?php
if ( !defined('ABSPATH')) exit;

function algo_inscription_admin(){
?>

<div>
    <div class="flex justify-start text-white text-3xl mt-10">
        <form action="#" method="GET">
            <div>
                <label for="id_codeClient" class="pr-2 text-base">Code client</label>
                <input type="text" name="codeClient" id="id_codeClient" placeholder="012345" class="bg-greenab bg-opacity-0 text-base w-28" required>
            </div>
            <p class="white-bar"></p>
            <div class="pt-6">
                <label for="id_email" class="pr-12 text-base">Email</label>
                <input type="email" name="email" id="id_email" placeholder="test@algobreizh.bzh" class="bg-greenab bg-opacity-0 text-base w-100" required>
            </div>
            <p class="white-bar"></p>
            <div class="pt-10">
                <input type="submit" id="id_inscription" name="inscription" value="Inscription" class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-base ml-22">
            </div>
        </form>
    </div>
</div>

<?php
}