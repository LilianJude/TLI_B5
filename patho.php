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
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: patho.php');
    exit;
}
 
?>

<script>
		function myFunction() {
		  var x = document.getElementById("keyword").value;
		  document.getElementById("demo").innerHTML = x;
		}
</script>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pathologies</title>
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
		</br><button class="small"><a href="logout.php">Déconnexion</a></button>
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
		<form name="formkeyword">
			<textarea name="keyword" id="keyword"></textarea>	
		</form>
		<button type="button" onclick="myFunction()">Search</button>
		<p id="demo"></p>

		</p>
		<br/>
		
		
	</div>
</body>
</html>