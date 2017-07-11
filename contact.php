<?php 
	$destinataire ="liang.jifan@gmail.com";

	if(isset($_POST["go"])){
		

		$prenom=htmlspecialchars(strip_tags(trim($_POST["prenom"])));
		$mail=htmlspecialchars(strip_tags(trim($_POST["mail"])));
		$objet=htmlspecialchars(strip_tags(trim($_POST["objet"])));
		$message=htmlspecialchars(strip_tags(trim($_POST["message"])));



		$ok=true;


	if(empty($prenom)){
		$erreur1 = "Nom obligatoire";
		$ok = false;
		
	}

	if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		$erreur2 = "Adresse mail obligatoire";
		$ok = false;
	
	}
	if(empty($message)){
		$erreur3="Message obligatoire";
		$ok = false;

	}

	if($ok){
		$pattern = array(
			"@"=>"[AT]",
			"\n"=>"",
			"\r"=>""
			);

		$prenom = strtr($prenom,$pattern);
		$objet = strtr($objet,$pattern);
		$message = strtr($message, $pattern);

		$corps = "<h1>Mail reçu par mon site webfolio";
		$corps .= "<h2>Nom<h2>";
		$corps .= "<p>".$prenom."</p>";
		$corps .= "<h2>message</p>";
		$corps .= "<div>".$message."</div>";

		$tete = "From:".$mail."\n";
		$tete .= "MIME=Version: 1.0\n";
		$tete .= "Content-Type: text/html; charset=utf-8\n";
		$tete .= "Content-Transfet-Encoding: 8bit\n";
		$tete .= "Objet:".$objet; 

		if(mail($destinataire, $objet, $corps, $tete)){
			$retour = "Message correctement envoyé";
			$class  = "sucdess";
		}else{
			$retour ="Problème de l'envoi du message, veuillez essayer plus tard";
			$class ="warning";
		}



	}



}


 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/design.css">

<!-- Google font : josefin sans-->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- Lien vers la librairie-->
<script src="js/html5.js"></script>
<script src="js/jQuery3.2.1.js"></script>

<script>$(document).ready(function() {

    var div = $("#contact .colG");

    var height = div.css({
        display: "block"
    }).height();

    div.css({
        overflow: "hidden",
        marginTop: height,
        height: 0
    }).animate({
        marginTop: 0,
        height: height
    }, 1000, function () {
        $(this).css({
            display: "",
            overflow: "",
            height: "",
            marginTop: ""
        });
    });

    $('#contact .colD').slideDown(1000);
});

</script>
</head>

<body>

<div class="global">

	<?php include_once("inc/header.php"); ?>

<div id="contact">
<div class="colD">

<div class="contenant">

	<div class="border_logo"><h2>Contact</h2></div>
<form action="contact.php" method="post">

<p>
	<label for="prenom" class="label categorie">Votre nom * : </label>
	<input type="text" name="prenom" id="prenom" class="champ" placeholder="Paul"
	<?php if(isset($prenom)) echo "value=\"".$prenom."\"";
	?>>

	<?php if(isset($erreur1)) echo "<span class=\"warning\">$erreur1</span>";
	?>

</p>
<p>
	<label for="mail" class="label categorie">Votre adress mail * : </label>
	<input type="text" name="mail" id="mail" class="champ" placeholder="Paul@exemple.com"
	<?php if(isset($prenom)) echo "value=\"".$mail."\"";
	?>>
	

	<?php if(isset($erreur2)) echo "<span class=\"warning\">$erreur2</span>";
	?>

</p>
<p>
	<label for="objet" class="label categorie">Objet : </label>
	<input type="text" name="objet" id="objet" class="champ" placeholder="recrutement"
	<?php if(isset($objet)) echo "value=\"".$objet."\"";
	?>>

</p>

<p>
	<label for="message" class="label categorie">Votre message * : </label>
	<textarea name="message" id="message" cols="50" rows="10" class="champ" placeholder="Bonjour Jifan, "
	 <?php if(isset($message)) echo "value=\"".$message."\"";
	?>>
		
	</textarea> 
	<?php if(isset($erreur3)) echo "<span class=\"warning\">$erreur3</span>";
	?>

</p>

<input type="submit" name="go" id="go">

</form>

	
</div>

</div>
<div class="colG">
	<div id="grenoble">
		
	</div>
	
</div>
 <?php include_once("inc/footer.php") ?>
</div>
</div>
</body>
</html>
