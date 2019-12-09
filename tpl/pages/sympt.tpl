	<div class="grid flex">
		<p>Symptomes : <br/><br/>
		<select title="symtome">
		<?php
			$reponse = $pdo->prepare('SELECT * FROM symptome');
			$reponse->execute();

			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch()){
				echo '<option value="'.$donnees['idS'].'">'.$donnees['descr'].'</option>';
			}
		?>
		</select>
		</p>
	</div>
