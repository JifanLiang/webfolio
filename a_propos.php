<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>À propos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/design.css">
		<!-- Google font : josefin sans-->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Lien vers la librairie-->
		<script src="js/html5.js"></script>
		<script src="js/jQuery3.2.1.js"></script>
<!-- Lien pour loading page-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<script>$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});</script>

	

			
	</head>
	<body>
	<div class="global">

		<?php include_once("inc/header.php"); ?>
	
	<div id="a_propos">
		<div  class="colG">
			<div class="border_logo"><h2>À propos</h2></div>

			<div class="paragraphe">

			<a href="pdf/cv_Liang_Jifan.pdf" target="_blank" alt="mon cv en pdf"><p>Pour connaître mon parcours, vous pouvez télécharger mon<span class="categorie underline"> CV en PDF</span>;</p></a>

			<p> D'ailleurs, si vous avez 1 minute maintenant, vous pouvez aussi regarder mon <a href="#cv_animate" id="link_to_cv"><span class="categorie underline">CV en motion design.</span></a>
</p> 
			</div>
	
		</div>
		
		<div id="autoportrait" class="colD">
			
			
		</div>
	</div>

	<div id="cv_animate">


			 <video controls >
			<source src="video/cv-jifan.mp4" type="video/mp4" />
			
			<source src="video/movie.ogv" type="video/ogv" />
			<source src="video/movie.webm" type="video/webm" />
			
			</video>
		
<?php include_once("inc/footer.php") ?>
		</div>




		</div>
		</div>
<script>
			$(function(){

				var identifiant;

				$("#link_to_cv").click(function(event) {

				//Déactiver l'effet de flash en annulant l'ancre 
				event.preventDefault();
				//Je récupère l'id de la div jusqu'à laquelle descendre
				identifiant = $(this).attr('href');
				//J'emmène la barre de scroll verticale
				//Jusqu'à cette destination
				$("html,body").animate({
					scrollTop:$(identifiant).offset().top
				},1000);

				});
				
			});
			
			</script>
			<script>
			$(document).ready(function() {

			    var div = $("#a_propos .colG");

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

			    $('#a_propos .colD').slideDown(1000);
			});
			</script>



	</body>
</html>
