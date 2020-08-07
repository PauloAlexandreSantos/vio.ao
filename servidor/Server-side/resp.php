<?php 
	session_start();
	include_once("conexao.php");
	if (isset($_POST['btn_resp'])):
		
		$id = mysqli_escape_string($conn, $_POST['id']);
		$sql = "DELETE FROM feedback WHERE id ='$id'";
		if (mysqli_query($conn, $sql)):
			header('Location: cid/cidadao.php');
		else:
			header('Location: cid/cidadao.php');
		endif;
	endif;

	?>