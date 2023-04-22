<!-- Modal -->
<div class="modal fade" id="modalformusuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerregister">
        <h5 class="modal-title" id="titlemodal">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">
            // form
            <form class="form-horizontal" id="formusuario" name="formusuario" enctype="multipart/form-data">
              <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                  <div class="was-validated">
                    <!--2 Horizontal-->
                    <div class="form-row">
                      <div class="col-12 col-md-6 mb-3">
                        <label class="form-label" for="validationSample01">Nombre</label>
                        <input type="text" class="form-control" id="txtnombre" placeholder="Nombre" value="Mark" required="">
                        <div class="invalid-feedback">Por favor llene el campo</div>
                        <div class="valid-feedback">Nice</div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label class="form-label" for="validationSample02">Apellido</label>
                        <input type="text" class="form-control" id="txtapellido" placeholder="Apellido" value="Otto" required="">
                        <div class="invalid-feedback">Por favor llene el campo</div>
                        <div class="valid-feedback">Nice</div>
                      </div>
                    </div>
                    <!-- 2 Horizontal -->
                    <div class="form-row">
                      <div class="col-12 col-md-6 mb-3">
                        <label class="form-label" for="validationSample03">Telefono</label>
                        <input type="text" class="form-control" id="txttelefono" placeholder="7543431" required="">
                        <div class="invalid-feedback">Por favor llene el campo</div>
                        <div class="valid-feedback">Nice</div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label class="form-label" for="validationSample04">Correo</label>
                        <input type="email" class="form-control" id="txtCorrreo" placeholder="correo@gmail.com" required="">
                        <div class="invalid-feedback">Por favor llene el campo</div>
                        <div class="valid-feedback">Nice</div>
                      </div>
                    </div>
                    <!--2 Horizontal-->
                    <div class="form-row">
                      <div class="col-12 col-md-6 mb-3">
                        <label class="form-label" for="validationSample03">Contraseña</label>
                        <input type="password" class="form-control" id="txtcontrasenia" placeholder="*******" required="">
                        <div class="invalid-feedback">Por favor llene el campo</div>
                        <div class="valid-feedback">Nice</div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>