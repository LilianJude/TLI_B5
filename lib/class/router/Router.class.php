<?php
/**

	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier 
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/

class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"test" => "templates/exemple.tpl"
	);
	
	function __construct($smarty,$action ){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}
	
	function getTpl(){
		$ret = "templates/defaut.tpl";
		if($this->action!=""){
			$ret = Router::mapTpl[$this->action];
			$this->todo();
		}
		return $ret;
	}
	
	function todo(){
		//ne doit pas être ici mais faire appel à la librairie pour obtenir les assignations correctes
		// le mieux est l'utilisation d'un controleur appelé par le routeur, 
		// contrôleur qui sera chargé d'appeller les bonnes librairies (BD par exemple) pour faire les assignations.
		$this->smarty->assign("userFirstName",get_current_user());//voir https://www.php.net/manual/fr/function.get-current-user.php
	}
}

?>
