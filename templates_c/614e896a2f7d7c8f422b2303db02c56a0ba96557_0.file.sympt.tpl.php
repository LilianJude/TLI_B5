<?php
/* Smarty version 3.1.33, created on 2019-11-03 11:11:48
  from 'C:\wamp64\www\TLI_B5\tpl\pages\sympt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbeb5f40983f1_28431755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614e896a2f7d7c8f422b2303db02c56a0ba96557' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI_B5\\tpl\\pages\\sympt.tpl',
      1 => 1572706497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbeb5f40983f1_28431755 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="grid flex">
		<p>Symptomes : <br/><br/>
		<select title="symtome">
		<?php echo '<?php
			';?>$reponse = $pdo->prepare('SELECT * FROM symptome');
			$reponse->execute();

			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch()){
				echo '<option value="'.$donnees['idS'].'">'.$donnees['descr'].'</option>';
			}
		<?php echo '?>';?>
		</select>
		</p>
	</div>
<?php }
}
