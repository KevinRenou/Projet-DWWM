<?php 

$articles= Article::select();

$cats=Categorie::select();

foreach ($articles as $key =>  $article) {
$article->getCategories($articles[$key]->id);
}

?>



<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/slider/img1.png" class="img-fluid image-header" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Titre slider 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slider/img2.jpg" class="img-fluid image-header" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Titre slider 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slider/img3.jpg" class="img-fluid image-header" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Titre slider 3 </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum est, tristique
                et sapien vel, efficitur tristique diam.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </header>

  <main>
    <div class="container my-5 article_thumbnail">
      <h3>Articles</h3>
      <div>
        <button class="btn btn-light btn-sm btn-tout">Tout</button>

        <?php foreach ($cats as $cat):?>
        <button class="btn btn-light btn-sm btn-cat"><?= $cat->libelle ?></button>
        <?php endforeach?>
        
      </div>
      <div class="container">
        <div class="row my-3">

          <?php foreach ($articles as $key =>  $article) : ?>
          <div class="col-3 carte-article <?php foreach ($articles[$key]->categories as  $categorie) {
                  echo $categorie['libelle'] . ' ';
                }  ?>">
            <a class="text-decoration-none text-reset" href='<?= LienHelper::getLien('ControllerArticle','single',$articles[$key]->id) ?>'>
            <div class="card mb-3" style="width: 18rem;">
              <img src="image/thumbnail/<?= $articles[$key]->image ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $articles[$key]->titre ?></h5>
                <p class="card-text"><?php foreach ($articles[$key]->categories as  $categorie) {
                  echo $categorie['libelle'] . ' ';
                }  ?></p>
                <p class="card-text"><?= substr( $articles[$key]->contenu ,0 ,100 )?>...</p>
                <p class="card-text"><small class="text-muted"><?= $articles[$key]->date?></small></p>
              </div>
            </div>
            </a>
          </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>
    <diV class="container my-5 article_fav">
      <h3>Mes articles favoris</h3>
      <div class="row my-3">
        <div class="col">
          <div class="card text-bg-dark">
            <img src="image/thumbnail/img3.jpg" class="card-img" alt="...">
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

