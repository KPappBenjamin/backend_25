<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tabletek</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a 
            class="nav-link <?= ("fooldal" == $megjelenes) ? "active" : ""?>" 
            <?= ("fooldal" == $megjelenes) ? "aria-current=\"page\"" : ""?>
            href="index.php">
            Főoldal
          </a>
        </li>
        <li class="nav-item">
          <a 
            class="nav-link <?= ("tablazat" == $megjelenes) ? "active" : ""?>" 
            <?= ("tablazat" == $megjelenes) ? "aria-current=\"page\"" : ""?>
            href="index.php?megjelenes=tablazat">
            Táblázat
          </a>
        </li> 
        <li class="nav-item">
          <a 
            class="nav-link <?= ("racs" == $megjelenes) ? "active" : ""?>" 
            <?= ("racs" == $megjelenes) ? "aria-current=\"page\"" : ""?>
            href="index.php?megjelenes=racs">
            Rács
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>