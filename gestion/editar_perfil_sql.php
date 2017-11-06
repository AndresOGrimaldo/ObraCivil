<?php


session_start();
$con=@mysqli_connect('127.0.0.1', 'admbd', 'obracivil123', 'obra_civil');

    if(!$con)
    {
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno())
    {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    /* $id_admin = $_POST['id_admin']; */
    

    $sql = "SELECT nombre,apellido,cedula,fecha_nac,correo,password FROM administrador WHERE id_administrador=" . $_SESSION['id_administrador'];

    $query = mysqli_query($con,$sql);
    $vec_datos = mysqli_fetch_row($query);

    ?>
    <form id="registroIng" method="post" action="page_part/registro_ing.php">
    <div class="modal-body" style="width:500px;margin:auto">
        <div class="form-group">
          <label for="codigo" class="control-label">Nombre:</label>
          <input type="text" class="form-control" id="nombreing" name="nombreing"  placeholder="" value=<?php echo $vec_datos[0];?> >
        </div>
        <div class="form-group">
          <label for="nombre" class="control-label">Apellido:</label>
          <input type="text" class="form-control" id="apellidoing" name="apellidoing"  maxlength="50" placeholder="Apellidos" value=<?php echo $vec_datos[1];?> >
      </div>
      <div class="form-group">
          <label for="nombre" class="control-label">Email:</label>
          <input type="text" class="form-control" id="email" name="email"   value=<?php echo $vec_datos[4];?>>
          <div id="info"> </div>
      </div>
      <div class="form-group">
          <label for="nombre" class="control-label">Fecha Nacimiento:</label>
          <input type="text" class="form-control" id="fecha" name="fecha"  placeholder="Fecha nacimiento" value=<?php echo $vec_datos[3];?>>
      </div>
      
      <div class="form-group">
          <label for="nombre" class="control-label">Cedula:</label>
          <input type="text" class="form-control" id="cedula" name="cedula"  placeholder="Cedula" value=<?php echo $vec_datos[2];?>>
      </div>
      <div class="form-group">
          <label for="nombre" class="control-label">Contraseña:</label>
          <input type="password" class="form-control" id="password" name="password"  placeholder="Contraseña" value=<?php echo $vec_datos[5];?>>
      </div>
      <div class="form-group">
          <label for="nombre" class="control-label">Rectificar Contraseña:</label>
          <input type="password" class="form-control" id="password_re" name="password_re" placeholder="Repetir Contraseña" value=<?php echo $vec_datos[5];?>>
      </div>
    </div>  
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary center-block" id="login">Actualizar Información</button>
    </div>

 <?php

    /* echo $_SESSION['id_administrador']; */



    /* if(count($vec_datos)!=0)
    {
      $_SESSION['id_administrador']=$vec_datos[0];
      $_SESSION['nombre']=$vec_datos[1];
      echo json_encode(array(
        'login'=>true
      ));
    }
    else
    {
      echo json_encode(array(
        'login'=>false,
        'error'=>geterror()
      ));
    } */


function geterror()
{
  return
  "<div class='alert alert-danger' role='alert'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Datos incorrectos!</strong>
    </div>";
}
