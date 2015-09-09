<?php 

//Gestion des actions des controleurs
function actionView($action){
	switch($action){
	//vue home page
	case 'accueil':{ return "views/HomeView.php";  } break;
	}
}

//Fonction d'url
function url($uc = "accueil", $action = "", $idu = ""){
	if ($idu != ""){
		return "http://localhost/$uc/$action/$idu";
	}else if ($action != ""){
		return "http://localhost/$uc/$action";
	}else if ($action == ""){
		return "http://localhost/$uc";
	}
}

//Fonction de session
function estConnecte() {
    return isset($_SESSION['id']);
}

function connecter($id, $email, $statut) {
    $_SESSION['id'] = $id;
    $_SESSION['mail'] = $email;
    $_SESSION['statut'] = $statut;
}

function needStatut(){
	return isset($_SESSION['statut']);
}

function deconnecter() {
    session_destroy();
}

?>