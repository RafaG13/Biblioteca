<?php 
	$user = "";
	$error = false;
	if(isset($_POST['enviar'])){
		if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
			$user = $_POST['usuario'];
		}
		if(isset($_POST['contrasena']) && !empty($_POST['contrasena'])){
			$password = $_POST['contrasena'];
		}
		if($user=="admin" && $password=="1234"){
			session_start();
			$_SESSION['user'] = $user;
			header("Location: aplication.php");
		}else{
			$error = true;
		}
	}
?>  

<!doctype html>
<html lang="es">
	<head>
		<title>Inicio de sesión | Biblioteca</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="css/all.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<main class="fondo-login">
			<form method="POST" >
				<div class="titulo-formulario">
					<img src="img/avatar.png">
					<h1>Inicio de sesión</h1>
				</div>
				
				<div class="inputContainer">
					<i class="fas fa-user"></i>
					<input title="Aquí debes introducir tu nombre de usuario" class="inputForm" type="text" name="usuario" value="<?php echo $user; ?>" placeholder="Nombre de usuario"   required autofocus>
				</div>
				<div class="inputContainer">
					<i class="fas fa-key"></i>
					<input title="Aquí debes introducir tu contraseña" class="inputForm" type="password" name="contrasena" placeholder="Introduzca su contraseña"  required>
				</div>
				<?php if($error) { ?>
			      	<p>Contraseña o usuario incorrecto</p>
			      <?php } ?>	
				<input title="Inicia sesión" class="submitForm" type="submit" name="enviar" value="Entrar">
				<p><a href="registro.php" title="Accede al registro" alt="Accede al registro">¿Aún no tienes cuenta? Registrate aquí</a></p>
			</form>	
		</main>
	</body>
</html>