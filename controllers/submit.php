<?php

include('./config/config_init.php');
$db = getDB();

if(isset($_POST)){
	if (isset($_POST['inputMer']) && (isset($_POST['inputPatho']))){
		$inputMer=$_POST['inputMer'];
		$parseinputMer=preg_match('/[^_]+$/',$inputMer, $match);
		$parseinputMer=$match[0];
		$inputPatho=$_POST['inputPatho'];
		$parseinputPatho=preg_match('/[^_]+$/',$inputPatho, $match);
		$parseinputPatho=$match[0];
		#echo $parseinputMer,$parseinputPatho;

		$reponse = $db->prepare('SELECT * FROM `patho` as P WHERE P.mer LIKE "%'.$parseinputMer.'%" and P.type LIKE "%'.$parseinputPatho.'%" ');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){
			echo '<li>'.$donnees['description'].'</li>';
			}

	}
	elseif (isset($_POST['inputMer']) && (!(isset($_POST['inputPatho'])))){
		$inputMer=$_POST['inputMer'];
		$parseinputMer=preg_match('/[^_]+$/',$inputMer, $match);
		$parseinputMer=$match[0];
		#echo $parseinputMer;
		$reponse = $db->prepare('SELECT * FROM `patho` as P WHERE P.mer LIKE "%'.$parseinputMer.'%"');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){
			echo '<li>'.$donnees['description'].'</li>';
			}
	}
	elseif (!(isset($_POST['inputMer'])) && (isset($_POST['inputPatho']))){
		$inputPatho=$_POST['inputPatho'];
		$parseinputPatho=preg_match('/[^_]+$/',$inputPatho, $match);
		$parseinputPatho=$match[0];
		#echo $parseinputPatho;
		$reponse = $db->prepare('SELECT * FROM `patho` as P WHERE P.type LIKE "%'.$parseinputPatho.'%"');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){
			echo '<li>'.$donnees['description'].'</li>';
			}
	}
	else{
		echo "Veuillez séléctionner un élément.";
	}
}
?>
