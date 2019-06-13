  <?php 
    include_once 'frontend/header.php';
    include_once 'frontend/navbar.php';
    include_once 'CRUD.php';
  ?>

  <!-- Start your project here-->
  <div style="height: 80vh">
    <div class="">

      <!--Carousel Wrapper-->
      <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" height="750" src="img/banner/img1.jpg" 
                alt="First slide">
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">McLaren & Ferrari</h3>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" height="750" src="img/banner/img2.jpg" 
                alt="Second slide">
              <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Lamborghini & Audi</h3>
            </div>
          </div>
          <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
              <img class="d-block w-100" height="750" src="img/banner/img3.jpg"
                alt="Third slide">
              <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Ferrari</h3>
            </div>
          </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->


      <div class="container mt-5">

        <h3> Confira nossos carros </h3>
        <hr>

        <div class="card-deck">

          <?php
            $tabela = read('carros', '*', '');

            for($i=0; $i<count($tabela); $i++){

              $imagem=$tabela[$i]['imagem'];
              $marca=$tabela[$i]['marca'];
              $modelo=$tabela[$i]['modelo'];
              $ano=$tabela[$i]['ano'];
              $cor=$tabela[$i]['cor'];
              $cambio=$tabela[$i]['cambio'];
              $valor_diaria=$tabela[$i]['valor_diaria'];
              $id=$tabela[$i]['id'];
          ?>


            <!-- Card -->
            <div class="card mb-4">

              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo $imagem ?>" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title" style="min-height: 59px;"><?php echo $marca.' '.$modelo ?></h4>
                <!--Text-->
               
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" data-toggle="modal" data-target="#modalDetalhar<?php echo $i?>" class="btn btn-light-blue btn-md"><i class="fa fa-eye"></i> Detalhar</button>

              </div>
            </div>
            <!-- Card -->



         



          <!-- Modal Detalhar -->
            <div class="modal fade" id="modalDetalhar<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Detalhar Carro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <!-- Card -->
                    <div class="card card-cascade wider reverse">

                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top mt-2" src="<?php echo $imagem ?>" style="width: 70%;margin: 0 auto;" alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title"><strong><?php echo $marca ?></strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2"><?php echo $modelo ?></h6>
                        <!-- Text -->
                        <p class="card-text">
                          <strong>Ano: </strong> <?php echo $ano ?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <strong>Cor: </strong> <?php echo $cor ?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <strong>Câmbio: </strong> <?php echo $cambio ?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <strong>Valor da Diária: </strong> R$ <?php echo $valor_diaria ?>
                        </p>

                        

                      </div>

                    </div>
                    <!-- Card -->
   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>

          <?php
            }
          ?>

      

       

        

      </div>
      
    </div>

    
 <?php 
    include_once 'frontend/footer.php';  
?>