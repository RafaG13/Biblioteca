<?php 
	session_start();
	echo " Estás en la aplicación con el usuario: ".$_SESSION['user'];
	if(isset($_POST['cerrar'])){
		session_unset();
		session_destroy();
		header("Location: index.php");
	}
?>
<form method="POST">
	<input type="submit" value="cerrar" name="cerrar">
</form>