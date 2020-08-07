

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
      <nav class="blue darken-4" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo" ><img src="logo.png" width="60" height="60" class="row hide-on-small-only"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="" >Requisição de documentos</a></li>

            <li><a href="pub.php">Publicar</a></li>
            <li><a href="BDcard.php">BASE DE DADOS</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">
            <li ><a href="" >Requisição de documentos</a></li>
            
            <li><a href="pub.php">Publicar</a></li>
            <li><a href="BDcard.php">BASE DE DADOS</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="Menus.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
    <!-- pesquisa --> 
      <div class="row">
        <div class="col s12">
   <form name="search_form" method="POST" action="" class="col s12" id="form-pesquisa">
        <div class="row">
          <br>
          <div class="input-field col s6">
            <input type="text" name="pesquisa"  class="validate" id="pesquisa">
            <label for="last_name">Digite o nome a procurar</label>
          </div> 
          <br>
          <button class="btn blue darken-4 waves-effect waves-light" type="submit" name="busca">Pesquisar</button>  
        </div>
      </form>
 
      <!-- fim pesquisa -->
      <?php
        include_once("conexao.php");
        if (isset($_POST['busca'])):
          if (!empty($_POST['pesquisa'])):

          echo'

             <table class="striped ">
        <thead>
          <tr>

              <th data-field="n" class="center">COD</th>
              <th data-field="nome">Nome Completo </th>
              <th data-field="doc">Documentos Perdidos</th>
              <th data-field="phone">Telefone</th>
              <th data-field="email">Email</th>
              <th data-field="morada">Cidade de perda</th>
              <th data-field="msg">Mensagem</th>
              <th data-field="data">Data da perda</th>
              <th data-field="dv" class="center">Devolver</th>
          </tr>
        </thead>
        <tbody>
          ';

           $pesquisar = filter_input(INPUT_POST, 'pesquisa',FILTER_SANITIZE_STRING);
            $result_pesq = " SELECT * FROM perdidos Where nome LIKE '$pesquisar%'";
            $resultado_pesq = mysqli_query($conn, $result_pesq);

            while ($row_pesq = mysqli_fetch_assoc($resultado_pesq)):
              ?>

              <tr>
                    <td class="center"><?php echo $row_pesq["id"]; ?></td>
                    <td><?php echo $row_pesq["nome"]; ?></td>
                    <td><?php echo $row_pesq["doc"]; ?></td>
                    <td><?php echo $row_pesq["phone"]; ?></td>
                    <td><?php echo $row_pesq["email"]; ?></td>
                    <td><?php echo $row_pesq["morada"]; ?></td>
                    <td><?php echo $row_pesq["mensagem"]; ?></td>
                    <td><?php echo $row_pesq["data"]; ?></td>
                    <td><a href="#modal<?php echo $row_pesq['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/plane.png"></a></td>


                     <!-- Modal Structure -->
                    <div id="modal<?php echo $row_pesq['id']; ?>" class="modal">
                      <div class="modal-content">
                       
                        <h5 class="light" >Tem certeza que deseja devolver esse pedido?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn red">CANCELAR</a>
                       
                        <form action="devolver.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row_pesq['id']; ?>">
                          <button type="submit" name="btn_devolver" class="btn indigo darken-4 light">Sim. quero devolver</button>

                        </form>
                      </div>
                    </div>
                </tr> 
                <?php endwhile;
                  else:
                    echo '    

                     <table class="striped ">
                         <thead>
                           <tr> 
                  
                               <th data-field="n" class="center">COD</th>
                               <th data-field="nome">Nome Completo </th>
                               <th data-field="doc">Documentos Perdidos</th>
                               <th data-field="phone">Telefone</th>
                               <th data-field="email">Email</th>
                               <th data-field="morada">Cidade de perda</th>
                               <th data-field="msg">Mensagem</th>
                               <th data-field="data">Data da perda</th>
                               <th data-field="dv" class="center">Devolver</th>
                           </tr>
                          </thead>
                         <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT id,nome, doc,data,phone, email,morada,mensagem FROM perdidos ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);    
         
            if (mysqli_num_rows($results) > 0):
              while ($fila = mysqli_fetch_array($results)):
          ?>
                <tr>
                    <td class="center"><?php echo $fila["id"]; ?></td>
               
                    <td><?php echo $fila["nome"]; ?></td>
                    <td><?php echo $fila["doc"]; ?></td>
                    <td><?php echo $fila["phone"]; ?></td>
                    <td><?php echo $fila["email"]; ?></td>
                    <td><?php echo $fila["morada"]; ?></td>
                    <td><?php echo $fila["mensagem"]; ?></td>
                    <td><?php echo $fila["data"]; ?></td>
                    <td class="center"><a href="#modal<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/plane.png"></a></td>

                  
                    <!-- Modal Structure -->
                    <div id="modal<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light" >Tem certeza que deseja devolver esse pedido?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn red">CANCELAR</a>
                       
                        <form action="devolver.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                          <button type="submit" name="btn_devolver" class="btn indigo darken-4 light">Sim. quero devolver</button>

                        </form>
                      </div>
                    </div>
                </tr>          
          <?php  endwhile; 

            else:
              echo '<td class="center">-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="center">-</td>';

          endif; ?>

        <?php endif; ?>

         <?php 
          else:

         echo '    
                     <table class="striped ">
                         <thead>
                           <tr>
                      
                               <th data-field="n" class="center">COD</th>
                               <th data-field="nome">Nome Completo </th>
                               <th data-field="doc">Documentos Perdidos</th>
                               <th data-field="phone">Telefone</th>
                               <th data-field="email">Email</th>
                               <th data-field="morada">Cidade de perda</th>
                               <th data-field="msg">Mensagem</th>
                               <th data-field="data">Data da perda</th>
                               <th data-field="dv" class="center">Devolver</th>
                           </tr>
                          </thead>
                         <tbody>';
          
            include_once("conexao.php");
            $sqt = "SELECT id,nome, doc,data,phone, email,morada,mensagem FROM perdidos ORDER BY id ASC";
            $results = mysqli_query($conn, $sqt);    
         
            if (mysqli_num_rows($results) > 0):
              while ($fila = mysqli_fetch_array($results)):
          ?>
                <tr>
                    <td class="center"><?php echo $fila["id"]; ?></td>
                    <td><?php echo $fila["nome"]; ?></td>
                    <td><?php echo $fila["doc"]; ?></td>
                    <td><?php echo $fila["phone"]; ?></td>
                    <td><?php echo $fila["email"]; ?></td>
                    <td><?php echo $fila["morada"]; ?></td>
                    <td><?php echo $fila["mensagem"]; ?></td>
                    <td><?php echo $fila["data"]; ?></td>
                    <td class="center"><a href="#modal<?php echo $fila['id']; ?>" class="btn-floating white modal-trigger"><img src="asset/plane.png"></a></td>

                  
                    <!-- Modal Structure -->
                    <div id="modal<?php echo $fila['id']; ?>" class="modal ">
                      <div class="modal-content">
                       
                        <h5 class="light" >Tem certeza que deseja devolver esse pedido?</h5>
                      </div>
                      <div class="modal-footer">
                        <a href="" class="btn red">CANCELAR</a>
                       
                        <form action="devolver.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                          <button type="submit" name="btn_devolver" class="btn indigo darken-4 light">Sim. quero devolver</button>

                        </form>
                      </div>
                    </div>




                </tr>          
          <?php  endwhile; 

            else:
              echo '<td class="center">-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="center">-</td>';
                    endif; ?>


       <?php  endif; ?>

         
        </tbody>
      </table>
        </div>
      </div>

    <footer class="page-footer blue darken-4">
      
      <div class="footer-copyright">
        <div class="container">
        Desenvolvido por <a class="white-text">Paulo Alexandre Fernandes dos Santos</a>
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
