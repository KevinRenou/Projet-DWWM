<?php

class Article extends Table
{
    // attributs
    public $id;
    public $titre;
    public $contenu;
    public $image;
    public $miniature;
    public $date;
    public $statut;
    public $categories= [];


    // actions


    // public function __construct(?array $_data = [])
    // {
    //     foreach ($_data as $key => $value) {
    //         if (property_exists('Article', $key)) {
    //             $this->$key = $value;
    //         }
    //     }
    // }

    public function insert()
    {
        // recupère $_POST

        // créer l'article en bdd avec une req SQL

        // retourner vrai/faux
    }

    public function update()
    {
        // recupère $_POST
        // modifier l'article en bdd avec une req SQL
        // retourner vrai/faux
    }
    


    public function getCategories($_id){
        $sql = "SELECT libelle
        FROM categorie
        INNER JOIN article_categorie ON categorie.id = article_categorie.id_categorie
        WHERE  article_categorie.id_article = $_id";

        $req = self::getPDO()->query($sql);

        return $this->categories = $req->fetchAll(PDO::FETCH_ASSOC);
        
    }
   
}
