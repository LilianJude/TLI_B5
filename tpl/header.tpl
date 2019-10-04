<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
  <img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" ></img></br></br>

  {if !isset($smarty.session.username)}
    <form action="index.php?action=home" method="post">
  			<p>
  				<label for="email">Pseudo :</label>
  				<input type="text" name="email"/>
  			</p>
  			<p>
  				<label for="pass">Mot de passe :</label>
  				<input type="password" name="pass"/>
  			</p>
  			<input type="submit" name="login" value="Connexion"/>
  	</form>
  {else}
    <p>Bonjour {$smarty.session.username} !</p>
    </br>
    <input type="submit" name="logout" value="Déconnexion" onclick="location.href='controllers/logout.php';"/>
  {/if}

  <!-- Menu Horizontal -->
  <div class="grid flex">
    <ul class="menu">
      <li><a href="accueil.php">Accueil</a></li>
      <li><a href="inscription.php">Inscription</a></li>

    <!--  <?php
        if(isset($_SESSION['user_id']) || isset($_SESSION['logged_in'])) { ?>
          <li><a href="patho.php">Rech. patho</a></li>
      <?php }	?> -->

      <li><a href="sympt.php">Rech. sympt</a></li>
      <li><a href="infos.php">Plus d'infos</a></li>
    </ul>
  </div>
