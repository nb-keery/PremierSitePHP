


	<?php
		// affichez "hello world" avec un echo
		echo "<p>hello world</p>";
	

	
	
		//créer une variable nommée "salutation", assignez lui une valeur de "bonjour", et affichez la valeur de cette variable
		$salutation = "bonjour";
		echo $salutation."</br></br>";
	

	
	
	
		//additionnez 22390 + 9995193 et stockez le résultat dans une variable nommée "resultat"
		$addition = 22390 + 9995193;
		$resultat = $addition;
		echo $addition."</br></br>";
		
		
	

	
	
	
			//soustrayez 4992 à "resultat", et affichez la valeur de variable
		$chiffre3 = 4992;
		echo $resultat - $chiffre3 . ' </br> ';
		echo substr($resultat, 0, 2). ' </br> ' ;
		
	

		
		
		//affichez les seulement les deux premiers chiffres de ce résultat
	
		
		
	
		//créer un array nommé "prenoms", et ajoutez y des prénoms de personnes.
		$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		
		//affichez tous ces prénoms avec une boucle for
		for($numero = 0; $numero < 3; $numero++)
		{
		echo '<p>' . $prenoms[$numero] . '</p><br/>';
		}
	

		
		
	
		$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		//idem, avec une boucle foreach
		
		foreach($prenoms as $key => $prenom)
		{
		echo '<p>'.$key.' = '. $prenom . '</p>';
		}
	

		

		$prenoms = Array('Guillaume', 'Gaël', 'Julien');
		//idem, avec une boucle while.
		$ligne = 0;
		
		count ($prenoms);
		while($ligne < count($prenoms))
		{
		echo '<p>' . $prenoms[$ligne] . '</p>';
		$ligne++;
		}
		
	


	
		$prenoms = Array('prenom' => 'Guillaume', 'age' => '19', 'sexe' => 'homme'); Array('prenom' => 'Gaël', 'age' => '42', 'sexe' => 'hommme'); Array('prenom' => 'Julien', 'age' =>'8', 'sexe' => 'femme');
				
				print_r ($prenoms);
		//recréez le même array, mais ajoutez, pour chaque étudiant, un âge et un sexe
		
		
		//for($personne=0; $personne <3; $personne++)
		//{
		//echo '<p>' . $prenoms[$personne] . '</p>';
//}
		

		
		
		// ! PAS REUSSI !
		//affichez avec une boucle for le nom et le sexe de chaque étudiant

		// ! PAS REUSSI !
		//même exercice, mais cette fois, le nom doit être affiché dans un h1, le sexe dans un span et l'âge dans un p  

	?>