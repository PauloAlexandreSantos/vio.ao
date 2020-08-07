<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Viu.ao</title>

    <!-- CSS  -->
    <!--Importação de fontes google-->

    <!--Núcleo CSS do Materialize-->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Meu núcleo CSS-->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
  </head>
  <body >

   
    <!--documentos obtidos-->
    <div class="row">
      <label class="col s12 center-align"><h4 class="blue-text text-darken-2">Documentos em posse da polícia Nacional </h4></label>
    
      <!-- pesquisa -->
      <form name="search_form" method="POST" action="" class="col s12" id="form-pesquisa">

         <div class="input-field col s6 ">
            <input type="text" name="pesquisa"  class="validate" id="pesquisa">
            <label for="last_name" class="black-text text-darken-1">Digite o nome que esta no documento</label>
          </div>     
          <br>     
          <button class="btn blue darken-4 waves-effect waves-light " type="submit" name="busca">Procurar</button>



        <?php 

          include_once("conexao.php");
          if (isset($_POST['busca'])):

            if (!empty($_POST['pesquisa'])): ?>


              <a href="" class="right" name="ver"><img src="asset/icon/Eye_50px.png"></a>
      </form>
    </div>
    <!-- fim pesquisa -->  
    
 
     
         
    <?php
            echo '
              <table class="striped ">
              <thead >
                <tr>
                <th data-field="arquivo">FOTO</th>
                <th data-field="nome">Nome que esta no documento</th>
                <th data-field="tipo">Tipo de documento</th>
                <th data-field="tipo">Provincia que encontramos</th>
                <th data-field="unit">Unidade onde esta o documento</th>
                <th data-field="data">Data que encontramos</th>
                </tr>
              </thead><tbody>';

            $pesquisar = filter_input(INPUT_POST, 'pesquisa',FILTER_SANITIZE_STRING);
            $result_pesq = " SELECT * FROM obtidos Where nome LIKE '$pesquisar%'";
            $resultado_pesq = mysqli_query($conn, $result_pesq);

            while ($row_pesq = mysqli_fetch_assoc($resultado_pesq)):
              ?>
                   
                   <tr>
                    <td><img class="materialboxed" data-caption="<?php echo $row_pesq["nome"]."-".$row_pesq["tipo"]; ?>" width="50" src="../servidor/BDasset/<?php echo $row_pesq["tipo"]." ".$row_pesq["nome"] ?>"></td> 

                    <td><?php echo $row_pesq["nome"]; ?></td>
                    <td><?php echo $row_pesq["tipo"]; ?></td>
                    <td><?php echo $row_pesq["provincia"]; ?></td>
                    <td><?php echo $row_pesq["unidade"]; ?></td>
                    <td><?php echo $row_pesq["data"]; ?></td>
  
        
                </tr> 
               <?php   endwhile;?>
                  
            <?php    else:
                       if (empty($_POST['pesquisa']) or isset($_POST['ver'])) {
                        
                     

       
                  echo '<iframe src="tabela.php" height="520px" width="100%" style="border:none;"></iframe>';  }
                endif;

              else:
                  if (!isset($_POST['busca']) or isset($_POST['ver'])) {
                  
                 

                echo'<iframe src="tabela.php" height="520px" width="100%" style="border:none;"></iframe>'; }

              
                endif; ?>

              </tdoby>
            </table>
            


  <script src="js/jquery-1.11.3.js"></script>

    <script src="js/materialize.js"></script>
 
   <script src="js/init.js"></script>

  
  <script type="text/javascript">
     
 //menu mobile
         $(".button-collapse").sideNav();
    </script>

  
  <script type="text/javascript">
   
   //modal pesquisar
      $(document).ready(function(){
    
    $('.modal-trigger').leanModal({dismissible:false });

 
    $('.slider').slider({full_width: false});
    


    });
  </script>
  
<script type="text/javascript">
    
$(document).ready(function 
    });
  </script>

  <script type="text/javascript">
    
  
   $(document).ready(function() {
   
 $('select').material_select();
  });
  </script>
 
 <script type="text/javascript">
    
   
  $(document).ready(function() {
   
 $('input#input_text, tel').characterCounter();
  });
   
    $(document).ready(function(){
  
  $('.materialboxed').materialbox();
  });
  </script>
 
 
  </body>
</html>
