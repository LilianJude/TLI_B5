<?php
/* Smarty version 3.1.33, created on 2019-09-09 11:36:30
  from 'C:\wamp64\www\TLI_B5\tpl\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d76393e5fb2d5_12593408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf5f71ad9d07e3eb166f2ff76973985892f7f1f' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_B5\\tpl\\header.tpl',
      1 => 1567945827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d76393e5fb2d5_12593408 (Smarty_Internal_Template $_smarty_tpl) {
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

  <?php echo '<?php
    ';?>if (isset($_SESSION['username'])) { <?php echo '?>';?>
      <span>Utilisateur : <span>
      <?php echo '<?php ';?>echo ($_SESSION['username']); <?php echo '?>';?>
      </br><button class="small"><a href="logout.php">Deconnexion</a></button>
      <?php echo '<?php ';?>}
  <?php echo '?>';?>

  <!-- Menu Horizontal -->
  <div class="grid flex">
    <ul class="menu">
      <li><a href="accueil.php">Accueil</a></li>
      <li><a href="inscription.php">Inscription</a></li>


      <?php echo '<?php
        ';?>if(isset($_SESSION['user_id']) || isset($_SESSION['logged_in'])) { <?php echo '?>';?>
          <li><a href="patho.php">Rech. patho</a></li>
      <?php echo '<?php ';?>}	<?php echo '?>';?>

      <li><a href="sympt.php">Rech. sympt</a></li>
      <li><a href="infos.php">Plus d'infos</a></li>
    </ul>
  </div>
<?php }
}
