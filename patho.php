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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
	<img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" alt="Bannière"/><br/><br/>
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
			$reponse = $pdo->prepare('SELECT * FROM `patho`');
			$reponse->execute();
			#$reponse = $pdo->query('select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $value');
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch()){
				echo '<option value="'.$donnees['idP'].'">'.$donnees['description'].'</option>';
			}
		?>
		</select><br/><br/>
		<div id="filters">
			<fieldset id="fs_mer">
				<legend>Méridiens et Merveilleux Vaisseaux</legend>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_P" id="f_P"/><label for="f_P">Poumon</label></li>
						
						<li><input type="checkbox" name="f_GI" id="f_GI"/><label for="f_GI">Gros Intestin</label></li>
						
						<li><input type="checkbox" name="f_E" id="f_E"/><label for="f_E">Estomac</label></li>
						
						<li><input type="checkbox" name="f_Rte" id="f_Rte"/><label for="f_Rte">Rate/Pancréas</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_C" id="f_C"/><label for="f_C">Cœur</label></li>
						
						<li><input type="checkbox" name="f_IG" id="f_IG"/><label for="f_IG">Intestin grêle</label></li>
						
						<li><input type="checkbox" name="f_V" id="f_V"/><label for="f_V">Vessie</label></li>
						
						<li><input type="checkbox" name="f_R" id="f_R"/><label for="f_R">Rein</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_MC" id="f_MC"/><label for="f_MC">Maître du cœur</label></li>
						
						<li><input type="checkbox" name="f_TR" id="f_TR"/><label for="f_TR">Triple réchauffeur</label></li>
						
						<li><input type="checkbox" name="f_VB" id="f_VB"/><label for="f_VB">Vésicule Biliaire</label></li>
						
						<li><input type="checkbox" name="f_F" id="f_F"/><label for="f_F">Foie</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_DM" id="f_DM"/><label for="f_DM">Du Mai</label></li>
						
						<li><input type="checkbox" name="f_RM" id="f_RM"/><label for="f_RM">Ren Mai</label></li>
						
						<li><input type="checkbox" name="f_ChM" id="f_ChM"/><label for="f_ChM">Chong Mai</label></li>
						
						<li><input type="checkbox" name="f_DaiM" id="f_DaiM"/><label for="f_DaiM">Dai Mai</label></li>
						
					</ul>
				</div>
				
				<div class="inputMer">
					<ul>
						
						<li><input type="checkbox" name="f_+QM" id="f_+QM"/><label for="f_+QM">Yang Qiao Mai</label></li>
						
						<li><input type="checkbox" name="f_-QM" id="f_-QM"/><label for="f_-QM">Yin Qiao Mai</label></li>
						
						<li><input type="checkbox" name="f_+WM" id="f_+WM"/><label for="f_+WM">Yang Wei Mai</label></li>
						
						<li><input type="checkbox" name="f_-WM" id="f_-WM"/><label for="f_-WM">Yin Wei Mai</label></li>
						
					</ul>
				</div>
				<div class="input_checkboxes">
					<input type="button" value="Tout cocher" onclick="this.value=check('fs_mer')">
				</div>
				</fieldset>
				
				<fieldset id="fs_patho" class="inputPatho">
					<legend>Pathologies</legend>
					<div class="inputPatho">
						
						<input type="checkbox" name="fp_me" id="fp_me"/><label for="fp_me">Méridien externe</label>
						
						<input type="checkbox" name="fp_mi" id="fp_mi"/><label for="fp_mi">Méridien interne</label>
						
						<input type="checkbox" name="fp_tf" id="fp_tf"/><label for="fp_tf">Zang/Fu</label>
						
						<input type="checkbox" name="fp_l" id="fp_l"/><label for="fp_l">Voie Luo</label>
						
						<input type="checkbox" name="fp_j" id="fp_j"/><label for="fp_j">Jin Jing</label>
						
						<input type="checkbox" name="fp_mv" id="fp_mv"/><label for="fp_mv">Merveilleux Vaisseaux</label>
						
					</div>
				</fieldset>
		</div>
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

				$reponse = $pdo->prepare('SELECT * FROM `patho` as P JOIN symptpatho as SP ON SP.idp = P.idp JOIN symptome as S ON S.idS = SP.idS JOIN keysympt as KS ON KS.ids = S.idS JOIN keywords as K ON K.idK = KS.idK WHERE name LIKE "%'.$_GET['keyword'].'"');
				$reponse->execute();
				if($reponse ->rowCount() > 0){
				#$reponse = $pdo->query('select S.descr from symptome S join symptpatho SP on SP.idS = S.idS join patho P on P.idP = SP.idP where p.idp = $value');
				// On affiche chaque entrée une à une
					?>
					<label for="select2">Pathologie : </label>
					<p>
					<?php
					while ($donnees = $reponse->fetch()){
						echo '<li>'.$donnees['description'].'</li>';
						}
					?>
					</p>
					<br/>
				<?php 
				}	
				else 
				{
				?>
				<p>Il n'y a pas de résultat pour votre requête avec ce mot-clé</p>
				<?php
				}
			}
		}
				?>
	
	</div>
</body>
</html>
