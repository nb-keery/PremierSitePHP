<?php include("includes/header.php"); ?>

				<h2>Annonces</h2>

				<br><br>

				<?php 	include ("maison.php"); 

					for ($i=0; $i < count($louer) ; $i++) 
					{ 
						
						echo '<li class="annonce"> 
				                  <a href=" ' . $louer[$i]['url'] . ' "target="_blank" ">  
				                    <img src="img/maison.jpg" id="home">
				                    <div id="ads">
					                    <h3>' . $louer[$i]['title'] . ' </h3>  
					                    <p>Surface : ' .  $louer[$i]['square_m']  . ' m² </p> 
					                    <p>Prix : ' . $louer[$i]['price'] .' €</p> <br><br>
					                    <button id="louer">Louer</button>
				                    </div>
				                  </a> 
				              </li>';
				    }
       			?> 
				<br><br><br>
			
<?php include("includes/footer.php"); ?>