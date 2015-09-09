<?php

class PdoModel
{
	protected static $serveur = 'mysql:host=localhost';
    protected static $bdd = 'dbname=bd_project';
    protected static $user = 'root';
    protected static $mdp = '';
    protected static $monPdo;
    protected static $monPdoMl = null;

    protected function __construct() {
        PdoModel::$monPdo = new PDO(PdoModel::$serveur . ';' . PdoModel::$bdd, PdoModel::$user, PdoModel::$mdp);
        PdoModel::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        PdoModel::$monPdo = null;
    }

    public static function getPdoModel() {
        if (PdoModel::$monPdoMl == null) {
            PdoModel::$monPdoMl = new PdoModel();
        }
        return PdoModel::$monPdoMl;
    }
}

include('models/Home.php');

?>