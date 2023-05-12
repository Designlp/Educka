<!-- Modal -->
<div class="modal fade" id="modalformcursos" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form id="formcurso" name="formcurso" enctype="multipart/form-data">

              <input id="idcurso" name="idcurso" type="hidden" value="">

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
                                    <input type="text"
                                           class="form-control form-control-lg"
                                           placeholder="Titulo de la clase"
                                         >
                                    <small class="form-text text-muted">Ingrese su titulo de la clase</small>
                                </div>

                                <div class="form-group mb-32pt">
                                    <label class="form-label">Descripción</label>
                                     <textarea class="form-control" rows="3" placeholder="Course description"></textarea> 
                              
                                    <small class="form-text text-muted">Pequeña descripción de la clase</small>
                                </div>

                              

                            </div>
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-header text-center">
                                        <a href="#"
                                           class="btn btn-accent">Guardar</a>
                                    </div>
                                  
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Video</div>
                                </div>

                                <div class="card">
                                    <div id="player" class="plyr__video-embed embed-responsive embed-responsive-16by9 " >
                                    
                                  
                                    <iframe src="https://www.youtube.com/embed/G7mH-MBLET4?modestbranding=1&disablekb=1&rel=0&autoplay=1&loop=1&mute=1&showinfo=0&controls=0&iv_load_policy=3" allowfullscreen></iframe>
                                
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">URL</label>
                                        <input type="text"
                                               class="form-control"
                                               value=""
                                               placeholder="Enter Video URL">
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
                                            <select name="category"
                                                    class="form-control custom-select">
                                                <option value="vuejs">VueJs</option>
                                                <option value="vuejs">Angular</option>
                                                <option value="vuejs">React</option>
                                            </select>
                                            <small class="form-text text-muted">Seleccione una categoría</small>
                                        </div>
                           
                                        <!-- <div class="form-group mb-0">
                                            <label class="form-label"
                                                   for="select03">Tags</label>
                                            <select id="select03"
                                                    data-toggle="select"
                                                    multiple
                                                    class="form-control">
                                                <option selected="">JavaScript</option>
                                                <option selected="">Angular</option>
                                                <option>Bootstrap</option>
                                                <option>CSS</option>
                                                <option>HTML</option>
                                            </select>
                                            <small class="form-text text-muted">Select one or more tags.</small>
                                        </div> -->
                                    </div>
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