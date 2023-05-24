<?php

class ControllerArticle extends Controller {
    // attributs



    // actions


    public function single(){

        //recup l'article
        $article = new Article;
        $article->select($_GET['id']);
        //on passe les données a la vue

        //on rend la vue
        
        $this->render('single', compact('article'));


    }

    public function liste() {
        // demande au model utilisateur de recup la liste des articles en bdd
        
        $articles = (new Article())->select();
        
        // on demande a recuperer la vue index.php du module article
        // on passe les données a la vue.
        // on rend la vue.
        $this->render('index', compact('articles'));
    }

    public function create() {
        
        
        // $utilisateurs = (new Utilisateur())->select();

        // on demande a recuperer la vue create.php du module article
        $this->render('create');
        //si le formulaire a été rempli, on créer un nouvel article puis on effectue la requete sur article.php
        if (isset($_POST['btn_create'])) {
            $article = (new Article($_POST));
            if ($article -> insert()) {
                $this->redirectIndex();
            };
        }
        
    }

    public function update() {
        $article = (new Article())->select($_GET['id']);
        $this->render('update', compact('article'));
        if (isset($_POST['btn_update'])) {
            $articleUpdate = (new Article($_POST));
            if ($articleUpdate -> update()) {
                $this->redirectIndex();
            };
        }
    }
}