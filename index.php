<!Doctype html>
<html>
	<head>
	<!--<tittle>PHP</tittle>-->
	</head>
	<body>
	<!--<h1>Datos</h1>-->
	<?php
		$host="localhost";
		$user="root";
		$pass="123456";
		$BD="demooo";

		$conexion = mysqli_connect($host, $user, $pass, $BD); 
		if(mysqli_connect_errno()){
			echo 'Conexion Fallida a la base de datos: '; mysqli_connect_error();
			exit();
		}else{
			//echo "Conexion correcta a la base de datos";
			header("Location: pract.html");
		}
		//session_start();
		$usuario = $_POST['usuario']; 
		$contraseña = $_POST['contraseña'];
			$sql = mysqli_query($conexion, "SELECT * FROM usuario WHERE Usuario='$usuario' and Contraseña='$contraseña'");		
		$row = mysqli_fetch_assoc($sql);
		//$query = strip_tags($_GET["query"]);
		//echo "a $query";
			//echo "sessión inactiva";
			if($row['Contraseña']!=null){
				if($row['Contraseña']==$Contraseña){
					}	
					header("Location: principal.html");
				}
	?>
	</body>
</html>