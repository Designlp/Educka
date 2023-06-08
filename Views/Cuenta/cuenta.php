<?php
headeradmin($data);
?>
<!-- Page Content -->
<!-- // END Header -->

<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Editar Cuenta</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item">

                        <a href="">Account</a>

                    </li>

                    <li class="breadcrumb-item active">

                        Edit Account

                    </li>

                </ol>

            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="container page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Basic Information s</div>
    </div>
    <div class="col-md-6 p-0">
        <form autocomplete="off" class="form-horizontal" id="formcuentas" name="formcuentas" enctype="multipart/form-data">
  
            <div class="form-group">
                <label class="form-label">Cedula Identidad</label>
                <input type="text" class="form-control" name="txtci" placeholder="C.I.">
            </div>
            <div class="form-group">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txtnombre" placeholder="Nombre">
            </div>

            <div class="form-group">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" name="txtapellido" placeholder="Apellidos">
            </div>
            <div class="form-group">
                <label class="form-label"> Telefono</label>
                <input type="text" class="form-control" name="txttelefono" placeholder="Telefono"> 
            </div>
            <button class="btn btn-primary btneditcuentas">Save changes</button>
        </form>
    </div>
</div>
<!-- // END Page Content -->
<?php
footeradmin($data);
footerscript($data);
?>