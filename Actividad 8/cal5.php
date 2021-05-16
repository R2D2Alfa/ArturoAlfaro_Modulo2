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
    $cal5 = $_POST["0"]+$_POST["1"]+$_POST["2"]+$_POST["3"]+$_POST["4"]+$_POST["5"]
    +$_POST["6"]+$_POST["7"]+$_POST["8"]+$_POST["9"]+$_POST["10"]+$_POST["11"];
    $cal5 = $cal5/12;
    echo $cal5;
    $_SESSION["cal5"]= $cal5;
    header("location: ./cal6.php");

}
echo '<fieldset>
<legend>Ingresa tus calificaciones de quinto</legend>
<form action="./cal5.php" method="POST">';
    
    $consulta = "SELECT Nombre FROM asignaturas
    WHERE Anio = '5';";
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