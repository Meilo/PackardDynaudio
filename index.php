<?php

include 'includes/include.php';

if (!isset($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'accueil';
}
$uc = $_REQUEST['uc'];
switch ($uc) {
	case 'accueil': { include("controllers/HomeController.php"); break; }
	case 'connexion': { include("controllers/UserController.php"); break; }
    default: {
    	if(empty($HTTP_REFERER) || empty($REQUEST_URI)) { 
    		include("views/404.php");
    	}
    }
}
?>