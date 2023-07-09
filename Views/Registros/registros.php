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
                <input id="email" type="text" class="form-control" placeholder="Your email address ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Apellido</label>
                <input id="email" type="text" class="form-control" placeholder="Your email address ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Telefono</label>
                <input id="email" type="text" class="form-control" placeholder="Your email address ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Correo</label>
                <input id="email" type="text" class="form-control" placeholder="Your email address ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <input id="password" type="password" class="form-control" placeholder="Your first and last name ...">
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
<!-- // END Page Content -->
<?php
footeradmin($data);
footerscript($data);
?>