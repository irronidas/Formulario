<div>
    <form action='add.php' method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="txtNombre"><br>
        <label>Apellido:</label><br>
        <input type="text" name="txtApellido"><br>
        <label>Edad;</label><br>
        <input type="text" name="txtEdad"><br>
        <label>Rut:</label><br>
        <input type="text" name="txtRut"><br> <hr>
        <input type="submit" name="Ingresar" value="Crate">
        <a href="index.php">Regresar</a>
    </form>
</div>
<?php
    include ("cn.php");
    if (isset($_POST['Ingresar'])){
    $nom = trim($_POST['txtNombre']);
    $ape = trim($_POST['txtApellido']);
    $edad = trim($_POST['txtEdad']);
    $rut = trim($_POST['txtRut']);
    if ($nom!=null||$ape!=null||$edad!=null||$rut!=null){
    $sql= "INSERT INTO Identidad (Nombre, Apellido, Edad, Rut) VALUES ('$nom', '$ape', '$edad', '$rut')";
    $resul= mysqli_query($con, $sql);
    header("location: Index.php");
        }else{
            echo "<script>alert('No se ha procesado');</script>";
        }
    }
?>