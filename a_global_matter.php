<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>A Global Matter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/design.css">
		<!-- Google font : josefin sans-->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Lien vers la librairie-->
		<script src="js/html5.js"></script>
		<script src="js/jQuery3.2.1.js"></script>


				<script>
			$(function(){

				var identifiant;

				$(".a_global_matter a").click(function(event) {

				//Déactiver l'effet de flash en annulant l'ancre 
				event.preventDefault();
				//Je récupère l'id de la div jusqu'à laquelle descendre
				identifiant = $(this).attr('href');
				//J'emmène la barre de scroll verticale
				//Jusqu'à cette destination
				$("html,body").animate({
					scrollTop:$(identifiant).offset().top
				},2000);

				});
				
			});
		
		
		</script>
	</head>
	<body>
		<?php include_once("inc/header.php"); ?>
		<div class="a_global_matter">
			
			<div class="colG">
				<h1>Affiche : A Global Matter</h1>
				<p><span class="categorie">Client :</span> Projet école</p>
				<p><span class="categorie">Logiciel :</span> Photoshop, Illustrator, Indesign</p>
				<p><span class="categorie">Origine du projet:</span><br>
			Création d'une affiche de la conférence au sujet d' "A Global Matter" en format A3 et 300dpi, avec un montage photos des animaux et les informations essentiels de la conférence.</p>
			<div id="scroller">

					<div class="u-absolute u-fit-w u-pos-bl u-align-center is-active" has-binding="">
					<a href="#a_global_matter2"><div class="btn">+</div></a>
				
					<div class="c-line c-line--from-opacity c-line--4">
						
						<div class="u-inline-block c-scroll-btn__line">
							<div class="c-scroll-btn__inner-line"></div>
						</div>
					</div>
				</div>

				
				</div>



			
		</div>
		
		<div class="colD">
			
		</div>

		<div id="a_global_matter2" class="wrap">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
		
		
	</div>
	
</body>
</html>