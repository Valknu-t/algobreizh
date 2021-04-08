<?php
if ( !defined('ABSPATH')) exit;

function algo_login_bdd() {

    $BDD = array ();
    $BDD['host'] = "localhost";
    $BDD['user'] = "root";
    $BDD['pass'] = "";
    $BDD ['db'] = "algobreizh";
    $bdd = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
    return $bdd;
}
?>
<?php