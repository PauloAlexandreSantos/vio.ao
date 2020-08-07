<?php 
	session_start();
	include_once("conexao.php");
	if (isset($_POST['btn_bd'])):
		
		$id = mysqli_escape_string($conn, $_POST['id']);
		$sql = "DELETE FROM obtidos WHERE id ='$id'";
		if (mysqli_query($conn, $sql)):
			header('Location: BDcard.php');
		else:
			header('Location: BDcard.php');
		endif;
	endif;

	?>