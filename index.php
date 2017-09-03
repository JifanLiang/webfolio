<?php $page="index.php";?>
<!doctype html>
<html>
	<head>


	
		<meta charset="utf-8">
		<title>Jifan Liang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/design.css">
		<!-- Google font : josefin sans-->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Lien vers la librairie-->
		<script src="js/html5.js"></script>
		<script src="js/jQuery3.2.1.js"></script>
		<script src="js/viewport.js"></script>
		<!-- Lien pour loading page-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<script>$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});</script>

			

	</head>


	<body>
		<div class="se-pre-con"></div>
		<div class="global">

		<!--PAGE D'ACCUEIL-->
			<div id="accueil">
				<?php 
					include_once("inc/header.php"); ?>

						<nav id="menu_vertical">
						
							<ul id="vertical">
								<li class="menu_mobile"><a href="<?php if(isset($page) && $page === "index.php"){ echo '#webdesign';} else{ echo 'index.php#webdesign';}?>" title="Portfolio">Portfolio</a></li>
								<li class="menu_mobile"><a href="a_propos.php" title="À propos">À-propos</a></li>
								<li id="der" class="menu_mobile"><a href="contact.php" title="contact">Contact</a></li>
								<li>
									<a href="#webdesign">
										Web-design
									</a>
								</li>
								<li><a href="#graphisme">Design graphique</a></li>
								<li><a href="#photographie">Photographie</a></li>
								
							</ul>
					</nav>
				
			<div class="bandeau">

	
				<div id="scroller">
				<!-- <a  onclick="window.scrollBy(0,window.innerHeight)"> -->
					<a class="js-scrollTo">
					<div class="u-absolute u-fit-w u-pos-bl u-align-center is-active" has-binding="">
					<div class="u-inline-block c-text--regular c-line c-line--from-opacity c-line--3">
						<div class="u-inline-block c-scroll-btn__label">
						Scroller</div>
					</div>
					<br>
					<div class="c-line c-line--from-opacity c-line--4">
						
						<div class="u-inline-block c-scroll-btn__line">
							<div class="c-scroll-btn__inner-line"></div>
						</div>
					</div>
				</div>
				</a>
				</div>


					<div id="logo">
						<img src="images/logo_l.png">
						<p>Je suis <span>Développeuse web</span>, <span>Designer graphique</span> et <span>Photographe</span>. </p>
					</div>
					<video controls autoplay loop>
						<source src="video/beandeau.mp4" type="video/mp4" />
						
						<source src="video/beandeau.ogv" type="video/ogv" />
						<source src="video/beandeau.webm" type="video/webm" />
						
					</video>

					
				</div>


				
				
			</div>
			

			<!--WEB DESIGN-->
			<div id="webdesign">
				<div class="wrap">
					<div class="colG">
						<p class="nombre">01</p>
						<article>
							<h1>
							Développement Web
							</h1>
							
							<p>Ayant découvert le code et sa magie depuis un an, je suis impressionnée et passionnée par le monde informatique. Jonglant entre HTML 5, CSS 3 et JavaScript, je maîtrise l’intégration et la création de sites web, CMS ( Wordpress)… Je vous invite à regarder les projets que j’ai réalisés récemment. 
							<br />
							<br />Pour le site dynamique de <strong>Nervures</strong>, j'ai réalisé la migration et gestion de contenu, amélioré l'ergonomie générale et le référencement afin d'offrir une meilleure navigation sur le site aux clients fidèles.
							<strong>Webfolio</strong> est la réalisation de mon propre site web, afin de montrer mon savoir faire et mes compétences. Le code Less est compilé vers du CSS pour un développement plus lisible, un meilleur rendu multi-plateforme et de l'optimisation de poids de page.</p>
						</article>
						
					</div>

					<!-- PROJET 1 -->
					<div class="colD">
						<div class="conteneur_o">
							<a href="nervures.php">
								<div class="images_o">
									<p class="legende">Voir le projet</p>
									
								</div>
							</a>
						</div>
						<a href="nervures.php"><p class="text"><span>Nervures</span>, création de site e-commerce. </p></a>
						
						
					</div>
					<!-- PROJET 2 -->

					<div id="webdesign2" class="colG">
					<div class="conteneur_o">
						<a href="#">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="#"><p class="text"><span>Webfolio</span>, création de site statique. </p></a>
					
				</div>
				</div>
				
			</div>



			<!--DESIGN GRAPHIQUE-->
			<div id="graphisme">
				<div class="wrap">
					<div class="colD">
						<p class="nombre">02</p>
						<article>
							<h1>
							Design Graphique
							</h1>
							
							<p>Logos, affiches d'évènements, impression, identités visuelles, clips vidéos... Le monde de l'image et de la création graphique est un univers sans fin, dans lequel je sais comment et où aller, quelque soit le projet à mettre en oeuvre! Vous trouverez ici des exemples réalisés sous Photoshop, InDesign, Illustrator ou encore Premiere.</p>
						</article>
						
					</div>
					<div class="colG">
						<div class="conteneur_v">
							<a href="a_global_matter.php">
								<div class="images_v">
									<p class="legende">Voir le projet</p>
									
								</div>
							</a>
						</div>
						<a href="#"><p class="text"><span>Affiches</span></p></a>
						
						
					</div>
				</div>
				
			
			
				<div id="graphisme2" class="colD">
					<div class="conteneur_o">
						<a href="#">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="#"><p class="text"><span>Logos</span></p></a>
					
				</div>
				<div id="graphisme3" class="colG">
					<div class="conteneur_o">
						<a href="#">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="#"><p class="text"><span>Motifs</span></p></a>
					
					
				</div>


				<div id="graphisme4" class="colD">
				<div class="conteneur_v">
							<a href="a_global_matter.php">
								<div class="images_v">
									<p class="legende">Voir le projet</p>
									
								</div>
							</a>
						</div>
						<a href="#"><p class="text"><span>Data design</span></p></a>
					
					
				</div>
		</div>
					
					<!--PAGE PHOTOGRAPHIE -->
					<!--PRESENTATION -->

			<div id="photographie">
				<div class="wrap">
					<div class="colG">
						<p class="nombre">03</p>
						<article>
							<h1>
							Photographie
							</h1>
							
							<p>Après plusieurs années d’expérience dans le cinéma et le documentaire, et avoir parcouru les festival de Cannes et de Venise, j’ai acquis un regard critique et profond. Quand je travaille pour mes photos, un pensée analytique me guide sur les différents aspects de la photographie tels que le cadrage, la composition, la couleur et le contaste. J'aime surtout travailler l'aspect narratif de la photographie, je souhaite raconter toute une histoire à travers une seule image. </p>
						</article>
						
					</div>
					<!-- PROJET 1-->


					<div id="photographie1" class="colD">

					<div  class="conteneur_o">
						<a href="publicitaire.php">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="#"><p class="text"><span>Publicitaire</span>, photographie pour de la pâtisserie, du prêt-à-porter, des bijoux...</p></a>
					
				</div>

			

				<div id="photographie3" class="colG">

					<div  class="conteneur_o">
						<a href="architecture.php">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="architecture.php"><p class="text"><span>Architecture</span>, photographie pour des architectes et de l'immobilier...</p></a>
					
				</div>

					<div id="photographie2" class="colD">
					<div class="conteneur_v">
						<a href="portrait.php">
							<div class="images_v">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="portrait.php"><p class="text"><span>Portrait</span>, photographie de portraits professionels, personnels... </p></a>
					
					
				</div>

						<div id="photographie4" class="colG">

					<div  class="conteneur_o">
						<a href="vagabondage.php">
							<div class="images_o">
								<p class="legende">Voir le projet</p>
								
							</div>
						</a>
					</div>
					<a href="vagabondage.php"><p class="text"><span>Vagabondage</span>, photographie de paysages, villes, 	...</p></a>
					
				</div>
						
						
				</div>
				</div>
				
		
			


			<?php include_once("inc/footer.php") ?>
			

		</div>

		<script>
			$(function(){

				var identifiant;

				$("#menu_vertical a").click(function(event) {

				//Déactiver l'effet de flash en annulant l'ancre 
				event.preventDefault();
				//Je récupère l'id de la div jusqu'à laquelle descendre
				identifiant = $(this).attr('href');
				//J'emmène la barre de scroll verticale
				//Jusqu'à cette destination
				$("html,body").animate({
					scrollTop:$(identifiant).offset().top
				},3000);

				});

					//$("#scroller a").click(function(event) {

				//Déactiver l'effet de flash en annulant l'ancre 
				//event.preventDefault();
				//Je récupère l'id de la div jusqu'à laquelle descendre
				//identifiant = $(this).attr('href');
				//J'emmène la barre de scroll verticale
				//Jusqu'à cette destination
				//$("html,body").animate({
				//	scrollTop:$(identifiant).offset().top
				//},2000);

				//});


				$("#ancrage a").click(function(event) {

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
			

			$(document).scroll(function () {
    			var $menu_vertical = $("#menu_vertical:after");
    			var $bandeau = $(".bandeau");
    			$menu_vertical.toggleClass('navbar-not-transparent', $(this).scrollTop() > $bandeau.height()-1);

			  $('.conteneur_o,.conteneur_v').each(function(i, element) {
			    var el = $(element);
			    if (el.visible(true)) {
			      el.addClass("come-in"); 
			    } 
			  });

			});


			$(document).ready(function() {
					$('.js-scrollTo').on('click', function() { 
						// on prend la distance actuelle du scroller jusqu'en haut de page, et on ajoute la taille du scroller
						var goTo = $(this).offset().top + $(this).innerHeight();
						var speed = 750; 
						$('html, body').animate( { scrollTop: goTo }, speed ); 
						return false;
					});
				});

			</script>

		
	</body>
</html>