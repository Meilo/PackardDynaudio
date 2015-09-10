<?php 

//Gestion des actions des controleurs
function actionView($action){
	switch($action){
	//vue home page
	case 'accueil':{ return "views/HomeView.php";  } break;

	//vue login page
	case 'connexion':{ return "views/user/UserView.php";  } break;
	}
}

//Fonction d'url
function url($uc = "accueil", $action = "", $idu = ""){
	if ($idu != ""){
		return "http://localhost/packarddynaudio/$uc/$action/$idu";
	}else if ($action != ""){
		return "http://localhost/packarddynaudio/$uc/$action";
	}else if ($action == ""){
		return "http://localhost/packarddynaudio/$uc";
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