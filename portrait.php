<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Photographie portrait</title>
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
			<div id="portrait">
				<div class="border_logo"><h1>Portrait</h1></div>
				<div class="gallerie_colG">
					
					<figure>
						<a data-fancybox="gallery" href="images/p-su-l.jpg" data-caption="portrait">
							
							<img src="images/p-su.jpg" alt="portrait" title="portrait" >
							<figcaption></figcaption>
						</a>
						
					</figure>
					
					
					<figure>
						<a data-fancybox="gallery" href="images/p-l-l.jpg" data-caption="portrait">
							<img src="images/p-l.jpg" alt="portrait" title="portrait" >
							<figcaption></figcaption>
						</a>
					</figure>
				
					
					<figure>
						<a data-fancybox="gallery" href="images/p-d-l.jpg" data-caption="portrait">
							<img src="images/p-d.jpg" alt="portrait" title="portrait">
							<figcaption></figcaption>
						</a>
					</figure>
						<figure>
					<a data-fancybox="gallery" href="images/p-hai-l.jpg" data-caption="portrait">
						<img src="images/p-hai.jpg" alt="portrait" title="portrait">
						<figcaption></figcaption>
						</a>
					</figure>


					
					
					
					
				</div>
				<div class="gallerie_colM">
					<figure>
						<a data-fancybox="gallery" href="images/p-m-l.jpg" data-caption="portrait">
							<img src="images/p-m.jpg" alt="portrait" title="portrait">
							<figcaption></figcaption>
						</a>
					</figure>
					
					<figure>
						<a data-fancybox="gallery" href="images/p-ce-l.jpg" data-caption="portrait">
							<img src="images/p-ce.jpg" alt="portrait" title="portrait">
							<figcaption></figcaption>
						</a>
					</figure>
				

						<figure>
					<a data-fancybox="gallery" href="images/p-a-l.jpg" data-caption="portrait">
						<img src="images/p-a.jpg" alt="portrait" title="portrait" >
						<figcaption></figcaption>
						</a>
					</figure>
					
					
					
					
					
				</div>
				
				<div class="gallerie_colD">
					<figure>
						<a data-fancybox="gallery" href="images/p-ad-l.jpg" data-caption="portrait">
							<img src="images/p-ad.jpg" alt="publicité de bague" title="portrait" >
							<figcaption></figcaption>
						</a>
					</figure>

					<figure>
						<a data-fancybox="gallery" href="images/p-f-l.jpg" data-caption="portrait">
							<img src="images/p-f.jpg" alt="portrait" title="portrait" >
							<figcaption></figcaption>
						</a>
					</figure>
						<figure>
						<a data-fancybox="gallery" href="images/p-c-l.jpg" data-caption="portrait">
							<img src="images/p-c.jpg" alt="portraitr" title="portrait">
							<figcaption></figcaption>
						</a>
					</figure>
				
				
						<figure>
					<a data-fancybox="gallery" href="images/p-j-l.jpg" data-caption="portrait">
						<img src="images/p-j.jpg" alt="portrait" title="portrait">
						<figcaption></figcaption>
						</a>
					</figure>
			
					
				</div>
				<div class="link">
					
					<a href="publicitaire.php"><p>Photographie Publicitaire</p></a>
					<a href="architecture.php"><p>Photographie Architecture</p></a>
					<a href="vagabondage.php"><p>Photographie Vagabondage</p></a>
				</div>


			</div>
			
			<?php include_once("inc/footer.php") ?>
		</div>
	</body>
</html>