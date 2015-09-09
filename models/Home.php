<?php

class PdoHome extends PdoModel 
{
    protected static $monPdo;
    protected static $monPdoMl = null;

    protected function __construct() {
        PdoHome::$monPdo = new PDO(Parent::$serveur . ';' . Parent::$bdd, Parent::$user, Parent::$mdp);
        PdoHome::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        PdoHome::$monPdo = null;
    }

    public static function getPdoHome() {
        if (PdoHome::$monPdoMl == null) {
            PdoHome::$monPdoMl = new PdoHome();
        }
        return PdoHome::$monPdoMl;
    }

    public function getTest(){
        $req = "SELECT * FROM test";
        $rs = PdoHome::$monPdo->query($req);
        $ligne = $rs->fetchAll();
        return $ligne;
    }

}

?>