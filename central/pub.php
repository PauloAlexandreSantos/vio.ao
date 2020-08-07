

<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf8">
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
            <li><a href="home.php" class="modal-trigger">Requisição de documentos</a></li>
  
            <li><a href="" class="modal-trigger">Publicar</a></li>
            <li><a href="BDcard.php" class="modal-trigger">BASE DE DADOS</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">
            <li ><a href="home.php" class="modal-trigger">Requisição de documentos</a></li>
   
            <li><a href="" class="modal-trigger">Publicar</a></li>
            <li><a href="BDcard.php" class="modal-trigger">BASE DE DADOS</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="cid/Home.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
    <!--formulário de publicações-->
         <div class="row">
        <form class=" col s12" action="" method="POST" enctype="multipart/form-data">
          <h4 class="light">Cadastramento de unidades</h4><br>

          <div class="input-field col s6">
            <input type="text" id="nome" name="nome" required="obrigatório">
            <label for="nome">Nome</label>
          </div>
          
          <div class="input-field col s6">
               
            </div>

       
          <div class="input-field col s6" >
               <select  name="Provincia" required="obrigatório">
                  <option value="" disabled selected>Provincia que foi encontrado?</option>
                  <option value="Bengo" >Bengo</option>
                  <option value="Benguela">Benguela</option>
                  <option value="Bíe">Bíe</option>
                  <option value="Cabinda">Cabinda</option>
                  <option value="Cuando Cubango">Cuando Cubango</option>
                  <option value="Cuanza-Norte ">Cuanza-Norte </option>
                  <option value="Cuanza-Sul">Cuanza-Sul</option>
                  <option value="Cunene">Cunene</option>
                  <option value="Huambo">Huambo</option>
                  <option value="Huíla">Huíla</option>
                  <option value="Luanda">Luanda</option>
                  <option value="Lunda-Norte">Lunda-Norte</option>
                  <option value="Lunda-Sul">Lunda-Sul</option>
                  <option value="Malanje">Malanje</option>
                  <option value="Moxico">Moxico</option>
                  <option value="Namibe">Namibe</option>
                  <option value="Uíge">Uíge</option>
                  <option value="Zaíre">Zaíre</option>
                </select>
           </div>

          <div class="input-field col s6">
            <input type="date" id="data"  name="data" required="obrigatório"> 
          </div>       

          <button class="btn green waves-effect waves-light col s12 " type="submit" name="btn2" >Cadastrar</button>
        </form>
      </div>
      
     <?php 
       include_once("conexao.php");
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
        $tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST,'data', FILTER_SANITIZE_STRING);
        $Provincia = filter_input(INPUT_POST,'Provincia', FILTER_SANITIZE_STRING);
        $unit = filter_input(INPUT_POST,'unit', FILTER_SANITIZE_STRING);

        if(isset($_POST['nome']))
        {
        $result_feedback = "INSERT INTO unidades (nome,tipo,data,provincia, unidade) VALUE ('$nome','$tipo','$data','$Provincia', '$unit')";
         $resultado_feedback = mysqli_query($conn, $result_feedback);
        }

        
     ?>



     





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
        $(document).ready(function() {
    $('select').material_select();
  });
    </script>

  </body>

</html>

