<?php
$con=@mysqli_connect('127.0.0.1', 'admbd', 'obracivil123', 'obra_civil');

  if(!$con)
  {
      die("imposible conectarse: ".mysqli_error($con));
  }
  if (@mysqli_connect_errno())
  {
      die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
  }

  $jefep = $_SESSION['id_administrador'];

   $sql="SELECT * FROM personal WHERE jefe=$jefep";

   $query = mysqli_query($con,$sql);

   if($query)
   {
    ?>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre Completo</th>
            <th>Cedula </th>
            <th>Correo</th>
            <th>Salario</th>
            <th>Acciones</th>            
          </tr>
        </thead>
        <tbody>
    <?php
    while($row = mysqli_fetch_row($query))
    {
     if(empty($row))
     {
      ?>
      <div class="alert alert-info" role="alert">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong></strong>
        <?php
        echo "No se encontraron Resultados!";
        ?>
      </div>
 <?php
      break;
    }
    else
    {
 ?>
    <tr>
    <td><?php echo str_pad($row[1], 10); echo $row[2];?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td>
        <button type="button" id="btnActualizar" data-toggle="modal" data-target="#modalPersonal" class="btn btn-info" data-id="<?php echo $row[0];?>" data-nombre="<?php echo $row[1];?>" data-apellido="<?php echo $row[2]; ?>" data-cedula="<?php echo $row[3];?>" data-fecha-nacimiento="<?php echo $row[4];?>" data-salario="<?php echo $row[5];?>" data-correo="<?php echo $row[6];?>" data-obra="<?php echo $row[7];?>"><i class='glyphicon glyphicon-edit'></i> Modificar </button>
        <button type="button" id="btnEliminar" data-toggle="modal" data-target="#deleteProveedor"class="btn btn-danger" data-id="<?php echo $row[0];?>"><i class='glyphicon glyphicon-trash'></i>Eliminar</button>
        <!-- <button type="button" id="agregar" class="btn btn-default" data-id="<?php echo $row[0];?>" data-toggle="modal" data-target="#modalSuministro">Agregar Suministro</button> -->
      </td>
     </tr>
    <?php
     }
    }
    ?>
     </tbody>
    </table>
    <?php
   }
