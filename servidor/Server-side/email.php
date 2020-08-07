<?php 
	session_start();
	include_once("conexao.php");
	if (isset($_POST['btn_bd'])):
		$assunt = "Aviso de Busca de Documentos";
		$nom = "Polícia Nacional de Angola";
		$saudacoes = "saudações a Polícia Nacional de Angola encontra-se com seu documento";
		$id = mysqli_escape_string($conn, $_POST['id']);
		$sql = "SELECT * FROM obtidos WHERE id ='$id'";
		if (mysqli_query($conn, $sql)):

		$remetente      = 'From: emailremente@aqui.com.br';
		$destinatario   = 'seuemai@aqui.com.br';
		$assunto        = utf8_decode($_POST['assunto']);
		$nome           = utf8_decode($_POST['nome']);
		$email          = utf8_decode($_POST['email']);
		$mensagem       = utf8_decode($_POST['mensagem']);
		$alerta         = 'Seus dados foram enviados com sucesso!!!';
		$corpo          = "

		Nome:       ".$nome."
		E-mail:     ".$email."
		Mensagem: 	".$mensagem."";
		
		mail($destinatario, $assunto, $corpo, $remetente);
		echo $alerta;
				
			header('Location: BDcard.php');
		else:
			header('Location: BDcard.php');
		endif;
	endif;
















?>

