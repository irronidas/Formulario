<?php
    include ("cn.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql= "DELETE FROM Identidad WHERE Rut = '$id'";
        $resul= mysqli_query($con, $sql);
        if (!$resul){
            die("fallo quey");
    }
    header("location: Index.php");
    }
    ?>