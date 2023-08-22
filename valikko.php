<nav class="navbar navbar-expand-lg tumma-pohja">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">🧀 Juusto-sivusto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
                <?php 
                    if($sivu == "etusivu") {
                        print("<strong>Etusivu</strong>");
                    } else {
                        print("Etusivu");
                    }
                ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="juuston_valmistus.php">
                <?php 
                if($sivu == "juuston_valmistus") {
                    print("<strong>Juuston valmistus</strong>");
                } else {
                    print("Juuston valmistus");
                }
                ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tietoja.php">
                <?php 
                    if($sivu == "tietoja") {
                        print("<strong>Tietoja</strong>");
                    } else {
                        print("Tietoja");
                    }
                ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="yhteystiedot.php">
                <?php 
                    if($sivu == "yhteystiedot") {
                        print("<strong>Yhteystiedot</strong>");
                    } else {
                        print("Yhteystiedot");
                    }
                ?>                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="palaute.php">
                <?php 
                    if($sivu == "palaute") {
                        print("<strong>Palaute</strong>");
                    } else {
                        print("Palaute");
                    }
                ?>   
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>