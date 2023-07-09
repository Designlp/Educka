<?php
headeradmin($data);
?>
<!-- Page Content -->
<!-- // END Header -->

<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form id="formregistro" name="formregistro" class="col-md-5 p-0 mx-auto">
            <div class="form-group">
                <label class="form-label" for="email">Nombre</label>
                <input id="txtnombre" name="txtnombre" type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Apellido</label>
                <input id="txtapellido" name="txtapellido" type="text" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Telefono</label>
                <input id="txttelefono" name="txttelefono" type="text" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Correo</label>
                <input id="txtcorreo" name="txtcorreo" type="email" class="form-control" placeholder="usuario@gmail.com">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <input id="txtcontras" name="txtcontras" type="password" class="form-control" >
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Crear Usuario</button>
            </div>
        </form>
    </div>
</div>
<!-- // END Page Content -->
<?php
footeradmin($data);
footerscript($data);
?>