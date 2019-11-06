<?php
include 'connect.php';
if(isset($_POST)){
	if (isset($_POST['resultsympt'])){
		$resultsympt=$_POST['resultsympt'];
		//$reponse = $pdo->prepare('SELECT * FROM `patho` as P WHERE P.mer LIKE "%'.$parseinputMer.'%" and P.type LIKE "%'.$parseinputPatho.'%" ');
		$reponse = $pdo->prepare('SELECT * FROM `patho` as P JOIN symptpatho as SP ON P.idP = SP.idP JOIN symptome as S ON S.idS = SP.idS WHERE S.descr LIKE "%'.$resultsympt.'%"');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){
			echo '<li>'.$donnees['description'].'</li>';
			}
	}
}
?>