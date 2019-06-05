  <?php 
    include_once 'frontend/header.php';
    include_once 'frontend/navbar.php';
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
          <tr>
            <td>Chevrolet</td>
            <td>Camaro</td>
            <td>2018</td>
            <td>Amarelo</td>
            <td>Manual</td>
            <td>R$350</td>
            <td>
              <a href="">
                <button class="btn btn-sm btn-success"> <i class="fa fa-pen"> </i> Editar</button>
              </a>
              <a href="">
                <button class="btn btn-sm btn-danger"> <i class="fa fa-times"> </i> Deletar</button>
              </a>
              
            </td>
          </tr>
        </tbody>
       
      </table>

    </div>  


    <!-- Central Modal Small -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-sm text-white" style="background:#b71c1c;">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Central Modal Small --> 
  

  
 <?php 
    include_once 'frontend/footer.php';  
?>

<script type="text/javascript">
    $(document).ready(function () {
      $('#dtBasicExample').DataTables();
    });
  </script>