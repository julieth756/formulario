<?php
    $controlador = new controladorEmpleado();
    $resultado = $controlador->index();
?>
<h3>Pagina de inicio</h3>
<table border="3">
    <thead>
    <th>ID</th>
    <th>Cedula</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha de nacimiento</th>
    <th>Sede</th>
    <th>Sexo</th>
    <th>Direcccion</th>
    <th>Telefono Movil</th>
    <th>Accion</th>
    </thead>
    <tbody>
        <?php while ($row = mysql_fetch_array($resultado)): ?>
        <tr>
            <td> <?php echo $row['id'];?></td>
            <td> <?php echo $row['cedula'];?></td>
            <td> <?php echo $row['nombre'];?></td>
            <td> <?php echo $row['apellido'];?></td>
            <td> <?php echo $row['fecha_nac'];?></td>
            <td> <?php echo $row['sede'];?></td>
            <td> <?php echo $row['sexo'];?></td>
            <td> <?php echo $row['direccion'];?></td>
            <td> <?php echo $row['telefono_movil'];?></td>
            <td>
                <a href="?cargar=listar&id=<?php echo $row['id'];?>">Listar</a>
                <a href="?cargar=editar&id=<?php echo $row['id'];?>">Editar</a>
                <a href="?cargar=eliminar&id=<?php echo $row['id'];?>">Eliminar</a>
            </td>
        </tr>
         <?php endwhile; ?>
    </tbody>
</table>