<!-- Modal -->
<div class="modal fade" id="modalformclases" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
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
                        <form id="formclase" name="formclase" enctype="multipart/form-data">

                            <input id="idclase" name="idclase" type="hidden" value="">

                            <!-- Page Content -->

                            <div class="page-section border-bottom-2">
                                <div class="container page__container">

                                    <div class="row">
                                        <div class="col-md-8">

                                            <div class="page-separator">
                                                <div class="page-separator__text">Datos de la clase</div>
                                            </div>

                                            <label class="form-label">Titulo</label>
                                            <div class="form-group mb-24pt">
                                                <input  type="text" class="form-control form-control-lg" id="txttitulo" name="txttitulo"  placeholder="Titulo de la clase">
                                                <small class="form-text text-muted">Ingrese su titulo de la clase</small>
                                            </div>

                                            <div class="form-group mb-32pt">
                                                <label class="form-label">Descripción</label>
                                                <textarea  class="form-control" id="txtdescripcion" name="txtdescripcion" rows="3" placeholder="Course description"></textarea>

                                                <small class="form-text text-muted">Pequeña descripción de la clase</small>
                                            </div>



                                        </div>
                                        <div class="col-md-4">



                                            <div class="page-separator">
                                                <div class="page-separator__text">Video</div>
                                            </div>

                                            <div class="card">
                                                <div id="player" class="embed-responsive embed-responsive-16by9 plyr__video-embed">
                                                    <iframe id="youtubeframeid"
                                                        class="embed-responsive-item" 
                                                        src="https://www.youtube.com/embed/G7mH-MBLET4?modestbranding=1&disablekb=1&rel=0&loop=1&mute=1&showinfo=0&controls=0&iv_load_policy=3" 
                                                        frameborder="0" 
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                        allowfullscreen
                                                        ></iframe>
                                                </div>
                                                <div class="card-body">
                                                    <label class="form-label">URL</label>
                                                    <input type="text" class="form-control" id="txtenlace" name="txtenlace" placeholder="Enter Video URL">
                                                    <button id="btnactionform" class="btn btn-primary" type="submit">
                                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                                    <span id="btntext">Guardar</span>
                                                    </button>
                                                    <small class="form-text text-muted">Enter a valid video URL.</small>
                                                </div>
                                            </div>

                                            <div class="page-separator">
                                                <div class="page-separator__text">Opciones</div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="form-label">Categorías</label>
                                                        <select name="category" class="form-control custom-select">
                                                            <option value="vuejs">VueJs</option>
                                                            <option value="vuejs">Angular</option>
                                                            <option value="vuejs">React</option>
                                                        </select>
                                                        <small class="form-text text-muted">Seleccione una categoría</small>
                                                    </div>

                                
                                                </div>
                                            </div>

                                            <div class="tile-footer">
                                                <button id="btnactionform" class="btn btn-primary" type="submit">
                                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                                    <span id="btntext">Guardar</span>
                                                </button> &nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-secondary" href="#" data-dismiss="modal">
                                                    <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- // END Page Content -->

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>