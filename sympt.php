<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
 
#require 'connect.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Symptômes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
	<link type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet" /> 
	<script type="application/javascript" src="jquery-ui/js/jquery-1.9.1.js"></script> 
	<script type="application/javascript" src="jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
	<script src="js/script.js"></script>
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
	<?php
		if(!(isset($_SESSION['user_id']) || isset($_SESSION['logged_in']))) { ?>
			<p>Veuillez vous connecter pour accéder à la recherche de pathologie par mot-clé</p>
	<?php 
		}
		else
		{
	?>
		<p>Symptomes : <br/><br/>

		<form action="autocomplete.php" method="post">
			<p id="box"><input type="text" id="symptomes" name="symptomes"/></p>
		</form>
		<form action="resultsympt.php" method="post" id="submitsympt">
			<p><input type="submit" id="submitsympt" /></p>
			<span id="resultsympt"></span>
		</form>
		<input type="button" value="RàZ" id="raz_radio_btn">
		</p>
	</div>
	<?php
		}
	?>
</body>
</html>