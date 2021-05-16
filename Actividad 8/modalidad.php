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
	$_SESSION["id_pase"]= $_POST["id_pase"];
    header("location: ./cal4.php");
}
echo '
    <body>
	<fieldset>
		<legend>Escoge modalidad y ubicación</legend>
		<form action="./modalidad.php" method="POST">';
			
            $consulta = "SELECT id_pase, Ubicacion, Modalidad FROM ubicacion t1
            INNER JOIN pase_regla t2 ON t2.id_ubicacion = t1.id_ubicacion
            INNER JOIN modalidad t3 ON t3.id_modalidad = t2.id_modalidad
            
            WHERE clave_carrera = '$_SESSION[carrera]'";
			$r = mysqli_query($c, $consulta);
			echo '<label>modalidad:';
			echo '<select name="id_pase">';
			While ($row = mysqli_fetch_array($r)){
				echo '<option value='.$row["id_pase"].'>ubicacion:'.$row["Ubicacion"].'   modalidad:'.$row["Modalidad"].'</option>';
			}
			echo'</select>
			</label><br><br>
			';

			echo '<input type="submit" name="enviar">
			
		</form>
	</fieldset>';


?>