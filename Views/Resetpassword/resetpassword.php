<?php
headeradmin($data);
?>
<!-- Page Content -->

<div class="page-section pb-0">
    <div class="container page__container d-flex flex-column flex-sm-row align-items-sm-center">
        <div class="flex">
            <h1 class="h2 mb-0">Reset Password</h1>
            <p class="text-breadcrumb">Account Management</p>
        </div>
        <p class="d-sm-none"></p>
        <a href="" class="btn btn-outline-secondary flex-column">
            Need Help?
            <span class="btn__secondary-text">Contact us</span>
        </a>
    </div>
</div>

<div class="page-section">
    <div class="container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Reset Password</div>
        </div>
        <div class="col-sm-6 p-0">
            <div class="alert alert-soft-warning">
                <div class="d-flex flex-wrap">
                    <div class="mr-8pt">
                        <i class="material-icons">check_circle</i>
                    </div>
                    <div class="flex" style="min-width: 180px">
                        <small class="text-100">
                            An email with password reset instructions has been sent to your email address, if it exists on our system.
                        </small>
                    </div>
                </div>
            </div>

            <form id="formresetpassword" name="formresetpassword" class="forget-form" >
            
                <div class="form-group">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" placeholder="Your email address ..." id="txtemailreset" name="txtemailreset" >
                    <small class="form-text text-muted">We will email you with info on how to reset your password.</small>
                </div>
                <button type="submit" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
</div>

<!-- // END Page Content -->

<?php
footeradmin($data);
footerscript($data);
?>