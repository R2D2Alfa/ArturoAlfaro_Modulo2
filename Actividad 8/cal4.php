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
    $cal4 = $_POST["0"]+$_POST["1"]+$_POST["2"]+$_POST["3"]+$_POST["4"]+$_POST["5"]
    +$_POST["6"]+$_POST["7"]+$_POST["8"]+$_POST["9"]+$_POST["10"]+$_POST["11"];
    $cal4 = $cal4/12;
    $_SESSION["cal4"]= $cal4;
    header("location: ./cal5.php");

}
echo '<fieldset>
<legend>Ingresa tus calificaciones de cuarto</legend>
<form action="./cal4.php" method="POST">';
    
    $consulta = "SELECT Nombre FROM asignaturas
    WHERE Anio = '4';";
    $r = mysqli_query($c, $consulta);
    echo '<label>materias:';
    echo '<br>';
    $i=0;
    While ($row = mysqli_fetch_array($r)){
        echo $row["Nombre"].'<input type="number" name='.$i.' required>';
        $i++;
        echo '<br>';
    }
    echo'</label><br><br>
    ';

    echo '<input type="submit" name="enviar">
    
</form>
</fieldset>';
?>