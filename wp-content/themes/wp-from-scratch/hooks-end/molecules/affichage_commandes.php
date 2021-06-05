<?php
if ( !defined('ABSPATH')) exit;

function affichage_commandes(){

    $connexion_bdd = algo_login_bdd();

    $requete = "SELECT commande_id, commande_date, commande_codeClient FROM _commande";
    $resultat = $connexion_bdd -> query($requete);

    ?>

            <form action="details_commande.php" method="post">

                <?php

                while($ligne = $resultat -> fetch_assoc()){
                echo '<input class="hidden" value="' . $ligne['commande_id'] . '"></input>';
                echo '<button class="underline text-black hover:text-white" href="">
                <tr>
                    <td>' . 'Commande n° <span class="font-semibold">' . $ligne['commande_id'] . '</span></td>
                    <td>' . '(date: <span class="font-semibold">' . $ligne['commande_date'] . '</span>)' . '</td>
                    <td>|</td>
                    <td>' . 'Code client: <span class="font-semibold">' . $ligne['commande_codeClient'] . '</span></td>
                </tr>
                </button>
                </br>';

                ?>

            <form>

        <?php
        }

}
