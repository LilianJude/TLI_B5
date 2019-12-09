<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="js/kickstart.js"></script>
  <script src="js/script.js"></script>
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


    <button onclick="openForm()">Inscription</button>

    <div class="form-popup" id="myForm">
      <form action="index.php?action=home" method="post" class="form-container">
        <h1>Inscription</h1>

        <label for="signupPseudo"><b>Pseudo</b></label>
        <input type="text" placeholder="Entrer pesudo" name="signupPseudo" required>

        <label for="signupPsw"><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer mot de passe" name="signupPsw" required>

        <button type="submit">S'inscrire</button

        <button type="button" onclick="closeForm()">Annuler</button>
      </form>
    </div>

    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>



  {else}
    <p>Bonjour {$smarty.session.username} !</p>
    </br>
    <input type="submit" name="logout" value="Déconnexion" onclick="location.href='controllers/logout.php';"/>
  {/if}

  <!-- Menu Horizontal -->
  <div class="grid flex">
    <ul class="menu">
      <li><a href="index.php?page=home">Accueil</a></li>
      <li><a href="index.php?page=patho">Inscription</a></li>
      <li><a href="index.php?page=patho">Rech. patho</a></li>
			<li><a href="index.php?page=sympt">Rech. sympt</a></li>
			<li><a href="index.php?page=patho">Plus d'infos</a></li>
    </ul>
  </div>
