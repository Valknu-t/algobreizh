<?php
if ( !defined('ABSPATH')) exit;

function algo_body_desktop(){
?>

    <div class="h-screen w-full flex items-center justify-center -mt-24">
        <div class="flex flex-col w-3/5">
            <div class="text-5xl text-white">
                <div class="text-center">"Bonjour"</div>
            </div>
            <div class="flex flex-row justify-center mt-8">
                <div class="1/2"><?php algo_bouton('Qui sommes nous ?', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'www.google.com'); ?></div>
                <div class="mx-4"></div>
                <div class="1/2"><?php algo_bouton('Commander', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl', 'www.google.com'); ?></div>
            </div>
        </div>
    </div>

<?php
}
