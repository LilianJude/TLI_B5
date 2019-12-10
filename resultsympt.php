<?php
include 'connect.php';
if(isset($_POST)){
	if (isset($_POST['resultsympt'])){
		$resultsympt=$_POST['resultsympt'];
		//$reponse = $pdo->prepare('SELECT * FROM `patho` as P WHERE P.mer LIKE "%'.$parseinputMer.'%" and P.type LIKE "%'.$parseinputPatho.'%" ');
		$reponse = $pdo->prepare('SELECT * FROM `patho` as P JOIN symptpatho as SP ON P.idP = SP.idP JOIN symptome as S ON S.idS = SP.idS JOIN keySympt as KS ON KS.idS = S.idS JOIN keywords as K ON K.idK = KS.idk WHERE K.name LIKE "%'.$resultsympt.'%"');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){
			echo '<li>'.$donnees['description'].'</li>';
			}
	}
}
?>