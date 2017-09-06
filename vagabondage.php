<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Photographie vagabondage</title>
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
			$('[data-fancybox]').fancybox({
			image : {
			protect: true
			}
			});
		});
		</script>
	</head>
	<body>
		<div class="global">
			<!--PAGE D'ACCUEIL-->
			
			<?php
			include_once("inc/header.php"); ?>
			<div id="vagabondage" class="gallery_bw">
				<div class="border_logo"><h1>Photographie vagabondage</h1></div>
				<div class="gallerie_colG">
					
					<figure>
						<a data-fancybox="gallery" href="images/v-monteynard-l.jpg" data-caption="Lac du Montaynard">
							
							<img src="images/v-monteynard.jpg" alt="Lac du Montaynard" title="Lac du Montaynard" >
							<figcaption>Paysage - Lac du Montaynard</figcaption>
						</a>
						
					</figure>

						<figure>
						<a data-fancybox="gallery" href="images/v-munich-l.jpg" data-caption="Munich">
							<img src="images/v-munich.jpg" alt="Munich" title="Munich">
							<figcaption>Ville - Munich</figcaption>
						</a>
					</figure>
					
					
				
				
					
					<figure>
						<a data-fancybox="gallery" href="images/v-annecy.jpg" data-caption="Lac d'Annecy">
							<img src="images/v-annecy.jpg" alt="Lac d'Annecy" title="Lac d'Annecy">
							<figcaption>Paysage - Lac d'Annecy</figcaption>
						</a>
					</figure>
						<figure>
					<a data-fancybox="gallery" href="images/v-dolomite-l.jpg" data-caption="Le massif de Dolomite">
						<img src="images/v-dolomite.jpg" alt="Le massif de Dolomite" title="Le massif de Dolomite">
						<figcaption>Paysage - Le massif de Dolomite</figcaption>
						</a>
					</figure>


					
					
					
					
				</div>
				<div class="gallerie_colM">
					<figure>
						<a data-fancybox="gallery" href="images/v-prague.jpg" data-caption="Prague">
							<img src="images/v-prague.jpg" alt="Prague" title="Prague">
							<figcaption>Ville - Prague</figcaption>
						</a>
					</figure>
					
				
					<figure>
						<a data-fancybox="gallery" href="images/v-lausanne-l.jpg" data-caption="Lausanne">
							<img src="images/v-lausanne.jpg" alt="Lausanne" title="Lausanne">
							<figcaption>Ville - Lausanne</figcaption>
						</a>
					</figure>

						<figure>
						<a data-fancybox="gallery" href="images/v-sunset-l.jpg" data-caption="Couchée du soleil">
							<img src="images/v-sunset.jpg" alt="Couchée du soleil" title="Couchée du soleil" >
							<figcaption>Paysage - Couchée du soleil</figcaption>
						</a>
					</figure>
					<figure>
						<a data-fancybox="gallery" href="images/v-foret-l.jpg" data-caption="Forêt">
							<img src="images/v-foret.jpg" alt="Forêt" title="Forêt" >
							<figcaption>Paysage - Forêt</figcaption>
						</a>
					</figure>
					
					
					
					
				</div>
				
				<div class="gallerie_colD">
					<figure>
						<a data-fancybox="gallery" href="images/v-belledonne-l.jpg" data-caption="Le massif de Belledonne">
							<img src="images/v-belledonne.jpg" alt="Le massif de Belledonne" title="Le massif de Belledonne" >
							<figcaption>Paysage - Le massif de Belledonne</figcaption>
						</a>
					</figure>
					
					<figure>
					<a data-fancybox="gallery" href="images/v-paris.jpg" data-caption="Paris">
						<img src="images/v-paris.jpg" alt="Paris" title="Paris" >
						<figcaption>Ville- Paris</figcaption>
						</a>
					</figure>
					<figure>
					<a data-fancybox="gallery" href="images/v-hopper-l.jpg" data-caption="style des peintures d'Edward Hopper">
						<img src="images/v-hopper.jpg" alt="style des peintures d'Edward Hopper" title="style des peintures d'Edward Hopper" >
						<figcaption>Inspiration du style - Les peintures d'Edward Hopper </figcaption>
						</a>
					</figure>
						<figure>
					<a data-fancybox="gallery" href="images/v-lumiere-l.jpg" data-caption="Lumière divine">
						<img src="images/v-lumiere.jpg" alt="Lumière divine" title="Lumière divine">
						<figcaption>Paysage - Lumière divine</figcaption>
						</a>
					</figure>
			
					
				</div>
			</div>
			<div class="bottom_links">
				<div class="lien">
					<a  class="link" href="publicitaire.php">Photographie Publicitaire</a>
				</div>
				<div class="lien">
					<a  class="link" href="architecture.php">Photographie Architecture</a>
				</div>
				<div class="lien">					
					<a  class="link" href="portrait.php">Photographie Portrait</a>
				</div>
			</div>
			<?php include_once("inc/footer.php") ?>
		</div>
	</body>
</html>