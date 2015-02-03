
<?php 
	// Lien de la page
	$titre = basename($_SERVER['REQUEST_URI']); 
	if($titre == 'index.php' || $titre == 'Annonces') {
		// Nom à afficher
		$afficheTitre = 'Accueil';
	}else{
		// Nom à afficher
		$afficheTitre = ucfirst(substr($titre, 0, -4));
	}
?>

<!-- Debut du html -->
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content=text/html; charset=UTF-8 />
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
				<link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
				
							

				<title>	Immobilier - <?php echo $afficheTitre; ?></title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>


<body>
			
			<header>
				<div id="haut">
					<div id="tete">
						<img src="img/logo2.png" width="95" height="95" id="logo">
						<img src="img/titre.png" id="titre">
					</div>
					<?php include("include/nav.php"); ?>
				</div>
			</header>

			<section>
				<img src="img/projet.jpg" width="980" height="325">
