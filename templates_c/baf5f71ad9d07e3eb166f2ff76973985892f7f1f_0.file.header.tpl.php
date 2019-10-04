<?php
/* Smarty version 3.1.33, created on 2019-10-03 14:21:02
  from 'C:\wamp64\www\TLI_B5\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9603ceb68c67_22142682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf5f71ad9d07e3eb166f2ff76973985892f7f1f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_B5\\tpl\\header.tpl',
      1 => 1570112460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9603ceb68c67_22142682 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/kickstart.js"><?php echo '</script'; ?>
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
  <?php } else { ?>
    <p>Bonjour <?php echo $_SESSION['username'];?>
 !</p>
    </br>
    <input type="submit" name="logout" value="Déconnexion" onclick="location.href='controllers/logout.php';"/>
  <?php }?>

  <!-- Menu Horizontal -->
  <div class="grid flex">
    <ul class="menu">
      <li><a href="accueil.php">Accueil</a></li>
      <li><a href="inscription.php">Inscription</a></li>

    <!--  <?php echo '<?php
        ';?>if(isset($_SESSION['user_id']) || isset($_SESSION['logged_in'])) { <?php echo '?>';?>
          <li><a href="patho.php">Rech. patho</a></li>
      <?php echo '<?php ';?>}	<?php echo '?>';?> -->

      <li><a href="sympt.php">Rech. sympt</a></li>
      <li><a href="infos.php">Plus d'infos</a></li>
    </ul>
  </div>
<?php }
}
