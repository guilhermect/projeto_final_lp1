  <?php
    $active='active';
  ?>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark elegant-color">

    <!-- Navbar brand -->
     <a class="navbar-brand" href="#"><i class="fa fa-car"> </i> Alugue Super Carros</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo $active ?>">
          <a class="nav-link" href="index.php">Início
          </a>
        </li>
        <li class="nav-item">
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