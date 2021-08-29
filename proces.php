<?php
include ("cn.php");


    $Rut = $_POST['Rut'];
    $nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];



    $sql = "UPDATE Identidad SET  Rut='$Rut', Nombre= '$nombre', Apellido='$Apellido', Edad='$Edad' 
    WHERE Rut = '$Rut'";

    $resultado = mysqli_query($con, $sql);
    if (!$resultado) {
        echo "<script>alert('se ha procesado');</script>";
        header("location: Index.php");
    }else{
        echo "<script>alert('No se ha procesado');</script>";
        header("location: Index.php");
    }