

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
        <div class="nav-wrapper container"><a id="logo-container"  class="brand-logo" ><img src="logo.png" width="58" height="60" class="row hide-on-small-only"></a>

          <ul class="right hide-on-med-and-down">

            <li><a href="#ask" class="modal-trigger">Procurando Documentos?</a></li>

            <li><a href="#informar" class="modal-trigger">Encontrou Documentos?</a></li>

            <li><a href="maps.php" class="">Localização das Esquadras Nacionais</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="">Home</a></li>
            <li ><a href="#ask" class="modal-trigger">Procurando seus Documentos?</a></li>
            <li><a href="#informar" class="modal-trigger">Encontrou algum documento?</a></li>
            <li><a href="maps.php" class="">Localização das Esquadras Nacionais</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="responsive-img"><img src="asset/icon/More_48px.png"></i></a>
        </div>
      </nav>
    </div>
    <!--closed Menu-->
   

   

    <!--slider-->
      <div class="slider">
    <ul class="slides">
      <li>
        <img src="asset/econd.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption center-align">
          <h4 >Encontrou alguns Documentos?</h4>
          <h5 class=" grey-text text-lighten-3">Dê aos agentes da Lei que encontrar na Rua</h5>
        </div>
      </li>
      <li>
        <img src="asset/trees.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption left-align">
          <h4 >Segurança e Economia</h4>
          <h5 class=" grey-text text-lighten-3">Pela ordem e pela paz, ao serviço da nação </h5>
        </div>
      </li>
      <li>
        <img src="asset/pri.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption right-align">
          <h4 class="white-text">POLÍCIA NACIONAL</h4>
          <h5 class=" white-text ">Uma grande equipe em prol da cidadania e bem estar da população </h5>
        </div>
      </li>
      <li>
        <img src="asset/four.jpg" class="responsive-img"> <!-- random image -->
        <div class="caption center-align">
          <h4 >Em 2 Passos simples!</h4>
          <h5 class=" grey-text text-lighten-3">Acessa o portal e num piscar de olhos recebera uma ligação</h5>
        </div>
      </li>
    </ul>
  </div>




    <!--modal de procurando-->

    <div class="modal " id="ask">
      <div class="modal-content">
        
          <h5 >Preencha este formulário</h5><hr>
          <p >"Este formulário sera enviado as autoridades competentes e se estiverem com seus documentos, receberá uma mensagem de texto no seu telefone em 24h, caso não receber uma mensagem seus documentos ainda não estão com as autoridades competentes e terá que aguardar ate que lhe seja enviado a mensagem após preencher o formulário de requisição"</p>
          <p class="red-text ">* Campos obrigatórios</p>

          <br> 
        <form class="col s12" action="" method="POST" >
          <div class="row">
         
          

          <!--tipo de documentação-->

          <div class="input-field col s12">
            <input type="text" id="nome" name="nome" required="obrigatório" length="100">
            <label for="nome"><b class="red-text ">* </b>Nome Completo</label>
          </div>
           <div class="input-field col s10" >
               <select multiple name="documents[]">
                <option value=" " disabled selected><b>* </b>Tipo de Documentação</option>
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
           
            
          <div class="input-field col s10">
          <p for="datap"><b class="red-text ">* </b>Quando foi que perdeu?</p>
            <input type="date" id="datap" name="datap" required="obrigatório">  
          </div>
          <div class="input-field col s10">
            <select  name="morada" required="obrigatório">
              <option value=" " disabled selected ><b>* </b>Cidade que perdeu?</option>
              <option value="Bengo">Bengo</option>
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
            <input type="tel" id="phone" name="phone" required="obrigatório" length="15">
            <label for="morada"><b class="red-text ">* </b>Telefone</label>
          </div>

           <div class="input-field col s6">
            <input type="email" id="email" name="email" class="validate" >
            <label for="morada" data-error="Email Inválido">Email</label>
            </div>
              

          <div class="input-field col s12">
            <input type="text" id="text"  name="mensagem">
            <label for="text">Descrição</label>
          </div>

          <div class="modal-footer botoespadrao">
            <button class="btn green waves-effect waves-light col s6" type="submit" name="btn">ENVIAR</button>
            <a class="btn red modal-close modal-action col s6" >SAIR</a>
          </div>
        </div>
      </form>
        
      </div>
    </div> 



    <?php 
  
  include_once("conexao.php");
  if(isset($_POST['morada']))
  {
  $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
  $morada = filter_input(INPUT_POST,'morada', FILTER_SANITIZE_STRING);
  $phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
  $msg = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_STRING);
  $datap = filter_input(INPUT_POST,'datap', FILTER_SANITIZE_STRING);
  $doc = $_POST["documents"];
  
  for ($i=0;$i<count($doc);$i++) 
   { 
     $v = $doc[$i];
  
 
  $result_perdidos = "INSERT INTO perdidos (doc,nome, morada,phone, email,mensagem,data) VALUE ('$v','$nome', '$morada','$phone', '$email', '$msg','$datap')";
  $resultado_perdido = mysqli_query($conn, $result_perdidos);
  }}
  ?>
    <!--closed modal de procurando-->



     <!--Modal informar-->


    <div class="modal" id="informar">
      <div class="modal-content">
        <div class="row">
          <p class="center-align light" style="font-size:20px ;">
              Se encontrou documentos na Via-Pública ou num local qualquer.
              Faça chegar ate a uma unidade policial, ou mesmo as autoriadades Policiais Fardados em azul que encontrar na rua.<br>
              Eles farão chegar ate seus devidos donos
              e nós agradecemos o bom papel de cidadânia.
           </p><br>
          
          
              <button class="btn blue darken-4 modal-close modal-action col s12">Voltar</button>
   
        </div>
      </div>
    </div>
    <!--closed modal informar-->

   
      <iframe src="barra.php" height="700px" width="100%" style="border:none;" ></iframe>


    <!--end-->
    <footer class="page-footer blue darken-4">
      <div class="footer-copyright ">
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
    
     $('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .9, // Opacity of modal background

    }
  );

 
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
