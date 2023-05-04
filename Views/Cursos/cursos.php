<?php 
  headeradmin($data);
  ?>
<!-- Page Content -->

                <div class="container page__container page-section pb-0">
                    <h1 class="h2 mb-0">Tables</h1>
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Components</li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <br>
                    <button class="btn btn-primary btn-sm" type="button" onclick="openmodal()"  >Nuevo</button>
                </div>

                <div class="form-group">
                                    <label class="form-label" for="select01">Basic</label>
                                    <select id="select01" data-toggle="select" class="form-control select2-hidden-accessible" data-select2-id="select01" tabindex="-1" aria-hidden="true">
                                        <option selected="" data-select2-id="2">My first option</option>
                                        <option data-select2-id="16">Another option</option>
                                        <option data-select2-id="17">Third option is here</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="1" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select01-container"><span class="select2-selection__rendered" id="select2-select01-container" role="textbox" aria-readonly="true" title="Third option is here">Third option is here</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>

                <div class="container page__container page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Employees</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="tablecursos">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Autor</th>
                                    <th>Titulo</th>
                                    <th>Disponible</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- // END Page Content -->

<?php 
  footeradmin($data);
  getmodal('modalcursos',$data);
?>

</body>
</html>