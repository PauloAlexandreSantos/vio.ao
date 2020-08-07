
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
        </thead>

        <tbody>
          <?php 
            include_once("conexao.php");
            $sqt = "SELECT * FROM obtidos ORDER BY id DESC";
            $results = mysqli_query($conn, $sqt);
            if (mysqli_num_rows($results) > 0):
              while ($fila = mysqli_fetch_array($results)):
          ?>


              <tr>
                    <td><img class="materialboxed" data-caption="<?php echo $fila["nome"]."-".$fila["tipo"]; ?>" width="50" src="../servidor/BDasset/<?php echo $fila["tipo"]." ".$fila["nome"] ?>"></td> 

                    <td><?php echo $fila["nome"]; ?></td>
                    <td><?php echo $fila["tipo"]; ?></td>
                    <td><?php echo $fila["provincia"]; ?></td>
                    <td><?php echo $fila["unidade"]; ?></td>
                    <td><?php echo $fila["data"]; ?></td>
  
        
                </tr>          
          <?php  endwhile; 

            else:
              echo "<td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
              ";
          endif; ?>
        </tbody>
      </table>
      
      
    <!--end-->
   
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
 
 </body>
  
</html>
