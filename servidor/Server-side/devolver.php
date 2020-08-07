<?php 
	session_start();
	include_once("conexao.php");
	if (isset($_POST['btn_devolver'])):
		
		$id = mysqli_escape_string($conn, $_POST['id']);
		$sql = "DELETE FROM perdidos WHERE id ='$id'";
		if (mysqli_query($conn, $sql)):
			header('Location: home.php');
		else:
			header('Location: home.php');
		endif;
	endif;

	?>