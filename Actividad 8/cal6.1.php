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
if(isset($_POST["0"])){
    $cal6 = $_POST["0"]+$_POST["1"]+$_POST["2"]+$_POST["3"]+$_POST["4"]+$_POST["5"]
    +$_POST["6"]+$_POST["7"]+$_POST["8"];
    $cal6 = $cal6/9;
    $_SESSION["cal6"]= $cal6;
    
    header("location: ./resultados.php");

}
echo '<fieldset>
<legend>Ingresa tus calificaciones de quinto</legend>
<form action="./cal6.1.php" method="POST">';
 isset($_POST["optativa"]);
    
    $consulta = "SELECT Nombre FROM asignaturas
    WHERE Anio = '6' AND Area = $_SESSION[area] AND Optativa = 'N' OR Anio = '6' AND Area = '0' AND Optativa = 'N';";
    $r = mysqli_query($c, $consulta);
    echo '<label>materias:';
    echo '<br>';
    $i=0;
    While ($row = mysqli_fetch_array($r)){
        echo $row["Nombre"].'<input type="number" name='.$i.' required>';
        $i++;
        echo '<br>';
    }
    $consulta = "SELECT Nombre FROM asignaturas
    WHERE Clave = $_POST[optativa]"; 
    $r = mysqli_query($c, $consulta);
    $row = mysqli_fetch_array($r);
    echo $row["Nombre"].'<input type="number" name='.$i.' required>';
    echo'</label><br><br>';

    echo '<input type="submit" name="enviar">
    
</form>
</fieldset>';
?>