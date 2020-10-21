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
		// $host="localhost";
		// $user="id11511280_root";
		// $pass="Gbravo3303";
		// $BD="id11511280_tornillanco";
		//$conectar="mysql_connect($host,$user,$password)";//

		//$mysqli = new mysqli("localhost","root","root1234");
		$con = mysqli_connect($host, $user, $pass, $BD); 

		if(mysqli_connect_errno()){
			echo 'Conexion Fallida : '; //mysqli_connect_error();
			exit();
		}else{
			echo "Conexion correcta";
		}

	?>
	</body>
</html>
