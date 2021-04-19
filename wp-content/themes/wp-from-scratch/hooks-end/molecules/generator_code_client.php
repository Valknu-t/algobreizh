<?php
if ( !defined('ABSPATH')) exit;

function generator_code_client(){

    $codeClient = random_int(0,9999);
    $connexionBDD = algo_login_bdd();

    // var_dump($codeClient);

?>
    <body>

        <div class="justify-start text-white text-3xl ">

            <form action="#" method="GET">

                <div>
                    <input type="submit" id="id_createClient" name="createClient" value="Create code client" class="cursor-pointer opa-75 shadow-md text-white bg-lightgreen hover:bg-darkgreenab px-12 py-2 rounded-md text-base ml-22">
                </div>

            </form>

        </div>

    </body>

<?php

    if (isset($_GET['createClient'])) {

        $query_code = mysqli_query ($connexionBDD, "SELECT * FROM _membres WHERE codeClient='".$codeClient."'");
        $query_row_code = mysqli_num_rows ($query_code);

        if($query_row_code == 1) {
            $codeClient = random_int(0,9999);
            echo 'Le code client générer est le suivant : '.$codeClient;

        }
        else{
            echo 'Le code client générer est le suivant : '.$codeClient;


        }
    }
}
?>

