<?php
if ( !defined('ABSPATH')) exit;

function algo_send_mail($mdp, $email, $codeClient) {

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.sendgrid.com/v3/mail/send',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
       "from":{
          "email":"dev@jefflabillois.com"
       },
       "personalizations":[
          {
             "to":[
                {
                   "email": "'.$email.'"
                }
             ],
             "dynamic_template_data":{
                "mdp": "'.$mdp.'"
                "code": "'.$codeClient.'"
              }
          }
       ],
       "template_id":"d-87e7cd0b1e944709bbad8e91f36ca3bb"
    }',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}