<?php 
if(isset($_POST['mailForm'])){
$header = 'MIME-Version:1.0\r\n';
$header.='From:Coralie.com"<damerycoralie@gmail.com>'."\n";
$header.='Content-Type:text/html;charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding:8bit';

$message='
<html>
	<body>
		<div align="center">
			<p>J\'ai envoyé ce mail avec PHP!</p>
			<br>
			<img src="http://memeken.alwaysdata.net/projetMoldu/baguette3.png" alt="baguette">
		</div>
	</body>
</html>
';
mail("coralie2319@hotmail.fr", "test", $message, $header);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mot de passe oublié</title>

</head>
<body>
	<form method="POST" action="">
		<input type="submit" value="Recevoir un mail" name="mailForm">
	</form>
	
</body>
</html>