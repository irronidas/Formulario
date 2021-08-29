<?php
include ("cn.php");

if(isset($_GET['id']))
$id= $_GET['id'];
$sql= "SELECT * FROM Identidad WHERE Rut= '$id'";
$resul= mysqli_query($con, $sql);
$fila = mysqli_fetch_assoc($resul);
$nombre = $fila['Nombre'];
$Apellido = $fila['Apellido'];
$Edad = $fila['Edad'];
$Rut = $fila['Rut'];
?>
<form action="proces.php" method="POST">
        <label>Nombre:</label><br>
         <input type="text" name="Nombre" value="<?php echo $nombre;?>"><br>
        <label>Apellido:</label><br>
        <input  type="text" name="Apellido" value="<?php echo $Apellido;?>"><br>
        <label>Edad:</label><br>
        <input  type="text" name="Edad" value="<?php echo $Edad;?>"><br>
        <label>Rut:</label><br>
        <input  type="hidden" name="Rut" value="<?php echo $Rut;?>"><br><br>
        <input type="submit" name="edit" value="Actualizar">
        <a href="index.php">Regresar</a>
    </form>
