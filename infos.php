<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
 
 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Informations</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
	<img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" alt="Bannière"/><br/><br/>
	
	<?php 
	if (isset($_SESSION['username'])) { ?>
		<span>Utilisateur : <span>
		<?php echo ($_SESSION['username']); ?>
		</br><button class="small"><a href="logout.php">Deconnexion</a></button>
		<?php }
	?>
		<!-- Menu Horizontal -->
	<div class="grid flex">
		<ul class="menu">
			<li><a href="accueil.php">Accueil</a></li>
			<?php 
			if(!(isset($_SESSION['user_id']) || isset($_SESSION['logged_in']))) { ?>
				<li><a href="inscription.php">Inscription</a></li>
			<?php 
			}
			?>	
			<li><a href="patho.php">Rech. patho</a></li>			
			<li><a href="sympt.php">Rech. sympt</a></li>
			<li><a href="infos.php">Plus d'infos</a></li>
		</ul>
	</div>
	<div class="grid flex">
		<p>
		<strong>Développements :</strong><br/><br/>
			Pour l'aspect sécurité : un compte acuRO pour la lecture, un compte acuRW pour l'insertion des données, 2 mots de passe différents. 
			Les requêtes sont préparées par PDO ce qui permet d'éviter les injections SQL.
			Le mot de passe root de phpmyadmin a été modifié.
			<br/><br/>
			Pour l'aspect développement : L'ensemble du cahier des charges a été réalisé, il est possible de posséder une session PHP, de s'inscrire, de se connecter (et ainsi pouvoir effectuer une recherche par mot-clé).<br/>
			Les filtres sur les pathologies ont été ajoutés.
			Les fonctionnalités ont été ajoutées au fur et à mesure, tenant compte de leur difficulté.
			<br/><br/>
			Le projet fonctionne sur une architecture WAMP. L'aspect graphique est issu d'un framework qui n'est pas Bootstrap mais Kickstart.
			<br/><br/>

		<strong>Auteurs : </strong>
			<ul>
				<li>Juliette BONIAUD</li>
				<li>Solène SINNING</li>
				<li>Lilian JUDE</li>
				<li>Jérémy MOUGEY</li>
			</ul>
		<strong>Sitographie :</strong><br/>
			<ul>
				<li><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript">Apprendre le Javascript</a></li>
				<li><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql">Apprendre le PHP et SQL</a></li>
				<li><a href="https://openclassrooms.com/fr/courses/1631636-simplifiez-vos-developpements-javascript-avec-jquery/1636305-premiers-pas-avec-ajax">Apprendre l'AJAX</a></li>
			</ul>
		</p>
	</div>
</body>
</html>