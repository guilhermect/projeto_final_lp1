  <?php
    $active1='';
    $active2='';

    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if($url=='http://localhost/projeto_final_lp1/' || $url=='http://localhost/projeto_final_lp1/index.php'){
      $active1='active';
    } 
    elseif($url=='http://localhost/projeto_final_lp1/admin.php' || $url=='http://localhost/projeto_final_lp1/admin.php?opc=cadastrar' || $url=='http://localhost/projeto_final_lp1/admin.php?opc=editar'){
      $active2='active';
    }
  ?>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark elegant-color">

    <!-- Navbar brand -->
     <a class="navbar-brand" href="index.php"><i class="fa fa-car"> </i> Alugue Super Carros</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo $active1 ?>">
          <a class="nav-link" href="index.php">Início
          </a>
        </li>
        <li class="nav-item <?php echo $active2 ?>">
          <a class="nav-link" href="admin.php">Administração</a>
        </li>
      

      </ul>
      <!-- Links -->

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->