<?php

$db = getDB();

	if(!(empty($_POST['keyword']))) {
		$reponse = $db->prepare('SELECT * FROM patho as P JOIN symptpatho as SP ON SP.idp = P.idp JOIN symptome as S ON S.idS = SP.idS JOIN keysympt as KS ON KS.ids = S.idS JOIN keywords as K ON K.idK = KS.idK WHERE K.name LIKE "%'.$_POST['keyword'].'%"');
		$reponse->execute();
		if($reponse ->rowCount() > 0){
      while ($donnees = $reponse->fetch()){
        $smarty->append('pathoResults', $donnees['description']);
			}
    }
	}


?>
