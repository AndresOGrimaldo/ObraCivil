<div class="modal fade" id="ModalLoginProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inicio Sesión -  Proveedor</h4>
      </div>
      <div id="div_error_login2"></div>
      <div class="modal-body">
        <form id="loginProveedor" method="post" action="page_part/login_proveedor.php">
          <div class="modal-body">
              <div class="form-group">
                <label for="codigo" class="control-label">Email:</label>
                <input type="text" class="form-control" id="usuario" name="usuario"   placeholder="Digite su Email">
              </div>
            <div class="form-group">
                <label for="nombre" class="control-label">Contraseña:</label>
                <input type="password" class="form-control" id="pass" name="pass"  placeholder="Digite su contraseña">
            </div>
          </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="login">Ingresar!</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>
