<!DOCTYPE html>
<html>
    <head>
    <title>CRUD</title>
    </head>
<body>
<?php
include("cn.php");
?>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM identidad");
    ?>
 <div>
    <a href="add.php">Nuevo registro</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Rut</th>
            </tr>
    </thead>
   <tbody>
    <?php while ($filas=mysqli_fetch_assoc($sql)) {
    ?>
       <tr>
            <td><?php echo $filas['Nombre'] ?></td>
            <td><?php echo $filas['Apellido'] ?></td>
            <td><?php echo $filas['Edad'] ?></td>
            <td><?php echo $filas['Rut'] ?></td>
            <td>
            <a href="Edit.php?id=<?php echo $filas['Rut']?>">Edit</a>
            <a href="Delete.php?id=<?php echo $filas['Rut']?>"> Eliminar</a>
            </td>
        </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
</body>
</html>