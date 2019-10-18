<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
 
include 'connect.php';

/**
 * Check if the user is logged in.
 */
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pathologies</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
	<img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" ></img></br></br>
	<?php 
	if (isset($_SESSION['username'])) { ?>
		<span>Utilisateur : <span>
		<?php echo ($_SESSION['username']); ?>
		</br><button class="small"><a href="logout.php">Déconnexion</a></button>
		<?php }?>
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
	<!-- LISTE LES SYMPT PAR PATHOLOGIES : select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $id -->
		<label for="select1">Pathologie </label>
		<p>
		<select>
		<?php
			$reponse = $pdo->query('SELECT * FROM `patho`');
			#$reponse = $pdo->query('select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $value');
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch()){
				echo '<option value="'.$donnees['idP'].'">'.$donnees['description'].'</option>';
			}
		?>
		</select>
		<?php
		if(!(isset($_SESSION['user_id']) || isset($_SESSION['logged_in']))) { ?>
			<p>Veuillez vous connecter pour accéder à la recherche de pathologie par mot-clé</p>
		<?php 
		}
		else
		{
		?>
			<p>Recherche patho par symptome mot-clé :</p>
			<!-- SELECT * FROM `patho` as P JOIN symptpatho as SP ON SP.idp = P.idp JOIN symptome as S ON S.idS = SP.idS JOIN keysympt as KS ON KS.ids = S.idS JOIN keywords as K ON K.idK = KS.idK WHERE name LIKE "%orteil%"-->
			<form name="formkeyword" id="formkeyword">
				<textarea name="keyword" id="keyword" onkeypress="press_key_enter(event, this)"></textarea>	
				<input type="submit" value="Recherche" onclick="search_by_keyword()">
			</form>
		<?php
			if(!(empty($_GET['keyword']))) { 

				$reponse = $pdo->query('SELECT * FROM `patho` as P JOIN symptpatho as SP ON SP.idp = P.idp JOIN symptome as S ON S.idS = SP.idS JOIN keysympt as KS ON KS.ids = S.idS JOIN keywords as K ON K.idK = KS.idK WHERE name LIKE "%'.$_GET['keyword'].'"');
				if($reponse ->rowCount() > 0){
				#$reponse = $pdo->query('select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $value');
				// On affiche chaque entrée une à une
					?>
					<label for="select2">Pathologie : </label>
					<p>
					<select>
					<?php
					while ($donnees = $reponse->fetch()){
						echo '<option value="'.$donnees['idP'].'">'.$donnees['description'].'</option>';
						}

					?>
					</select>
					</p>
					<br/>
				<?php 
				}	
				else 
				{
				?>
				<p>Il n'y a pas de résultat pour votre requête</p>
				<?php
				}
			}
		}
				?>
	
	</div>
</body>
</html>
