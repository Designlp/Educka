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
    <button class="btn btn-primary btn-sm" type="button" onclick="openmodal()">Nuevo</button>
</div>



<div class="container page__container page-section">

    <div class="page-separator">
        <div class="page-separator__text">Employees</div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <table class="table table-striped table-bordered dt-responsive nowrap" id="tableusuarios" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
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
getmodal('modalusuarios', $data);
footerscript($data);
?>