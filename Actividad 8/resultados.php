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
    if(isset($_POST["cerrar"])){
        session_unset();
        header("location: ./login.php");
    }
    elseif(isset($_POST["eliminar"])){
        $consulta = "DELETE FROM alumno WHERE Ncuenta = $_SESSION[cuenta]";
        session_unset();
        header("location: ./login.php");
    }

    
    $consulta = "INSERT INTO alumno (Ncuenta, Promedio_cuarto, Promedio_quinto, Promedio_sexto, Nombre, ApellidoP, ApellidoM, Area, id_pase) VALUES ($_SESSION[cuenta], '$_SESSION[cal4]', '$_SESSION[cal5]', '$_SESSION[cal6]',$_SESSION[nombre], $_SESSION[AP], $_SESSION[AM]), $_SESSION[area], $_SESSION[id_pase]);";     
    $r = mysqli_query($c, $consulta);
    
    $fin= $_SESSION["cal4"]+$_SESSION["cal5"]+$_SESSION["cal6"];
    $fin = $fin/3;
    echo'<table border = 1>
        <thead>
            <th>Número de cuenta</th>
            <th>Promedio de cuarto</th>
            <th>Promedio de quinto</th>
            <th>Promedio de sexto</th>
            <th>Promedio final de prepa</th>
            <th>Carrera elegida</th>
            <th>Ubicación</th>
            <th>Modalidad</th>
            <th>Probabilidad de entrar</th>
        </thead>
        <tbody>
            <tr>
                <td>'.$_SESSION["cuenta"].'</td>
                <td>'.$_SESSION["cal4"].'</td>
                <td>'.$_SESSION["cal5"].'</td>
                <td>'.$_SESSION["cal6"].'</td>
                <td>'.$fin.'</td>';
                $consulta = "SELECT Nombre FROM carrera
                WHERE clave_carrera = $_SESSION[carrera];";
                $r = mysqli_query($c, $consulta);
                $row = mysqli_fetch_array($r);
                echo'<td>'.$row["Nombre"].'</td>';
                
                $consulta = "SELECT Ubicacion FROM pase_regla t1
                INNER JOIN ubicacion t2 ON t2.id_ubicacion = t1.id_ubicacion
                WHERE id_pase = $_SESSION[id_pase];";
                $r = mysqli_query($c, $consulta);
                $row = mysqli_fetch_array($r);
                echo'<td>'.$row["Ubicacion"].'</td>';
                
                $consulta = "SELECT Modalidad FROM pase_regla t1
                INNER JOIN modalidad t2 ON t2.id_modalidad = t1.id_modalidad
                WHERE id_pase = $_SESSION[id_pase];";
                $r = mysqli_query($c, $consulta);
                $row = mysqli_fetch_array($r);
                echo'<td>'.$row["Modalidad"].'</td>';
                
                $consulta = "SELECT promedio FROM pase_regla 
                WHERE id_pase = $_SESSION[id_pase];";
                $r = mysqli_query($c, $consulta);
                $row = mysqli_fetch_array($r);
                $proba = $row["promedio"];
                
                if($fin-$proba>=0.5){
                    echo'<td>Probabilidad alta de entrar</td>';
                }
                elseif($fin-$proba>=0&&$proba-$fin<=0.5){
                    echo'<td>Probabilidad media de entrar</td>';
                }
                elseif($fin-$proba<=0&&$proba-$fin>=-0.5){
                    echo'<td>Probabilidad media de entrar</td>';
                }
                else{
                    echo'<td>Probabilidad casi nula de entrar</td>';
                }
            echo'</tr>';
            echo'<tr>';
            echo'<form action="./resultados.php" method="POST">';
                echo'<td><input type="submit" name="cerrar" value="cerrar sesion"><input type="submit" name="eliminar" value="eliminar registro"> </td> ';
            echo'</form>';
            echo'</tr>
        </tbody>
    </table>';

   


?>