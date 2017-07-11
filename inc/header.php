<script>
$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    var $bandeau = $(".bandeau");
    $nav.toggleClass('navbar-not-transparent', $(this).scrollTop() > $bandeau.height()-1);
  });
});
</script>
<header>
					<nav id="main_menu" class="navbar navbar-default navbar-fixed-top navbar-color-on-scroll navbar-transparent">

						<div id="logo_s">
							<a href="<?php if(isset($page) && $page === "index.php"){ echo '#accueil';} else{ echo 'index.php#accueil';}?>"><img src="images/logo-s.png"></a>
						</div>
						
						<ul id="menu">
							<li id="ancrage"><a href="<?php if(isset($page) && $page === "index.php"){ echo '#webdesign';} else{ echo 'index.php#webdesign';}?>" title="Portfolio">Portfolio</a></li>
							<li><a href="a_propos.php" title="À propos">À-propos</a></li>
							<li id="der"><a href="contact.php" title="contact">Contact</a></li>
						</ul>
					</nav>



				
	</header>
<!--	<nav id="main_menu">
		<div id="logo_s">
			<a href="index.php">
				<img src="images/logo-s.png">
			</a>
		</div>
		
	<ul id="menu">
			
		<li id="ancrage"><a href="<?php //if(isset($page) && $page === "index.php"){ echo '#webdesign';} else{ echo 'index.php#webdesign';}?>" title="Portfolio">Portfolio</a>
			
		</li>

		<li><a href="a_propos.php" title="À propos">À-propos</a></li>
		<li id="der"><a href="contact.php" title="contact">Contact</a></li>
	</ul>



	<!--<ul>
				<li>
					<a href="#webdesign">Web-design</a>
				</li>
				<li><a href="#graphisme">Design graphique</a></li>
				<li><a href="#photographie">Photographie</a></li>
				
			</ul>
</nav>
</header>-->

