<?php
if ( !defined('ABSPATH')) exit;

if(isset($_POST['sup'])){

    $connexion_bdd = algo_login_bdd();

    mysqli_query($connexion_bdd, "DELETE FROM _membres WHERE codeClient IN (".implode(',', array_map('intval', $_POST['sup'])).")");

    echo mysqli_affected_rows($connexion_bdd).' ligne(s) effacée(s).';

  }