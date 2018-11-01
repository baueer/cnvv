<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="60" height="56">
        <span id="brand-text">Colegiul National Vlaicu Voda</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <ul class="navbar-nav">

          <li class="nav-item notshown" <?php if ($_SERVER['PHP_SELF'] == "/cnvlaicuvoda/echipa.php") { echo 'style="display: block"'; } ?>>
            <a class="nav-link font-weight-bold active" href="echipa.php">Echipa WEB</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php if ($_SERVER['PHP_SELF'] == "/cnvlaicuvoda/home.php") { echo "font-weight-bold active"; } ?>" href="home.php">Acasa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Despre noi</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Traditie</a>
                <a class="dropdown-item" href="">Galerie foto</a>
                <a class="dropdown-item" href="">Resurse educationale</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Profesori</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Conducere</a>
                <a class="dropdown-item" href="">Corpul profesoral</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">Consiliul elevilor</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Despre noi</a>
                <a class="dropdown-item" href="">Proiecte si evenimente</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($_SERVER['PHP_SELF'] == "/cnvlaicuvoda/contact.php") { echo "font-weight-bold active"; } ?>" href="contact.php">Contact</a>
          </li>
        </ul>

      </div>
    </div>
</nav>