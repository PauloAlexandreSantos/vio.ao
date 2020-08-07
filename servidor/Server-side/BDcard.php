

<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Administrador PN</title>

    <!-- CSS  -->
    <!--Importação de fontes google-->

    <!--Núcleo CSS do Materialize-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Meu núcleo CSS-->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
  </head>
  <body>
    <!--Menu-->
    <div class="navbar-fixed">
      <nav class=" blue darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo" ><img src="logo.png" width="60" height="60" class="row hide-on-small-only"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="home.php" class="">Requisição de documentos</a></li>
      
            <li><a href="pub.php" class="">Publicar</a></li>
            <li><a href="" class="">BASE DE DADOS</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">
            <li ><a href="home.php" class="">Requisição de documentos</a></li>
        
            <li><a href="pub.php" class="">Publicar</a></li>
            <li><a href="" class="">BASE DE DADOS</a></li>
            
          </ul>
          <a href="" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="Menus.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
    <!--formulário de publicações-->
      <!--documentos obtidos-->
       <div class="row ">
            <div class="col s12">
         <label ><h2 class="light">BASE DE DADOS</h2></label>
      <!-- pesquisa -->
    
 
      <form name="search_form" method="POST" action="" class="col s12" id="form-pesquisa">

          <div class="input-field col s6">
            <input type="text" name="pesquisa"  class="validate" id="pesquisa">
            <label for="last_name">Digite o nome a procurar</label>
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
                  <th data-field="arquivo">FOTO</th>
                  <th data-field="nome">Nome que esta no documento</th>
                  <th data-field="tipo">Tipo de documento </th>
                  <th data-field="provincia">P/encontramos</th>
                  <th data-field="unit">Unidade onde esta o documento</th>
                  <th data-field="data">Data que encontramos</th>
                  <th data-field="ex" class="center">Excluir</th>
                  <th data-field="dv" class="center">Devolver</th>
                  <th data-field="em" class="center">Email</th>
                  <th data-field="sms" class="center">SMS</th>
                </tr>
              </thead><tbody>';

            $pesquisar = filter_input(INPUT_POST, 'pesquisa',FILTER_SANITIZE_STRING);
            $result_pesq = " SELECT id,nome, tipo, data, provincia, unidade FROM obtidos Where nome LIKE '%$pesquisar%'";
            $resultado_pesq = mysqli_query($conn, $result_pesq);

            while ($row_pesq = mysqli_fetch_assoc($resultado_pesq)):
              ?>
                
          
                  <tr>
                    <td class="center"><?php echo $row_pesq["id"]; ?></td>
                    <td><img class="materialboxed" data-caption="<?php echo $row_pesq["nome"]."-".$row_pesq["tipo"]; ?>" width="50" src="../BDasset/<?php echo $row_pesq["tipo"]." ".$row_pesq["nome"] ?>"></td> 
     
                    <td><?php echo $row_pesq["nome"]; ?></td>
                    <td><?php echo $row_pesq["tipo"]; ?></td>
                    <td><?php echo $row_pesq["provincia"]; ?></td>
                    <td><?php echo $row_pesq["unidade"]; ?></td>
                    <td><?php echo $row_pesq["data"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $row_pesq['id']; ?>" class="btn-floating  white modal-trigger"><img src="asset/delete.png"></a></td>
                    <td class="center"><a href="#modal2<?php echo $row_pesq['id']; ?>" class="btn-floating  white modal-trigger"><img src="asset/print.png"></a></td>
                    <td class="center"><a href="#modal3<?php echo $row_pesq['id']; ?>" class="btn-floating  white modal-trigger"><img src="asset/gmail.png"></a></td>
                    <td class="center"><a href="#modal4<?php echo $row_pesq['id']; ?>" class="btn-floating  white modal-trigger"><img src="asset/sms.png"></a></td>
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
                      <!-- Modal Structure imprimir -->
                    <div id="modal2<?php echo $row_pesq['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que é este documento?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="imprimir.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row_pesq['id']; ?>">
                          <button type="submit" name="btn_bd" class="btn green accent-4 light">SIM</button>

                        </form>
                      </div>
                    </div>



                       <!-- Modal Structure email -->
                  <div id="modal3<?php echo $row_pesq['id']; ?>" class="modal ">
                    <div class="modal-content">
                      <div class="row">
                          <h5 class="light text-black" >Enviar mensagem de busca</h5><br>
                            <form action="email.php" method="POST">
                              <?php 
                                  include 'conexao.php';
                                    $id = mysqli_escape_string($conn, $row_pesq['id']);
                                    $sqt = "SELECT * FROM obtidos Where id = '$id'";

                                   if ($results = mysqli_query($conn, $sqt)){ 
                                      while ($row_pesq = mysqli_fetch_assoc($results)){

                                ?>

                                <div class="input-field col s6">
                                  <input disabled id="disabled"  class="validate"  type="text" value="<?php echo $row_pesq["nome"]; ?>" name="nome" >
                                  <label for="disabled">Nome do Requerente</label>
                                </div>

                                 <div class="input-field col s6">
                                  <input disabled id="disabled"  class="validate" type="text" value="<?php echo $row_pesq["tipo"]; ?>" name="tipo" >
                                  <label for="disabled">Tipo de Documento</label>
                                </div>
                                <div class="row">
        
                                <div class="input-field col s6">
                                  <input disabled id="disabled"  class="validate" type="text" value="<?php echo $row_pesq["provincia"]; ?>" name="provincia" >
                                  <label for="disabled">Provincia que encontramos</label>
                                </div>

                                <div class="input-field col s6">
                                  <input disabled id="disabled"  class="validate" type="text" value="<?php echo $row_pesq["data"]; ?>" name="data" >
                                  <label for="disabled">Data que encontramos</label>
                                </div>
                                <div class="input-field col s6">
                                  <input disabled id="disabled"  class="validate" type="text" value="<?php echo $row_pesq["unidade"]; ?>" name="unidade" >
                                  <label for="disabled">Unidade que se encontra</label>
                                </div>
                                 <div class="input-field col s12">
                                  <input  class="validate" type="email" name="email" required="">
                                  <label for="disabled" data-error="Email Inválido">Email a enviar mensagem</label>
                                </div>
                              <?php }} ?>
                            <div class="modal-footer">
                              <a href="" class="btn grey darken-1">CANCELAR</a>
                              <input type="hidden" name="id" value="<?php echo $row_pesq['id']; ?>">
                              <button type="submit" name="btn_bd" class="btn green accent-4 light">ENVIAR</button>
                            </div>
                          </form>
                          </div>
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
              <th data-field="arquivo">FOTO</th>
              <th data-field="nome">Nome que esta no documento</th>
              <th data-field="tipo">Tipo de documento </th>
              <th data-field="provincia">P/encontramos</th>
              <th data-field="unit">Unidade onde esta o documento</th>
              <th data-field="data">Data que encontramos</th>
              <th data-field="ex" class="center">Excluir</th>
              <th data-field="dv" class="center">Devolver</th>
        
          </tr>
        </thead>

        <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT id,nome, tipo, data, provincia, unidade FROM obtidos ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);
            if (mysqli_num_rows($results) > 0):
			
              while ($fila = mysqli_fetch_array($results)):
          ?>

             <tr>   
                    <td class="center"><?php echo $fila["id"]; ?></td>
			
                    <td><img class="materialboxed" data-caption="<?php echo $fila["nome"]."-".$fila["tipo"]; ?>" width="50" src="../BDasset/<?php echo $fila["tipo"]." ".$fila["nome"]; ?>">
          </td>
                    
                    <td><?php echo $fila["nome"]; ?></td>
                    <td><?php echo $fila["tipo"]; ?></td>
                    <td><?php echo $fila["provincia"]; ?></td>
                    <td><?php echo $fila["unidade"]; ?></td>

                    <td><?php echo $fila["data"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/delete.png"></a></td>
                    <td class="center"><a href="#modal2<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/print.png"></a></td>
   

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
                      <!-- Modal Structure imprimir -->
                    <div id="modal2<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que é este documento?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="imprimir.php" method="POST">
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
              <th data-field="arquivo">FOTO</th>
              <th data-field="nome">Nome que esta no documento</th>
              <th data-field="tipo">Tipo de documento </th>
              <th data-field="provincia">P/encontramos</th>
              <th data-field="unit">Unidade onde esta o documento</th>
              <th data-field="data">Data que encontramos</th>
              <th data-field="ex" class="center">Excluir</th>
              <th data-field="dv" class="center">Devolver</th>
  
          </tr>
        </thead>

        <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT id,nome, tipo, data, provincia, unidade FROM obtidos ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);
            if (mysqli_num_rows($results) > 0):
      
              while ($fila = mysqli_fetch_array($results)):
          ?>

             <tr>   
                    <td class="center"><?php echo $fila["id"]; ?></td>
      
                    <td><img class="materialboxed" data-caption="<?php echo $fila["nome"]."-".$fila["tipo"]; ?>" width="50" src="../BDasset/<?php echo $fila["tipo"]." ".$fila["nome"]; ?>">
          </td>
                    
                    <td><?php echo $fila["nome"]; ?></td>
                    <td><?php echo $fila["tipo"]; ?></td>
                    <td><?php echo $fila["provincia"]; ?></td>
                    <td><?php echo $fila["unidade"]; ?></td>
                    <td><?php echo $fila["data"]; ?></td>
                    <td class="center"><a href="#modalx<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/delete.png"></a></td>
                    <td class="center"><a href="#modal2<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/print.png"></a></td>



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
                      <!-- Modal Structure imprimir -->
                    <div id="modal2<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light text-black" >Tem a certeza que é este documento?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn grey darken-1">CANCELAR</a>
                       
                        <form action="imprimir.php" method="POST">
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
    
    <footer class="page-footer blue darken-4">

      
      <div class="footer-copyright">
        <div class="container">
        Desenvolvido por <a class="white-text ">Paulo Alexandre Fernandes dos Santos</a>
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
