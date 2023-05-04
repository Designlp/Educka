<!-- Modal -->
<div class="modal fade" id="modalformcursos" tabindex="-1" role="dialog"  aria-hidden="true">
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
              <form id="formcurso" name="formcurso">
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
                    <label for="liststatus">Estado</label>
                    <select class="form-control" id="liststatus" name="liststatus">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                </div>

                <div class="form-group">
                <span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select01-container"><span class="select2-selection__rendered" id="select2-select01-container" role="textbox" aria-readonly="true" title="Third option is here">Third option is here</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

