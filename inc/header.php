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

		<div id="logo_s">
			<a href="<?php if(isset($page) && $page === "index.php"){ echo '#Portfolio';} else{ echo 'index.php';}?>" title="Portfolio"><img src="images/logo-s.png"></a>

		</div>

		<nav id="main_menu" class="navbar navbar-default navbar-fixed-top navbar-color-on-scroll navbar-transparent">
			<ul id="menu">
				<li><a href="<?php if(isset($page) && $page === "index.php"){ echo '#webdesign';} else{ echo 'index.php#webdesign';}?>" title="Portfolio">Portfolio</a></li>
				<li><a href="a_propos.php" title="A Propos">A propos</a></li>
				<li><a href="contact.php" title="Contact">Contact</a></li>
				



			</ul>
		</nav>
	</header>