


	<?php
		// affichez "hello world" avec un echo
		echo "<p>hello world</p>";
	?>
	
	<?php
		//créer une variable nommée "salutation", assignez lui une valeur de "bonjour", et affichez la valeur de cette variable
		$salutation = "bonjour";
		echo "$salutation";
	?>
	</br></br>
	
	<?php
		//additionnez 22390 + 9995193 et stockez le résultat dans une variable nommée "resultat"
		$addition = 22390 + 9995193;
		$resultat = $addition;
		echo "$addition";
		
		
	?>
	</br></br>
	
	<?php
			//soustrayez 4992 à "resultat", et affichez la valeur de variable
		$chiffre3 = 4992;
		echo $resultat - $chiffre3;
		
	?>
		
		
		//affichez les seulement les deux premiers chiffres de ce résultat
		! Pas reussi !
		
		
	<?php
		//créer un array nommé "prenoms", et ajoutez y des prénoms de personnes.
		$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		
		//affichez tous ces prénoms avec une boucle for
		for($numero = 0; $numero < 3; $numero++)
		{
		echo '<p>' . $prenoms[$numero] . '</p>';
		}
	?>
		
		
		<?php
		$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		//idem, avec une boucle foreach
		
		foreach($prenoms as $prenom)
		{
		echo '<p>' . $prenom . '</p>';
		}
	?>
		

		<?php// ! PAS REUSSI !
		//$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		//idem, avec une boucle while.
		//$ligne = 0;
		
		//while($ligne)
		//{
		//echo '<p>' . $prenoms[$ligne] . '</p>';
		//}
		//$ligne++;
	?>

	<?php ! PAS REUSSI !
		$prenoms = Array('prenom' => 'Guillaume', 'age' => '19', 'sexe' => 'homme',
						 'prenom' => 'Gaël', 'age' => '42', 'sexe' => 'hommme',
						 'prenom' => 'Julien', 'age' =>'8', 'sexe' => 'femme');
		//recréez le même array, mais ajoutez, pour chaque étudiant, un âge et un sexe
		
		
		for($personne=0; $personne <3; $personne++)
		{
		echo '<p>' . $prenoms[$personne] . '</p>';
		}
		?>
		
		
		! PAS REUSSI !
		//affichez avec une boucle for le nom et le sexe de chaque étudiant

		! PAS REUSSI !
		//même exercice, mais cette fois, le nom doit être affiché dans un h1, le sexe dans un span et l'âge dans un p  