<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<algobreizh.jc.aftec@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="/img/logo.png"/>
					<br>
					<u>Prénom de l\'expéditeur :</u>'.$_POST['prenom'].'<br> <br>
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br> <br>
					<br>
					'.nl2br($_POST['message']).'
					<br>
				</div>
			</body>
		</html>
		';

		mail("algobreizh.jc.aftec@gmail.com", "CONTACT - Monsite.com", $message, $header);
        $msg="Votre message a bien été envoyé !";
	}

	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}

?>
