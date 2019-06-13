<?php
  require_once('frontend/header.php');
  require_once('frontend/navbar.php');
  include_once 'CRUD.php';
?>

<?php

$pesquisa=$_POST['pesquisa'];

?>



<div class="container">

    <h3 class="mt-5"> Resultados de "<?php echo $pesquisa ?>"</h3>

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
                
            if (
                strpos($marca, $pesquisa) !== false || 
                strpos($modelo, $pesquisa) !== false ||
                strpos($ano, $pesquisa) !== false ||
                strpos($cor, $pesquisa) !== false ||
                strpos($cambio, $pesquisa) !== false ||
                strpos($valor_diaria, $pesquisa) !== false
            ) {

            
            
    ?>
    
    <!-- News jumbotron -->
    <div class="jumbotron text-center hoverable p-4 mt-4">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                <img class="img-fluid" src="<?php echo $imagem ?>" alt="Sample image">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

        

                <h4 class="h4 mb-4"><?php echo $marca .' '. $modelo ?></h4>

                <p class="font-weight-normal"><?php echo $ano ?></p>

                <a class="btn btn-success btn-md" data-toggle="modal" data-target="#modalDetalhar<?php echo $i?>"> <i class="fa fa-eye"></i> Detalhes</a>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </div>
    <!-- News jumbotron -->

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
    }

    ?>

    

    </section>
    <!-- Section: Blog v.3 -->   
</div>



<?php
  require_once('frontend/footer.php');
?>