<!-- Modal -->
<div class="modal fade" id="modalformcursos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerregister">
        <h5 class="modal-title" id="titlemodal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tile">

          <div class="tile-body">
            <form id="formcurso" name="formcurso" enctype="multipart/form-data">
              <input id="idcurso" name="idcurso" type="hidden" value="">

              <div class="form-group">
                <label class="control-label">Titulo</label>
                <input class="form-control" id="txttitulo" name="txttitulo" type="text" placeholder="Titulo" required="">
              </div>

              <div class="form-group">
                <label class="control-label">Descripcion</label>
                <textarea class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="Descripcion de Rol"></textarea>
              </div>


              <div class="form-group">
                <label class="form-label" for="liststatus">Estado</label>
                <select id="liststatus" data-toggle="select" class="form-control" name="liststatus">
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
              </div>

              <div class="form-group">
                <label class="form-label" for="listpriv">Privacidad</label>
                <select id="listpriv" data-toggle="select" class="form-control" name="listpriv">
                  <option value="0">Privado</option>
                  <option value="1">Publico</option>
                </select>
              </div>
 

              

              <div class="tile-footer">
                <button id="btnactionform" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btntext">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>