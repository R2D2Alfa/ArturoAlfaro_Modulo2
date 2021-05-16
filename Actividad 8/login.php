<?php
include("./config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inicio de sesion</title>
</head>
<?php
    $c = connectdb();
echo'
<fieldset><legend>Consultoría Kikí</legend>
    <form action="./login.php" method="POST">
    <label>número de cuenta:
         <input type="text" name="Cuenta" required>
    </label>
    <br><br>
    <input type="submit" name="enviar">
    </form>
    </fieldset>
<br><br>';


if(isset($_POST["enviar"])){

    $consulta = "SELECT Ncuenta FROM alumno WHERE Ncuenta='$_POST[Cuenta]';";
    $r = mysqli_query($c, $consulta);
    $row = mysqli_fetch_array($r);
    if(! $row == 0){
        session_start();
        header("location: ./resultados.php");
    }
        else{
        echo "Aun no tienes una cuenta, registrate";
        session_start();
        $_SESSION["cuenta"] = $_POST["Cuenta"];
        header( "location: ./Registro.php");

        }
}





?>