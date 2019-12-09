<?php
/* Smarty version 3.1.33, created on 2019-11-04 12:44:21
  from 'C:\wamp64\www\TLI_B5\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc01d259b2d72_77000581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf5f71ad9d07e3eb166f2ff76973985892f7f1f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_B5\\tpl\\header.tpl',
      1 => 1572871453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc01d259b2d72_77000581 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/kickstart.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>

  <img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" ></img></br></br>

  <?php if (!isset($_SESSION['username'])) {?>
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

    <?php echo '<script'; ?>
>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    <?php echo '</script'; ?>
>



  <?php } else { ?>
    <p>Bonjour <?php echo $_SESSION['username'];?>
 !</p>
    </br>
    <input type="submit" name="logout" value="Déconnexion" onclick="location.href='controllers/logout.php';"/>
  <?php }?>

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
<?php }
}
