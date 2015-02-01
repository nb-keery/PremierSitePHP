<?php include("includes/header.php"); ?>

				<h2>Annonces</h2>

				<br><br>

				<?php include ("maison.php"); 

				for ($i=0; $i < count($acheter) ; $i++) 
					{ 
						echo  '<li class="annonce"> 
			                  <a href=" ' . $acheter[$i]['url'] . ' target="_blank" >  
			                    <img src="img/maison.jpg" id="home">
			                    <div id="ads"> 
				                    <h3>' . $acheter[$i]['title'] . ' </h3> 
				                    <p>Surface : ' .  $acheter[$i]['square_m']  . ' m² </p> 
				                    <p>Prix : ' . $acheter[$i]['price'] .' €</p> <br><br>
				                    <button id="acheter">Acheter</button>
			                    </div>
			                  </a> 
			              </li>';
			        }
			    ?>
				<br><br><br>
			
<?php include("includes/footer.php"); ?>