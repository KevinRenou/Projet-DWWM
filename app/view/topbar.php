<body>


  <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark bg-opacity-75">
      <div class="container ms-5"><a class="navbar-brand" href="<?= LienHelper::$url?>">Blog</a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= LienHelper::$url?>">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <d-block>A propos</d-block>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <ul class="navbar-nav sm-icons">
            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-facebook"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-pinterest"></i></a></li>
          </ul>
        </ul>
      </div>
    </nav>