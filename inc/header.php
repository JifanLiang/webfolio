	<header>
		<div id="logo_s">
			<a href="<?php if(isset($page) && $page === "index.php"){ echo '#Portfolio';} else{ echo 'index.php';}?>" title="Portfolio"><img src="images/logo-s.png"></a>

		</div>
		<nav id="main_menu">
			<ul id="menu">
				<li><a href="<?php if(isset($page) && $page === "index.php"){ echo '#webdesign';} else{ echo 'index.php#webdesign';}?>" title="Portfolio">Portfolio</a></li>
				<li><a href="a_propos.php" title="A Propos">A propos</a></li>
				<li><a href="contact.php" title="Contact">Contact</a></li>
				


			</ul>
		</nav>
	</header>