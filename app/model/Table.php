<?php

class Table
{

    //attributs

    // permet de stocker la table sur laquelle nous devont intéragir
    public static $table;
    // permet de stocker l'instance PDO
    public static $pdo;

     // stock le nom de la bdd et l'adresse
     const DSN = 'mysql:dbname=blog;host=localhost';
     // stock le nom utilisateur pour la bdd
     const UTILISATEUR = 'blog';
     // stock le mdp utilisateur pour la bdd
     const MDP = 'ez2K*imGk81HLTWe';

     public static function getPDO() : PDO {
        // instanciation de pdo si pdo n'existe pas encore
        if (self::$pdo == NULL){
            self::$pdo = new PDO(self::DSN, self::UTILISATEUR, self::MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }
        return self::$pdo;
    }


    public static function getNomTable() : string {
        self::$table = strtolower(get_called_class());
        return self::$table;
    }

    public static function select($_id = null){
        if ($_id == null){
            $sql = "SELECT * FROM ". self::getNomTable();
        }else{
            $sql = "SELECT * FROM ". self::getNomTable(). " WHERE id = ?";
        }
        $req = self::getPDO()->prepare($sql);
        $req->execute([$_id]);
        $req->setFetchMode(PDO::FETCH_CLASS, self::getNomTable());
        if ($_id == null){
            return $req->fetchAll();
        }else{
            return $req->fetch();
        }
    }

    // public static function insert() {

    // }
}
