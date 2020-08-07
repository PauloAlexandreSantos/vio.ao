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
  <body>
    <!--Menu-->
    <div class="navbar-fixed">
      <nav class="blue darken-4 z-depth-2" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container"  class="brand-logo" ><img src="logo.png" width="60" height="60" class="row hide-on-small-only"></a>
          <ul class="right hide-on-med-and-down">
          
            <li><a href="index.php" class="">Voltar a janela principal</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
      
          
            <li><a href="index.php" class="">Voltar a janela principal</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="asset/icon/More_48px.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
   <div class="slider">
      <ul class="slides">
        <li>
          <img src="asset/maps.PNG" class="responsive-img"> 
          <div class="caption center-align white">
            <h4 class=" blue-text text-darken-3 light center-align">Localização das Unidades Policias de Angola</h4><h6 class="light blue-text text-darken-3 light center-align">Procure a Unidade onde se encontra seu Documento!</h6><br>
            <div class="row">
            <form name="search_form" method="POST" action="" class="col s12" id="form-pesquisa">
              <div class="input-field col s12">
                <input type="text" name="pesquisa"  class="validate black-text">
                <label for="last_name" class="blue-text text-darken-4">Digite a unidade a procurar</label>
              </div>         
              <button class="btn blue darken-4 waves-effect waves-light " type="submit" name="busca">Procurar</button>
            </form></div>
          </div>
        </li>
      </ul>
    </div>  

    <?php 

          include_once("conexao.php");
          if (isset($_POST['busca'])):
            if (!empty($_POST['pesquisa'])): 
         
          
            $pesquisar = filter_input(INPUT_POST, 'pesquisa',FILTER_SANITIZE_STRING);
            $result_pesq = " SELECT unidade,localizacao,agente,endereco,horario FROM unidades Where unidade LIKE '%$pesquisar%'";
            $resultado_pesq = mysqli_query($conn, $result_pesq);

            while ($row_pesq = mysqli_fetch_assoc($resultado_pesq)):
              ?>
                   
            <ul class="collapsible">
              <li>
                <div class="collapsible-header">
                  <h5 class="light"><?php echo $row_pesq["unidade"];?></h5>
                </div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="col s12">
                    <h6> Localização:<?php echo $row_pesq["localizacao"];?></h6>
                    <h6> Agente Responsável:<?php echo $row_pesq["agente"];?></h6>
                    <h6> Endereço Telefônico:<?php echo $row_pesq["endereco"];?></h6>
                    <h6> Horário de Atendimento:<?php echo $row_pesq["horario"];?></h6>
                    </div>
                  </div>
                </div>
              </li>
            </ul> 
            <?php   endwhile;?>
                  
            <?php    else:
                       echo '<iframe src="tabmap.php" width="100%" height="362px" style="border:none;"></iframe>';  
                endif;

              else:
               
                echo'<iframe src="tabmap.php" width="100%" height="362px" style="border:none;"></iframe>'; 

              
                endif; ?>

              </tdoby>
            </table>




    




    
     

    <!--end-->
    
    <footer class="page-footer  blue darken-4">
      
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
  <script type="text/javascript">
    
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);

  });


  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  $(document).ready(function(){
    $('.slider').slider({
      indicators: false
    });
  });
  </script>
  </body>

</html>

