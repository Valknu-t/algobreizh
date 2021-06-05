<?php
if ( !defined('ABSPATH')) exit;

function algo_body_contact_desktop(){
?>

<style>
    input[type="text"]{
        background: transparent;
        border: none;
        height:25px;
    }

    textarea{
        background: transparent;
        min-height: 300px;
        max-height: 300px;
    }

    ::placeholder{
        color: rgba(220,220,220,0.8)!important;
        opacity: 1;
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: rgba(220,220,220,0.8)!important;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: rgba(220,220,220,0.8)!important;
    }
</style>

    <div class="h-screen w-full flex flex-row">
<!-- PARTIE GAUCHE -->
        <div class="w-1/2 py-16 px-16 text-white text-xl">
            <div class="h-full py-16 px-32">
                <form action="<?php echo get_home_url(); ?>/post_contact" method="POST">
                    <div class="flex flex-col">
                        <div class="flex flex-col mb-8">
                            <div class="flex flex-row">
                                <label class="my-0 font-semibold" for="prenom">Prénom<span class="ml-1 text-sm text-gray-300">*</span></label>
                                <input class="font-light w-full text-white" type="text" id="prenom" name="prenom" placeholder="Francois XXXXX" required>
                            </div>
                            <div class="bg-lightgreen w-prenom h-px mt-1 mb-2"></div>
                        </div>

                        <div class="flex flex-col mb-8">
                            <div class="flex flex-row">
                                <label class="my-0 font-semibold" for="email">Email<span class="ml-1 text-sm text-gray-300">*</span></label>
                                <input class="font-light w-full text-white" type="text" id="email" name="email" placeholder="exemple@mail.com" required>
                            </div>
                            <div class="bg-lightgreen w-email h-px mt-1 mb-2"></div>
                        </div>

                        <div class="flex flex-col mb-8">
                            <label class="my-0 font-semibold" for="inputmessage">Message<span class="ml-1 text-sm text-gray-300">*</span></label>
                            <div class="bg-lightgreen w-message h-px mt-1 mb-2"></div>
                            <textarea class="font-light text-white" id="inputmessage" name="message" placeholder="Votre message." required></textarea>
                        </div>
                        <div class="text-xs text-gray-300">*: Champ obligatoire.</div>
                    </div>

                    <div class="flex justify-center mt-16 align-center items-center">
                        <!-- <?php algo_bouton('Envoyer', 'opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl'); ?> -->
                        <button class="opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-xl" type="submit" name="submit" value="true"><a href="<?php echo get_home_url(); ?>">Envoyer</a></button>
                    </div>
                </form>
            </div>
        </div>

<!-- PARTIE DROITE -->
        <div class="w-1/2 py-16 px-16 text-white">
            <div class="h-full py-16 px-32">
                <div class="text-2xl ml-8">
                    <div>Algobreizh</div>
                    <div>22 du caca qui pue</div>
                    <div>Rennes 35000</div>
                    <div>08.78.43.12.46</div>
                </div>
                <div class="mt-8 shadow-md">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5333.718632630508!2d-1.7390027965420911!3d48.05505402264201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1e3236aaa62f%3A0x2413a373f0ac5410!2sMcDonald&#39;s!5e0!3m2!1sfr!2sfr!4v1615990189786!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php
}
