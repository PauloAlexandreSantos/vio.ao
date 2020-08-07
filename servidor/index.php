<?php 
	require_once 'conexao.php';

	//BOTÃO ENVIAR
	if (isset($_POST['btn-entrar'])):
		$erros = array();
		$login = mysqli_escape_string($conn, $_POST['login']);
		$senha = mysqli_escape_string($conn, $_POST['senha']);
		if (empty($login or empty($senha))):
			$erros[] = "<li> O campo login/senha precisa ser preenchido</li>";
			else:

				$sql = "SELECT login FROM sistemalogin WHERE login = '$login' ";
				$resultado = mysqli_query($conn, $sql);

				if (mysqli_num_rows($resultado) > 0):
						$senha = md5($senha);
					
						$sql = "SELECT * FROM sistemalogin WHERE login = '$login' AND senha = '$senha'";
						$resultado = mysqli_query($conn, $sql);

						if(mysqli_num_rows($resultado) == 1):
							$dados = mysqli_fetch_array($resultado);
							$_SESSION['logado'] = true;
							$_SESSION['id_usuario'] = $dados['id'];
							header('Location: Server-side/home.php');
							else:
							$erros[] = "<li>Usuário e senha não conferem </li>";
						endif;
					else:
						$erros[] = "<li> Usuário inexistente</li>";
				endif;
		endif;
	endif;
	
?>

<!DOCTYPE html>
<html lang="PT-PT">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<fieldset>
			<legend>Login de Usuário</legend>
			<?php 
				if (!empty($erros)):
					foreach ($erros as $erro):
						echo $erro;
					endforeach;
					
				endif;

			?>

			<label for="user"><p>Usuário:</p></label>
			<input type="text" id="user" name="login" required="obr">	
			
			<label for="pass"><p>Senha:</p></label>
			<input type="password" id="pass" name="senha" required="obr">	
			
			<p><input type="submit" value="Entrar" name="btn-entrar"></p>

		</fieldset>
	
	</form>
</body>
</html>