<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
 
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
	<img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" ></img></br></br>
	
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
			<li><a href="inscription.php">Inscription</a></li>
			
			
			<?php
			if(isset($_SESSION['user_id']) || isset($_SESSION['logged_in'])) { ?>
				<li><a href="patho.php">Rech. patho</a></li>
			<?php }	?>
			
			<li><a href="sympt.php">Rech. sympt</a></li>
			<li><a href="infos.php">Plus d'infos</a></li>
		</ul>
	</div>
	<div class="grid flex">
		<label for="select1">Selection </label>
		<select id="select1">
		</select>
	</div>
</body>
</html>