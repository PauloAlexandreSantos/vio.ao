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

    <?php 
      include_once("conexao.php");
      $sqt = "SELECT unidade,localizacao,agente,endereco,horario FROM unidades ORDER BY unidade ASC";
      $results = mysqli_query($conn, $sqt);
      if (mysqli_num_rows($results) > 0):
        while ($fila = mysqli_fetch_array($results)):
       ?>
            <!--esquadras-->
    <ul class="collapsible">
      <li>
        <div class="collapsible-header">
          <h5 class="light"><?php echo $fila["unidade"];?></h5>
        </div>
        <div class="collapsible-body">     
          <div class="row">
            <div class="col s12">
              <h6> Localização:<?php echo $fila["localizacao"];?></h6>
              <h6> Agente Responsável:<?php echo $fila["agente"];?></h6>
              <h6> Endereço Telefônico:<?php echo $fila["endereco"];?></h6>
              <h6> Horário de Atendimento:<?php echo $fila["horario"];?></h6>
            </div>
          </div>
        </div>
      </li>
    </ul>
      <!--fim esquadras-->
      <?php
        endwhile;
      endif;
        ?>
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