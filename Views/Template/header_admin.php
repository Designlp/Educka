<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Educka</title>

   <!-- Prevent the demo from appearing in search engines -->
   <meta name="robots" content="noindex">

   <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">
   
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


   <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/sweetalert.css">
   <!-- la libreria es parte de selectpicker-->
   <link type="text/css" href="<?= media() ?>/vendor/select2/select2.min.css" rel="stylesheet">
   <link type="text/css" href="<?= media() ?>/css/select2.css" rel="stylesheet">
   <!-- Preloader -->
   <link type="text/css" href="<?= media() ?>/vendor/spinkit.css" rel="stylesheet">

   <!-- Perfect Scrollbar -->
   <link type="text/css" href="<?= media() ?>/vendor/perfect-scrollbar.css" rel="stylesheet">

   <!-- Material Design Icons -->
   <link type="text/css" href="<?= media() ?>/css/material-icons.css" rel="stylesheet">

   <!-- Font Awesome Icons -->
   <link type="text/css" href="<?= media() ?>/css/fontawesome.css" rel="stylesheet">

   <!-- Preloader -->
   <link type="text/css" href="<?= media() ?>/css/preloader.css" rel="stylesheet">

   <!-- App CSS -->
   <link type="text/css" href="<?= media() ?>/css/app.css" rel="stylesheet">
   <link type="text/css" href="<?= media() ?>/css/educka.css" rel="stylesheet">
   
   <link type="text/css" href="<?= media() ?>/css/quill.css" rel="stylesheet">
   <link type="text/css" href="<?= media() ?>/css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
</head>

<body class="layout-mini layout-mini">

   <div class="preloader">



   </div>



   <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
      <div class="mdk-drawer-layout__content page-content">

         <!-- header-->

         <div class="navbar navbar-expand pr-0 navbar-dark navbar-dark-pickled-bluewood navbar-shadow" id="default-navbar" data-primary="">

            <!-- Navbar Toggler -->

            <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
               <span class="material-icons">short_text</span>
            </button>

            <!-- // END Navbar Toggler -->

            <!-- Navbar Brand -->

            <a href="index.html" class="navbar-brand mr-16pt d-lg-none">

               <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                  <span class="avatar-title rounded bg-primary"><img src="<?= media() ?>/images/illustration/student/128/white.svg" alt="logo" class="img-fluid"></span>

               </span>

               <span class="d-none d-lg-block">Luma</span>
            </a>

            <!-- // END Navbar Brand -->

       
            <!-- Navbar Search -->

            <form class="search-form navbar-search d-none d-md-flex mr-16pt" action="index.html">
               <button class="btn" type="submit"><i class="material-icons">search</i></button>
               <input type="text" class="form-control" placeholder="Search ...">
            </form>

            <!-- // END Navbar Search -->

            <div class="flex"></div>

            <!-- Navbar Menu -->

            <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

             

               

               <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">

                     <span class="avatar avatar-sm mr-8pt2">

                        <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                     </span>

                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <div class="dropdown-header"><strong>Account</strong></div>
                     <a class="dropdown-item" href="edit-account.html">Edit Account</a>
                     <a class="dropdown-item" href="billing.html">Billing</a>
                     <a class="dropdown-item" href="billing-history.html">Payments</a>
                     <a class="dropdown-item" href="login.html">Logout</a>
                  </div>
               </div>
            </div>

            <!-- // END Navbar Menu -->

         </div>