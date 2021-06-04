<?php
if ( !defined('ABSPATH')) exit;

function affichage_client(){

    $connexion_bdd = algo_login_bdd();

    // $connexion_bdd -> set_charset("utf8");

    $requete = "SELECT codeClient, email, prospecteur FROM _membres";
    $resultat = $connexion_bdd -> query($requete);

    // $cmd_supprimer = "DELETE FROM _membres WHERE codeClient = '".$codeClient."'";
    // $prepa_supprimer = $connexion_bdd->prepare($cmd_supprimer);

    // function estClient($ligneGrade){
    //     if($ligneGrade == 1){
    //         ?>
    <!-- //             <input type="checkbox" id="checkGrade" name="checkGrade" checked> -->
             <?php
    //     } else{
    //         ?>
    <!-- //             <input type="checkbox" id="checkGrade" name="checkGrade"> -->
             <?php
    //     }
    // }

    // while ($ligne = $resultat -> fetch_assoc()) {

    //     $codeClient = $ligne['codeClient'];

    //     // var_dump($ligne['codeClient']);

    //     $cmd_supprimer = "DELETE FROM _membres WHERE codeClient = '".$codeClient."'";
    //     $prepa_supprimer = $connexion_bdd->prepare($cmd_supprimer);
    //     $supprimer = $prepa_supprimer->execute();

    //     settype($ligne['grade'], "int");
    //     echo $ligne['codeClient'] . ' ' . $ligne['email'] . ' '.' <a class="font-semibold text-red-900 hover:text-red-700 hover:underline" href="'. $supprimer .'"> Supprimer</a>' . '<br>';

    // }

    echo '<form action="supress.php" method="post"><table border="1"><tr><th>Code Client</th><th>Email</th><th>Suppression</th></tr>';
    while($ligne = $resultat -> fetch_assoc()){
  echo '<tr>
  <td>'.$ligne['codeClient'].'</td>
  <td>'.$ligne['email'].'</td>
  <td><input type="checkbox" name="sup[]" value="'.$ligne['codeClient'].'" /></td>
  </tr>';
}
echo '<tr><td></td><td></td><td><input type="submit" value="Supprimer" /></th><tr></table></form>';



}
