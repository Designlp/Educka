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
                <div class="form-group">
                <label for="listprivado">Disponible</label>
                <select class="form-control" id="listprivado" name="listprivado">
                  <option value="0">Privado</option>
                  <option value="1">Publico</option>
                </select>
              </div>
<?php 

  footeradmin($data);
  getmodal('modalcursos',$data);
?>

</body>
</html>