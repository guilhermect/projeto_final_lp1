  <?php 
    include_once 'frontend/header.php';
    include_once 'frontend/navbar.php';
    include_once 'CRUD.php';
  ?>

  <?php
    $opc='';

    if(isset($_GET['opc'])){
      $opc=$_GET['opc'];      
    }
    

    if($opc=='cadastrar'){

      $campos="marca, modelo, ano, cor, cambio, valor_diaria, imagem";

      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];
      $ano=$_POST['ano'];
      $cor=$_POST['cor'];
      $cambio=$_POST['cambio'];
      $valor_diaria=$_POST['valor_diaria'];
      $imagem='img/carros/'.$_POST['imagem'];

      $valores="'$marca','$modelo',$ano,'$cor','$cambio',$valor_diaria,'$imagem'";

      //echo $valores;

      $insert=create("carros", $campos, $valores);

      if($insert){
        echo '<script> swal ( "Inserido com sucesso!" ,  "" ,  "success" ) </script>';
      } else {
        echo '<script> swal ( "Erro ao inserir!" ,  "" ,  "error" ) </script>';
      }

    }

    if($opc=='deletar'){
      $id=$_GET['id'];

      $argumentos="WHERE id=$id";

      $delete = delete('carros', $argumentos);

      if($delete){
        echo '<script> swal ( "Deletado com sucesso!" ,  "" ,  "success" ) </script>';
      } else {
        echo '<script> swal ( "Erro ao deletar!" ,  "" ,  "error" ) </script>';
      }
    }

    if($opc=='atualizar'){


      $id=$_POST['id'];
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];
      $ano=$_POST['ano'];
      $cor=$_POST['cor'];
      $cambio=$_POST['cambio'];
      $valor_diaria=$_POST['valor_diaria'];
      $imagem='img/carros/'.$_POST['imagem'];

      $alteracoes="marca='$marca',modelo='$modelo',ano=$ano,cor='$cor',cambio='$cambio',valor_diaria=$valor_diaria,imagem='$imagem'";

      $argumentos="WHERE id=$id";

      //echo $valores;

      $update=update('carros', $alteracoes, $argumentos);

      if($update){
        echo '<script> swal ( "Atualizado com sucesso!" ,  "" ,  "success" ) </script>';
      } else {
        echo '<script> swal ( "Erro ao atualizar!" ,  "" ,  "error" ) </script>';
      }

    }

  ?>


  <!-- Start your project here-->
  <div style="height: 80vh">


    <div class="p-5">

      <h2 class="p-3" style="background:#b71c1c; color:white; border-radius: 5px;"> 
        Painel Administrativo 
        <button data-toggle="modal" data-target="#basicExampleModal" class="btn btn-dark btn-md" style="float: right; margin-top: 0px; border-radius: 3px;"> <i class="fa fa-plus"></i> Cadastrar Carro</button>
      </h2>

      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">Imagem
            </th>
            <th class="th-sm">Marca
            </th>
            <th class="th-sm">Modelo
            </th>
            <th class="th-sm">Ano
            </th>
            <th class="th-sm">Cor
            </th>
            <th class="th-sm">Câmbio
            </th>
            <th class="th-sm">Valor Diária
            </th>
            <th class="th-sm">Ações
            </th>
            
          </tr>
        </thead>

        <tbody>

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

              $selected1='';
              $selected2='';

              if($cambio=='Manual'){
                $selected1='selected';
              } 
              elseif($cambio=='Automático'){
                $selected2='selected';
              }
          ?>

            <tr>
              <td><img src="<?php echo $imagem ?>" width="100"></td>
              <td><?php echo $marca ?></td>
              <td><?php echo $modelo ?></td>
              <td><?php echo $ano ?></td>
              <td><?php echo $cor ?></td>
              <td><?php echo $cambio ?></td>
              <td>R$ <?php echo $valor_diaria ?></td>
              <td>
                <a data-toggle="modal" data-target="#modalDetalhar<?php echo $i?>">
                  <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"> </i> Detalhar</button>
                </a>
                <a data-toggle="modal" data-target="#modal<?php echo $i?>">
                  <button class="btn btn-sm btn-success"> <i class="fa fa-pen"> </i> Editar</button>
                </a>
                <a href="?opc=deletar&id=<?php echo $id ?>">
                  <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')"> <i class="fa fa-times"> </i> Deletar</button>
                </a>
                
              </td>
            </tr>

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


            <!--FORMULARIOS DE EDIÇÃO-->

            <div class="modal fade" id="modal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

              <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Editar Carro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <!-- Default form register -->
                    <form class="text-center  p-3" method="post" action="?opc=atualizar">

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <label>Marca</label>
                                <input type="text" class="form-control" value="<?php echo $marca ?>" name="marca" required>
                            </div>
                            <div class="col">
                                <label>Modelo</label>
                                <!-- Last name -->
                                <input type="text"  class="form-control" value="<?php echo $modelo ?>" name="modelo" required>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <label>Ano</label>
                                <!-- First name -->
                                <input type="number" class="form-control" value="<?php echo $ano ?>" name="ano" required>
                            </div>
                            <div class="col">
                                <label>Cor</label>
                                <!-- Last name -->
                                <input type="text"  class="form-control" value="<?php echo $cor ?>" name="cor" required>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                              <label>Câmbio</label>
                              <select class="form-control" name="cambio" id="select">
                                <option value="Manual" <?php echo $selected1 ?>> Manual </option>
                                <option value="Automático" <?php echo $selected2 ?>> Automático </option>
                              </select>
                            </div>
                            <div class="col">
                                <label>Valor Diária</label>
                                <!-- Last name -->
                                <input type="number"  class="form-control" value="<?php echo $valor_diaria ?>" name="valor_diaria" required> 
                            </div>
                        </div>

                        <label>Imagem</label><br>
                        <img src="<?php echo $imagem ?>" width="200">
                        <br><br>
                        <input type="file" class="form-control mb-4" name="imagem">

                        <input type="hidden" name="id" value="<?php echo $id ?>">

                        <!-- Sign up button -->
                        <button class="btn mt-5 btn-block text-white" type="submit" style="background: #b71c1c;">Atualizar</button>


                    </form>
                    <!-- Default form register -->

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                </div>
              </div>
            </div>



          <?php
            }
          ?>
        </tbody>
       
      </table>

    </div>  

    <!-- Formulario de Cadastro -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-lg" role="document">


        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Cadastrar Novo Carro</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <!-- Default form register -->
            <form class="text-center  p-3" method="post" action="?opc=cadastrar">

                <div class="form-row mb-4">
                    <div class="col">
                        <label style="float:left;">Marca</label>
                        <!-- First name -->
                        <input type="text" class="form-control" placeholder="Ferrari, Lamborghini, McLaren, Audi..." name="marca" required>
                    </div>
                    <div class="col">
                        <label style="float:left;">Modelo</label>
                        <!-- Last name -->
                        <input type="text"  class="form-control" placeholder="Veneno, F1, Marianello, R8..." name="modelo" required>
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="col">
                        <label style="float:left;">Ano</label>
                        <!-- First name -->
                        <input type="number" class="form-control" placeholder="2000, 2018, 2005, 1996..." name="ano" required>
                    </div>
                    <div class="col">
                        <label style="float:left;">Cor</label>
                        <!-- Last name -->
                        <input type="text"  class="form-control" placeholder="Amarelo, Vermelho, Azul, Branco..." name="cor" required>
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="col">
                      <label style="float:left;">Câmbio</label>
                      <select class="form-control" name="cambio">
                        <option value="Manual"> Manual </option>
                        <option value="Automático"> Automático </option>
                      </select>
                    </div>
                    <div class="col">
                        <label style="float:left;">Valor da Diária</label>
                        <!-- Last name -->
                        <input type="number"  class="form-control" placeholder="R$500, R$420, R$732.31..." name="valor_diaria" required> 
                    </div>
                </div>
                <label style="float:left;">Imagem</label>
                <input type="file" class="form-control mb-4" name="imagem">

              
            
                <!-- Sign up button -->
                <button class="btn mt-5 btn-block text-white" type="submit" style="background: #b71c1c;">Cadastrar</button>


            </form>
            <!-- Default form register -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    
  
  <?php 
    include_once 'frontend/footer.php';  
  ?>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#dtBasicExample').DataTables();
    });
  </script>