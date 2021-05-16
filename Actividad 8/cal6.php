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
if(isset($_POST["optativa"])){
    $_SESSION["optativa"] = $_POST["optativa"];
    echo $_SESSION["optativa"];
}
echo '<fieldset>
		<legend>¿Que optativa cursaste?</legend>
		<form action="./cal6.1.php" method="POST">';
            $consulta = "SELECT Nombre, Clave FROM asignaturas WHERE Area = $_SESSION[area] AND Optativa = 'S';";
            echo $consulta;
            $r = mysqli_query($c, $consulta);
            echo '<label>optativa:';
                echo '<select name="optativa">';
                While ($row = mysqli_fetch_array($r)){
                    echo '<option value='.$row["Clave"].'>'.$row["Nombre"].'</option>';
                }
            echo'</select></label><br><br>';

			echo '<input type="submit" name="enviar">
            </form>
</fieldset>';
?>