<!-- Modal -->
<div class="modal fade" id="modalformcategorias" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header headerregister">
                <h5 class="modal-title" id="titlemodal">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form-->
                <form autocomplete="off" class="form-horizontal" id="formcategorias" name="formcategorias" enctype="multipart/form-data">
                    <input id="idcategoria" name="idcategoria" type="hidden" value="">
                    <p class="text-primary">Todos los campos son obligatorios.</p>

                    <!-- Esta es la clase de alertas son los mensaje -->
                    <!--<div class="was-validated">-->
                    <!-- Utiliza la clase feedback -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="control-label">Nombre</label>
                            <input class="form-control" id="txtnombre" name="txtnombre"  type="text" placeholder="Nombre de la categoria" required="">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Descripcion</label>
                            <input class="form-control" id="txtdescripcion" name="txtdescripcion"  type="text" placeholder="Descripcion" required="">
                        </div>
                    </div>
               
                    <!--</div>-->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="liststatus">Estado</label>
                            <select class="form-control" id="liststatus" data-toggle="select" name="liststatus" placeholder="Estado">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="tile-footer">
                        <button id="btnactionform" class="btn btn-primary" type="submit">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>
                            <span id="btntext">Guardar</span>
                        </button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="#" data-dismiss="modal">
                            <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                    </div>




                </form>

            </div>

        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalviewuser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header headerregister">
                    <h5 class="modal-title" id="titlemodal">Datos del Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Identificación:</td>
                                <td id="celIdentificacion">Pendiente</td>
                            </tr>

                            <tr>
                                <td>Nombres:</td>
                                <td id="celNombre">Pendiente</td>
                            </tr>
                            <tr>
                                <td>Apellidos:</td>
                                <td id="celApellido">Pendiente</td>
                            </tr>
                            <tr>
                                <td>Teléfono:</td>
                                <td id="celTelefono">Pendiente</td>
                            </tr>
                            <tr>
                                <td>Email (Usuario):</td>
                                <td id="celEmail">Pendiente</td>
                            </tr>
                            <tr>
                                <td>Estado:</td>
                                <td id="celEstado">Pendiente</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>