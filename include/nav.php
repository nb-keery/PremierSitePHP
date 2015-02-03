<nav>
	<ul>
		<li class="<?php echo $titre == 'index.php' || $titre == 'Annonces' ? "actif" : " " ; ?>"><a href="index.php">Accueil</a></li>
		<li class="<?php echo $titre == 'annonces.php' ? "actif" : " " ; ?>"><a href="annonces.php">Acheter</a></li>
		<li class="<?php echo $titre == 'louer.php' ? "actif" : " " ; ?>"><a href="louer.php">Louer</a></li>
		<li class="<?php echo $titre == 'contact.php' ? "actif" : " " ; ?>"><a href="contact.php">Contact</a></li>
	</ul>
</nav>