<?php
include("./config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="../Super brocoli.png"/>
	<title>Registrar cuenta</title>
</head>
<?php
$c = connectdb();
session_start();
if(isset($_POST["enviar"])){
	$_SESSION["nombre"]= $_POST["nombre"];
	$_SESSION["AP"]= $_POST["primer_apellido"];
	$_SESSION["AM"] = $_POST["segundo_apellido"];
	$_SESSION["area"]= $_POST["area"];
	$_SESSION["carrera"] = $_POST["carrera"];
	header("location: ./modalidad.php");
}
echo '
    <body>
	<fieldset>
		<legend>Inicio de sesión</legend>
		<form action="./Registro.php" method="POST">
			<legend>
				Nombre <input type="text" name="nombre" required>
			</legend>
			<br><br>
			<legend>
				Primer apellido <input type="text" name="primer_apellido" required>
			</legend>
			<br><br>
			<legend>
				Segundo apellido <input type="text" name="segundo_apellido" required>
			</legend>
			<br><br>
			<br>
			<label>Area cursada:
				<select name="area">
					<option value="1">Area 1</option>
					<option value="2">Arae 2</option>
					<option value="3">Area 3</option>
					<option value="4">Area 4</option>
				  </select>
			</label>
			<br><br>';
			$consulta = "SELECT * FROM carrera;";
			$r = mysqli_query($c, $consulta);
			$row = mysqli_fetch_array($r);
			echo '<label>Carrera que desea cursar:';
			echo '<select name="carrera">';
			While ($row = mysqli_fetch_array($r)){
				echo '<option value='.$row["clave_carrera"].'>'.$row["Nombre"].'</option>';
			}
			echo'</select>
			</label><br><br>
			';

			echo '<input type="submit" name="enviar">
			
		</form>
	</fieldset>';

    ?>
</body>
</html>