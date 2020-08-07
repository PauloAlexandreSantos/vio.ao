

<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf8">
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
            <li><a href="home.php" class="modal-trigger">Requisição de documentos</a></li>
  
            <li><a href="" class="modal-trigger">Publicar</a></li>
            <li><a href="BDcard.php" class="modal-trigger">BASE DE DADOS</a></li>
          </ul>
          <ul id="nav-mobile" class="side-nav">
            <li ><a href="home.php" class="modal-trigger">Requisição de documentos</a></li>
    
            <li><a href="" class="modal-trigger">Publicar</a></li>
            <li><a href="BDcard.php" class="modal-trigger">BASE DE DADOS</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="Menus.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
    <!--formulário de publicações-->
         <div class="row">
        <form class=" col s12" action="" method="POST" enctype="multipart/form-data">
          <h4 class="light"> Publicar e Salvar na Base de dados</h4><br>

          <div class="input-field col s6">
            <input type="text" id="nome" name="nome" required="obrigatório">
            <label for="nome">Nome</label>
          </div>
          
          <div class="input-field col s6">
               <select  name="tipo" required="obrigatório">
                <option value=" " disabled selected>Tipo de Documentação</option>
                <option value="Autorização de Porte de arma ">Autorização de Porte de arma</option>
                <option value="Autorização de residência permanente ">Autorização de residência permanente</option>
                <option value="Autorização de residência temporária ">Autorização de residência temporária</option>
                <option value="Bilhete de identidade ">Bilhete de identidade</option>
                <option value="Boletim de nascimento ">Boletim de nascimento</option>
                <option value="Carta de condução ">Carta de condução</option>
                <option value="Carta estrangeira ">Carta estrangeira</option>
                <option value="Cartão de contribuinte ">Cartão de contribuinte</option>
                <option value="Cartão de crédito ">Cartão de crédito</option>
                <option value="Cartão de débito ">Cartão de débito</option>
                <option value="Cartão de eleitor ">Cartão de eleitor</option>
                <option value="Cartão de identificação de pessoa colectiva ">Cartão de identificação de pessoa colectiva</option>
                <option value=" Cartão de inscrição consular">Cartão de inscrição consular</option>
                <option value="Cartão de residência ">Cartão de residência</option>
                <option value="Cartão de saúde ">Cartão de saúde</option>
                <option value="Cartão de segurança social ">Cartão de segurança social</option>
                <option value="Cartão de utente ">Cartão de utente</option>
                <option value="Cartão escolar ">Cartão escolar</option>
                <option value="Cédula de matrícula ">Cédula de matrícula</option>
                <option value="Cédula pessoal ">Cédula pessoal</option>
                <option value="Cédula profissional ">Cédula profissional</option>
                <option value="Certidão de nasciment ">Certidão de nascimento</option>
                <option value="Certificado de matrícula ">Certificado de matrícula</option>
                <option value="Certificado de seguro ">Certificado de seguro</option>
                <option value="Ficha de inspecção ">Ficha de inspecção</option>
                <option value="Licença de aprendizagem ">Licença de aprendizagem</option>
                <option value="Licença de condução ">Licença de condução</option>
                <option value="Licença de uso e porte de armas ">Licença de uso e porte de armas</option>
                <option value="Licença especial ">Licença especial</option>
                <option value="Licença internacional ">Licença internacional</option>
                <option value="Livrete ">Livrete</option>
                <option value="Passaporte ">Passaporte</option>
                <option value=" Registo de propriedade">Registo de propriedade</option>
                <option value="Título de residência ">Título de residência</option>
              </select>  
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

          <div class="input-field col s6" >
               <select  name="unit" required="obrigatório">
                  <option value="" disabled selected>Unidade que se encontra com os documentos</option>

          <?php 
              include_once("conexao.php");
              $sqt = "SELECT unidade FROM unidades ORDER BY unidade ASC";
              $results = mysqli_query($conn, $sqt);
              if (mysqli_num_rows($results) > 0):
              while ($fila = mysqli_fetch_array($results)):
          ?>
          
                  <option value="<?php echo $fila["unidade"] ?>" ><?php echo $fila["unidade"] ?></option>
            <?php   endwhile; endif;?>
                </select>
           </div>


  
           <div class="file-field input-field col s12">
              <div class="btn  blue darken-4">
                <span>Buscar Imagem</span>
                <input type="file" name="arquivo">
              </div>
              <div class="file-path-wrapper">
               <input class="file-path validate" type="text">
             </div>
           </div>
           <?php 

           if (isset($_POST['btn2'])):
              $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "jfif");
              $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

              if(in_array($extensao, $formatosPermitidos)):
                $pasta = "../BDasset/";
               

                $temporario = $_FILES['arquivo']['tmp_name'];
                

                $novoNome=$_POST['tipo']." ".$_POST['nome'];

                  if (move_uploaded_file($temporario, $pasta.$novoNome)):
                 
                  endif;
           
              endif;
           endif;
            
            ?>
          

  
            <div class="col s12">


            <button class="btn green waves-effect waves-light col s12 " type="submit" name="btn2" >SALVAR E PUBLICAR</button></div>
        </form>
      </div>
      
     <?php 
       include_once("conexao.php");
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
        $tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_STRING);
        $data =  date("d-m-Y");
        $Provincia = filter_input(INPUT_POST,'Provincia', FILTER_SANITIZE_STRING);
        $unit = filter_input(INPUT_POST,'unit', FILTER_SANITIZE_STRING);

        if(isset($_POST['nome']))
        {
        $result_feedback = "INSERT INTO obtidos (nome,tipo,data,provincia, unidade) VALUE ('$nome','$tipo','$data','$Provincia', '$unit')";
         $resultado_feedback = mysqli_query($conn, $result_feedback);
        }

        
     ?>



     





    <!--end-->
    
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
        $(document).ready(function() {
    $('select').material_select();
  });
    </script>

  </body>

</html>

