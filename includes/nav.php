<nav>
	<ul>
		<li class="<?php echo basename($_SERVER['REQUEST_URI']) == 'index.php' || basename($_SERVER['REQUEST_URI']) == 'Maison' ? 'actif' : ''; ?>">
			<a href="index.php">
				Accueil
			</a>
		</li>
		<li class="<?php echo basename($_SERVER['REQUEST_URI']) == 'annonces.php' ? 'actif' : ''; ?>">
			<a href="annonces.php">
				Acheter
			</a>
		</li>
		<li class="<?php 
		 	$url = $_SERVER['REQUEST_URI'];
		    $page = explode("/", $url);
		    $nav = end($page);

		    if ($nav == 'louer.php') {
		       	echo "actif";
		    }else {
		    	echo " "; 
		    } ?>">
		   	<a href="louer.php">
		   		Louer
		   	</a>
		</li>
						<li class="<?php 
																 	$url = $_SERVER['REQUEST_URI'];
															        $page = explode("/", $url);
															        $nav = end($page);

															        if ($nav == 'contact.php') {
															        	echo "actif";
															        }

															        else {
															        	echo " "; } ?>"><a href="contact.php">Contact</a></li>
					</ul>
</nav>