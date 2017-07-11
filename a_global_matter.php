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
		<link  href="css/jquery.fancybox.min.css" rel="stylesheet">
		<!-- Lien vers la librairie-->
		<script src="js/html5.js"></script>
		<script src="js/jQuery3.2.1.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>


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


				$('[data-fancybox]').fancybox({
			image : {
			protect: true
			}
			});
				
			});
		
		
		</script>
	</head>
	<body>
		<?php include_once("inc/header.php"); ?>
		<div class="a_global_matter">
			
			<div class="colG">
				<div class="border_logo"><h1>Affiche : A Global Matter</h1></div>

				<div class="bloc_text">
				<p class="text_standard"><span class="categorie">Client :</span> Projet école</p>
				<p class="text_standard"><span class="categorie">Logiciel :</span> Photoshop, Illustrator, Indesign</p>
				<p class="text_standard"><span class="categorie">Origine du projet:</span><br>
			Création d'une affiche de la conférence au sujet d' "A Global Matter" en format A3 et 300dpi, avec un montage photos des animaux et les informations essentiels de la conférence.</p>
			
			<div class="scroller">

					<div class="u-absolute u-fit-w u-pos-bl u-align-center is-active" has-binding="">
					<a href="#a_global_matter2"><div class="btn">+</div></a>
				
					
				</div>

				
				</div>


			</div>
			
		</div>
		
		<div class="colD">
			
		</div>

		<div id="a_global_matter2" class="wrap">
		<div class="bloc_text">

			<p class="categorie">Analyse de projet :</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<div id="pal_1" class="palette"></div>
			<div id="pal_2" class="palette"></div>
	



			</div>
				<a href="#a_global_matter3"><div class="btn">+</div></a>
				


		</div>

		<div id="a_global_matter3" class="wrap">
		
		
		<div class="bloc_images">

			<div class="titre_planche"><span class="categorie">Planche de tendence :</span></div>

			<div class="planche_col">
					
					<figure>
						
							
							<img src="images/ins01.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					<figure>	
							<img src="images/ins02.jpg" alt="planche 2" title="planche 2" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					
			</div>
				
				<div class="planche_col">

				<figure>
							<img src="images/ins03.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
				
					<figure>
						
							
							<img src="images/ins08.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
				

			</div>
				
				<div class="planche_col">
					<figure>
						
							
							<img src="images/ins07.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 7- TangYauHoong.com</figcaption>
						</a>
						
					</figure>
					<figure>
						
							
							<img src="images/ins06.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					
				</div>

			<div class="planche_col">
					<figure>
						
							
							<img src="images/ins05.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
				
					<figure>
						
							
							<img src="images/ins04.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
				
				</div>


		
		</div>
		<a href="#a_global_matter4"><div class="btn">+</div></a>

		</div>
		<div id="a_global_matter4" class="wrap">
		
		
		<div class="bloc_images">

			<div class="titre_planche"><span class="categorie">Pistes créatives :</span></div>

			<div class="planche_col">
					
					<figure>
						
							
							<img src="images/piste01.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					<!--
					<figure>	
							<img src="images/piste03.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					-->
					
			</div>
				
				<div class="planche_col">
			

				<figure>
							<img src="images/piste03.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>

					<figure>
						
							
							<img src="images/piste04.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>

			</div>
				
				<div class="planche_col">
					<figure>
						
							
							<img src="images/piste05.jpg" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					<figure>
						
							
							<img src="images/pist06.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					
				</div>

			<div class="planche_col">
					<figure>
						
							
							<img src="images/piste07.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					<figure>
						
							
							<img src="images/piste08.png" alt="planche 1" title="planche 1" >
							<figcaption>Inspiration 1- www.jifan.com</figcaption>
						</a>
						
					</figure>
					
				</div>


		
		</div>
		<a href="#a_global_matter5"><div class="btn">+</div></a>

		</div>
		
		<div id="a_global_matter5" class="wrap">
		
		
		<div class="bloc_images">

			<div class="titre_planche"><span class="categorie">D'autres créations d'affiche :</span></div>

			<div class="gallerie_colG">
					
					<figure>
						<a data-fancybox="gallery" href="images/10.jpg" data-caption="affiche vintage">
							
							<img src="images/10.png" alt="affiche vintage" title="affiche vintage" >
							<figcaption>Affiche vintage</figcaption>
						</a>
						
					</figure>
					
				
			</div>
				
				<div class="gallerie_colM">
				<figure>
						<a data-fancybox="gallery" href="images/affiche-casque.jpg" data-caption="Affiche publicitaire">
							<img src="images/affiche-casque.jpg" alt="Affiche publicitaire" title="Affiche publicitaire" >
							<figcaption>Affiche publicitaire - Émotions sucrées</figcaption>
						</a>
					</figure>
					
					
			</div>
				
				<div class="gallerie_colD">
					<figure>
						<a data-fancybox="gallery" href="images/13.png" data-caption="affiche cinéma">
							<img src="images/13.png" alt="affiche cinéma" title="affiche cinéma">
							<figcaption>Affiche cinéma</figcaption>
						</a>
					</figure>
					
				</div>

		
		</div>
		
		<?php include_once("inc/footer.php") ?>

		</div>


		
		
	</div>
	
</body>
</html>