<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'connexion';
}

$action = $_REQUEST['action'];
switch($action){
	case 'connexion':
	{
		$title = "Se connecter";
		$metaDescription = "meta";
		$keywords = "mots cles";
		include("views/web/layout.php");
		break;
	}

	default:{
		if(empty($HTTP_REFERER) || empty($REQUEST_URI)) {
			$metaDescription = "Nous sommes désolée mais la ressource demander est introuvable";
			$title = "Ressource introuable - 404";
			include("views/404.php");
		}
	}
	break;
}

?>