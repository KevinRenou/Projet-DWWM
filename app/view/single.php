<?php 
$article = $article->select($_GET['id']);
$article->getCategories($_GET['id']);
?>


<div class="article_top row text-white">
    <img src="image/thumbnail/<?= $article->image ?>" class="img-fluid " alt="...">
    <div class="card-img-overlay text-center row">
        <h5 class="card-title my-auto"><?= $article->titre?></h5>
        <p class="card-text align-self-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec ipsum est, tristique et sapien vel, efficitur
            tristique diam.</p>
        <p class="card-text"><small>Il y a un mois</small></p>
      </div>
   </div>


  </header>

  <main>
    <div class="container my-5">
        <div class="row">
            <div class="col-2">
                <p class="fw-semibold"><?= $article->date?></p>
            </div>
            <div class="col-8">
                <p><?= $article->contenu?></p>
            </div>
        </div>
    </div>
    <diV class="container my-5 article_similaire">
      <h4>Articles similaires</h4>
      <div class="row my-3">
        <div class="col">
          <div class="card text-bg-dark">
            <img src="image/thumbnail/img3.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Titre</h5>
              <p class="card-text">Lorem ipsum dolor sit amet,
                 consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
              <p class="card-text"><small>Il y a 1 mois</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="image/thumbnail/img6.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Titre</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
              <p class="card-text"><small>Il y a 1 mois</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="image/thumbnail/img1.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Titre</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
              <p class="card-text"><small>Il y a 1 mois</small></p>
            </div>
          </div>
        </div>
      </div>
    </diV>
  </main>
