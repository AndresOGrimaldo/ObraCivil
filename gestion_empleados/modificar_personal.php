<?php
  $datos_obr = get_obras();
?>
<div class="modal fade" id="modalPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Empleado</h4>
      </div>
      <div id="div_ajax_registro_emp"> </div>
      <div class="modal-body">
        <form id="registrarEmpleadoForm" method="post" action="modificar_personalsql.php">
          <div class="modal-body">
          <input type="hidden" id="IDEmpleado" name="IDEmpleado">
          <div class="form-group">
                <label for="codigo" class="control-label">Codigo Empleado:</label>
                <input type="text" class="form-control" id="codigoempleado" name="codigoempleado"   placeholder="Codigo del Empleado" value="">
              </div>
              <div class="form-group">
                <label for="codigo" class="control-label">Nombre Empleado:</label>
                <input type="text" class="form-control" id="nameempleado" name="nameempleado"   placeholder="Nombre del Empleado" value="">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Apellido:</label>
                <input type="text" class="form-control" id="apellidoemp" name="apellidoemp"  placeholder="Apellido Empleado" value="">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Cedula:</label>
                <input type="text" class="form-control" id="cedulaemp" name="cedulaemp"  placeholder="Cedula" value="">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Fecha Nacimiento:</label>
                <input type="date" class="form-control" id="fechanac" name="fechanac"  placeholder="Fecha Nacimiento" value="">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Salario:</label>
                <input type="text" class="form-control" id="salarioemp" name="salarioemp"  placeholder="Salario Empleado" value="">
            </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Email:</label>
                <input type="text" class="form-control" id="emailemp" name="emailemp"  placeholder="Correo electronico" value="">
            </div>
            <!-- <div class="form-group">
              <label for="nombre" class="control-label">Obra:</label>
              <select class="form-control" name="obra[]">
              <?php
                while($row = mysqli_fetch_row($datos_obr))
                {
                  ?>
                    <option value="<?php printf($row[0]); ?>"><?php printf($row[1]); ?></option>
                  <?php
                }
              ?>
              </select>
            </div> -->
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="registraremp">Modificar Empleado!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>