

<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>central</title>

    <!-- CSS  -->
    <!--Importação de fontes google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Núcleo CSS do Materialize-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Meu núcleo CSS-->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
  </head>
  <body>
    <!--Menu-->
    <div class="navbar-fixed">
      <nav class=" indigo darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo" ><img src="logo.png" width="60" height="60" class="row hide-on-small-only"></a>
          <ul class="right hide-on-med-and-down">
   			 <li><a href="pub.php" class="">CADASTRAR</a></li>
            <li><a href="" class="">BASE DE DADOS</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">
          	 <li><a href="pub.php" class="">CADASTRAR</a></li>
            <li><a href="" class="">BASE DE DADOS</a></li>
            
          </ul>
          <a href="" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="cid/Home.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
    <!--formulário de publicações-->
      <!--documentos obtidos-->
       <div class="row ">
            <div class="col s12">
         <label ><h2 class="light">Unidades</h2></label>
      <!-- pesquisa -->
    
 
      <form name="search_form" method="POST" action="" class="col s12" id="form-pesquisa">

          <div class="input-field col s6">
            <input type="text" name="pesquisa"  class="validate" id="pesquisa">
            <label for="last_name">Digite a unidade a procurar</label>
          </div> 
          <br>
          <button class="btn indigo darken-4 waves-effect waves-light" type="submit" name="busca">Pesquisar</button>  
       
      </form><br>

      <!-- fim pesquisa -->
      <?php
        include_once("conexao.php");
        if (isset($_POST['busca'])):
          if (!empty($_POST['pesquisa'])):
            
            echo '
              <table class="striped ">
              <thead >
                <tr>
                  <th data-field="id">COD</th>
      
                  <th data-field="nome">Nome que esta no documento</th>
                  <th data-field="tipo">Tipo de documento </th>
                  <th data-field="provincia">P/encontramos</th>
                  <th data-field="unit">Unidade onde esta o documento</th>
                  <th data-field="data">Data que encontramos</th>
                  <th data-field="ex" class="center">Excluir</th>
                
                </tr>
              </thead><tbody>';

            $pesquisar = filter_input(INPUT_POST, 'pesquisa',FILTER_SANITIZE_STRING);
            $result_pesq = " SELECT * FROM unidades Where unidade LIKE '$pesquisar'";
            $resultado_pesq = mysqli_query($conn, $result_pesq);

            while ($row_pesq = mysqli_fetch_assoc($resultado_pesq)):
              ?>
                
          
                  <tr>
                    <td class="center"><?php echo $row_pesq["id"]; ?></td>
                   
     
                    <td><?php echo $row_pesq["unidade"]; ?></td>
                    <td><?php echo $row_pesq["localizacao"]; ?></td>
                    <td><?php echo $row_pesq["agente"]; ?></td>
                    <td><?php echo $row_pesq["endereco"]; ?></td>
                    <td><?php echo $row_pesq["horario"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $row_pesq['id']; ?>" class="btn-floating red modal-trigger"></a></td>
                   
                     <!-- Modal Structure eliminar -->
                    <div id="modalx<?php echo $row_pesq['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que de seja apagar este documento?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="bddev.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row_pesq['id']; ?>">
                          <button type="submit" name="btn_bd" class="btn green accent-4 light">SIM</button>

                        </form>
                      </div>
                    </div>
                    
                </tr> 
                <?php endwhile;

              else:
                echo '

         <table class="striped">
        <thead>
          <tr>
              <th data-field="id">COD</th>

              <th data-field="nome">Nome que esta no documento</th>
              <th data-field="tipo">Tipo de documento </th>
              <th data-field="provincia">P/encontramos</th>
              <th data-field="unit">Unidade onde esta o documento</th>
              <th data-field="data">Data que encontramos</th>
              <th data-field="ex" class="center">Excluir</th>
      
          </tr>
        </thead>

        <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT * FROM unidades ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);
            if (mysqli_num_rows($results) > 0):
			
              while ($fila = mysqli_fetch_array($results)):
          ?>

             <tr>   
                    <td class="center"><?php echo $fila["id"]; ?></td>
                   
                    <td><?php echo $fila["unidade"]; ?></td>
                    <td><?php echo $fila["localizacao"]; ?></td>
                    <td><?php echo $fila["agente"]; ?></td>
                    <td><?php echo $fila["endereco"]; ?></td>
                    <td><?php echo $fila["horario"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $fila['id']; ?>" class="btn-floating red modal-trigger"></a></td>
                


                   <!-- Modal Structure eliminar -->
                    <div id="modalx<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que de seja apagar este documento?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="bddev.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                          <button type="submit" name="btn_bd" class="btn green accent-4 light">SIM</button>

                        </form>
                      </div>
                    </div>
             
              </tr>          
          <?php  endwhile; 

            else:
              echo "<td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>";

          endif; ?>
        <?php endif; ?>
        <?php

            else:
               echo '

         <table class="striped">
        <thead>
          <tr>
              <th data-field="id">COD</th>

              <th data-field="nome">Nome que esta no documento</th>
              <th data-field="tipo">Tipo de documento </th>
              <th data-field="provincia">P/encontramos</th>
              <th data-field="unit">Unidade onde esta o documento</th>
              <th data-field="data">Data que encontramos</th>
              <th data-field="ex" class="center">Excluir</th>

          </tr>
        </thead>

        <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT * FROM unidades ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);
            if (mysqli_num_rows($results) > 0):
      
              while ($fila = mysqli_fetch_array($results)):
          ?>

             <tr>   
                    <td class="center"><?php echo $fila["id"]; ?></td>
                    <td><?php echo $fila["unidade"]; ?></td>
                    <td><?php echo $fila["localizacao"]; ?></td>
                    <td><?php echo $fila["agente"]; ?></td>
                    <td><?php echo $fila["endereco"]; ?></td>
                    <td><?php echo $fila["horario"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $fila['id']; ?>" class="btn-floating red modal-trigger"></a></td>
                 

                     <!-- Modal Structure eliminar -->
                    <div id="modalx<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que de seja apagar este documento?</h5>
                      </div>
                      <div class="modal-footer">
                       <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="bddev.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                          <button type="submit" name="btn_bd" class="btn green accent-4 light">SIM</button>

                        </form>
                      </div>
                    </div>

              </tr>          
          <?php  endwhile; 

            else:
              echo "<td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>";

          endif; ?>


          <?php    endif; ?>
        </tbody>
      </table>
    </div></div>
    <!--end-->

    <!--end-->
    
    <footer class="page-footer   indigo darken-4">

      
      <div class="footer-copyright">
        <div class="container">
        Desenvolvido por <a class="white-text text-blue lighten-5" href="">Paulo Alexandre Fernandes dos Santos</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

   <script type="text/javascript">
      //menu mobile
         $(".button-collapse").sideNav();
    </script>
    <script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    <script type="text/javascript">
      
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal({
      dismissible: false,});
  });
    </script>
    <script type="text/javascript" src="js/personalizado.js"></script>

  </body>

</html>
