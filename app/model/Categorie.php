<?php

class Categorie extends Table
{
    // attributs
    public $id;
    public $libelle;


    // actions


    public function __construct(?array $_data = [])
    {
        foreach ($_data as $key => $value) {
            if (property_exists('Categorie', $key)) {
                $this->$key = $value;
            }
        }
    }

    public function insert()
    {
        // recupère $_POST

        // créer la catégorie en bdd avec une req SQL
        $sql = "INSERT INTO categorie VALUES (NULL, :libelle)";
        $data = [
            'libelle' => $this->libelle

        ];
        $req = self::getPDO()->prepare($sql);

        // retourner vrai/faux
        return $req->execute($data);
    }

    public function update()
    {
        // recupère $_POST
        // modifier la categorie en bdd avec une req SQL
        $sql = "UPDATE categorie SET libelle=:libelle WHERE id=:id";
        $data = [
            'id' => $this->id,
            'libelle' => $this->libelle

        ];
        $req = self::getPDO()->prepare($sql);
        // retourner vrai/faux
        return $req->execute($data);
    }

   
}
