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
                                    <div class="page-separator__text">Basic information</div>
                                </div>

                                <label class="form-label">Course title</label>
                                <div class="form-group mb-24pt">
                                    <input type="text"
                                           class="form-control form-control-lg"
                                           placeholder="Course title"
                                           value="Angular Fundamentals">
                                    <small class="form-text text-muted">Please see our <a href="">course title guideline</a></small>
                                </div>

                                <div class="form-group mb-32pt">
                                    <label class="form-label">Description</label>
                                    <!-- <textarea class="form-control" rows="3" placeholder="Course description"></textarea> -->
                                    <div style="height: 150px;"
                                         class="mb-0"
                                         data-toggle="quill"
                                         data-quill-placeholder="Course description">
                                        <h1>Hello World!</h1>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br></p>
                                    </div>
                                    <small class="form-text text-muted">Shortly describe this course.</small>
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Sections</div>
                                </div>

                                <div class="accordion js-accordion accordion--boxed mb-24pt"
                                     id="parent">
                                    <div class="accordion__item">
                                        <a href="#"
                                           class="accordion__toggle collapsed"
                                           data-toggle="collapse"
                                           data-target="#course-toc-1"
                                           data-parent="#parent">
                                            <span class="flex">Course Overview</span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
                                        <div class="accordion__menu collapse"
                                             id="course-toc-1">
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Watch Trailer</a>
                                                <span class="text-muted">1m 10s</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item open">
                                        <a href="#"
                                           class="accordion__toggle"
                                           data-toggle="collapse"
                                           data-target="#course-toc-2"
                                           data-parent="#parent">
                                            <span class="flex">Getting Started with Angular</span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
                                        <div class="accordion__menu collapse show"
                                             id="course-toc-2">
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Introduction</a>
                                                <span class="text-muted">8m 42s</span>
                                            </div>
                                            <div class="accordion__menu-link active">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Introduction to TypeScript</a>
                                                <span class="text-muted">50m 13s</span>
                                            </div>
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Comparing Angular to AngularJS</a>
                                                <span class="text-muted">12m 10s</span>
                                            </div>
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-take-quiz.html">Quiz: Getting Started With Angular</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <a href="#"
                                           class="accordion__toggle collapsed"
                                           data-toggle="collapse"
                                           data-target="#course-toc-3"
                                           data-parent="#parent">
                                            <span class="flex">Creating and Communicating Between Angular Components</span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
                                        <div class="accordion__menu collapse"
                                             id="course-toc-3">
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Angular Components</a>
                                                <span class="text-muted">04:23</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <a href="#"
                                           class="accordion__toggle collapsed"
                                           data-toggle="collapse"
                                           data-target="#course-toc-4"
                                           data-parent="#parent">
                                            <span class="flex">Exploring the Angular Template Syntax</span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
                                        <div class="accordion__menu collapse"
                                             id="course-toc-4">
                                            <div class="accordion__menu-link">
                                                <i class="material-icons text-70 icon-16pt icon--left">drag_handle</i>
                                                <a class="flex"
                                                   href="student-lesson.html">Template Syntax</a>
                                                <span class="text-muted">04:23</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                   class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Section</a>

                            </div>
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-header text-center">
                                        <a href="#"
                                           class="btn btn-accent">Save changes</a>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex">
                                            <a class="flex"
                                               href="#"><strong>Save Draft</strong></a>
                                            <i class="material-icons text-muted">check</i>
                                        </div>
                                        <div class="list-group-item">
                                            <a href="#"
                                               class="text-danger"><strong>Delete Course</strong></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Video</div>
                                </div>

                                <div class="card">
                                    <div id="player" class="plyr__video-embed embed-responsive embed-responsive-16by9" >
                                    
                                  
                                                    <iframe class="embed-responsive-item"
                                                    src="https://www.youtube.com/embed/G7mH-MBLET4?rel=0" 
                                                    title="Zoro Prueba el Poder de su Nueva Espada Yoru - One Piece" 
                                                    frameborder="0" 
                                                 
                                                    allowfullscreen></iframe>
                                
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
                                    <div class="page-separator__text">Options</div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <select name="category"
                                                    class="form-control custom-select">
                                                <option value="vuejs">VueJs</option>
                                                <option value="vuejs">Angular</option>
                                                <option value="vuejs">React</option>
                                            </select>
                                            <small class="form-text text-muted">Select a category.</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Price</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group form-inline">
                                                        <span class="input-group-prepend"><span class="input-group-text">$</span></span>
                                                        <input type="text"
                                                               class="form-control"
                                                               value="24">
                                                    </div>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">The recommended price is between &dollar;17 and &dollar;24</small>
                                        </div>
                                        <div class="form-group mb-0">
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
                                        </div>
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