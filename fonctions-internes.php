<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title></title>
</head>
<body>
	<?php
	$_SERVER['SERVER_NAME'];
	//Manuel seulement ! Internet interdit !
	$fable = "Maître corbeau sur son arbre perché tenait en son bec un fromage";


	//calculez le nombre de caractères dans la chaîne ci-dessus, et stockez-la dans une variable nommée "myStringLength" :
	$myStringLength= strlen($fable);

	//affichez la variable myStringLength
	echo $myStringLength."<br><br>";


	//calculez le nombre de mots dans la phrase précédente, et affichez le
	echo $info = str_word_count($fable, 0, "î");

	//affichez la chaîne toute en majuscule
	echo "<br>".strtoupper($fable)."<br><br>";

	//affichez la chaîne avec seulement la première lettre de la phrase en majuscule
	echo ucfirst($fable)."<br><br>";

	//affichez la chaîne avec la première lettre de chaque mot en majuscule
	echo ucwords($fable)."<br><br>";

	//affichez le 10 premiers caractères de la chaîne
	echo substr($fable, 0, 10)."<br><br>";

	//affichez la chaîne à l'envers (le dernier caractère en premier)
	echo strrev($fable)."<br><br>";

	//remplacez tous les "a" par des "?"
	echo str_replace("a", "?", $fable)."<br><br>";




	//envoyez-vous la chaîne par email, avec la fonction mail()
	mail('navecbatchi@gmail.com', 'Test', $fable);




	//affichez la valeur de pi (π) à l'écran (une fonction existe)
	echo pi()."<br><br>";

	//arrondissez la valeur de pi à 2 décimale, et affichez la
	echo number_format(pi(), 2, ",", " ")."<br><br>";

	//générez un nombre aléatoire entre 10 et 20, et affichez le
	echo rand(10, 20)."<br><br>";




	//stockez tous les mots de la chaîne $fable dans un array nommé "words"
	$words = explode(" ", $fable);

	//affichez le premier mot de votre array
	echo $words[0]."<br><br>";

	//affichez le deuxième mot de votre array
	echo $words[1]."<br><br>";

	//affichez le dernier mot de votre array, sans compter le nombre d'élément (une fonction spécifique existe)
	echo end($words)."<br><br>";

	//essayez la fonction suivante : print_r($words);
	print_r($words)."<br><br>";

	//reformez une chaîne à partir de votre array. Chaque mot doit être recollés avec un "<br />". Stockez cette chaîne dans une variable nommée "fable2"
	for ($i=0; $i <count($words) ; $i++) { 
		$fable2[$i] = $words[$i]."<br>";
	}
	echo "<br><br>".str_replace("<br>", " ",implode(' ', $fable2))."<br><br>";



	//Affichez l'année actuelle
	echo date("Y")."<br><br>";

	//Affichez la date au format suivant : jj/mm/yyyy
	echo date("d/m/Y")."<br><br>";




	//affichez tous les paramètres de configuration de PHP dans votre page (une fonction existe pour ça)
	phpinfo();



	?>
</body>
</html>
