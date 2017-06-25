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
						<nav id="menu_vertical">
							<h1><a href="index.php">Jifan Liang</a></h1>
							<ul id="vertical">
								<li class="menu_mobile"><a href="index.php" title="Portfolio">Portfolio</a></li>
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
						
						<ul id="menu">
							<li><a href="index.php" title="Portfolio">Portfolio</a></li>
							<li><a href="a_propos.php" title="À propos">À-propos</a></li>
							<li id="der"><a href="contact.php" title="contact">Contact</a></li>
						</ul>
					</nav>
	</header>