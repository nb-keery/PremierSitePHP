
</section>
<br><br>
<footer>
				<div class="foot">
					<h3 class="fitre">Menu</h3>
					<ul id="foot1">
						<li><a href="index.php">○ Accueil</a></li>
						<li><a href="annonces.php">○ Acheter</a></li>
						<li><a href="louer.php">○ Louer</a></li>
						<li><a href="contact.php">○ Contact</a></li>
					</ul>
				</div>
				<div class="foot">
					<h3 class="fitre">Réseaux sociaux</h3>
					<ul>
						<li><img src="img/rss.png" width="35"></li>
						<li><img src="img/facebook.png" width="35"></li>
						<li><img src="img/twitter.png" width="35"></li>
						<li><img src="img/google.png" width="35"></li>
					</ul>

				</div>
				<div id="foot3">
						<p>Copyright © 2014 Esnault Guillaume - Tous droits réservés</p>
						<div id="date">
						<?php 
						setlocale(LC_ALL, 'FRA');
						$date = strftime("%A %d %B %Y");  
						echo ucfirst($date); // attention a l'encodage

						?>
						</div>
				</div>
</footer>
	
	</body>
</html>