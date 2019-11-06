<?php 
	include 'connect.php';
 
    $reponse = $pdo->prepare('SELECT * FROM symptome WHERE descr LIKE :req'); 
    $reponse->execute(array('req' => '%'.$_GET['req'].'%')); 
    $liste = array(); 
 
    while($donnees = $reponse->fetch()) { 
        $a = count($liste); 
    // formatage de l'affichage des données de la liste 
        $liste[$a] = $donnees['descr']; 
    } 
 
    echo json_encode($liste);     
?>

