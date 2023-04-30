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


   <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/sweetalert.css">
   <!-- la libreria es parte de selectpicker-->
   <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">

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

                  <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg" alt="logo" class="img-fluid"></span>

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

               <!-- Notifications dropdown -->
               <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Messages" data-placement="bottom" data-boundary="window" data-original-title="" title="">
                  <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                     <i class="material-icons icon-24pt">mail_outline</i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                     <div data-perfect-scrollbar="" class="position-relative ps">
                        <div class="dropdown-header"><strong>Messages</strong></div>
                        <div class="list-group list-group-flush mb-0">

                           <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                              <span class="d-flex align-items-center mb-1">
                                 <small class="text-black-50">5 minutes ago</small>

                                 <span class="ml-auto unread-indicator bg-accent"></span>

                              </span>
                              <span class="d-flex">
                                 <span class="avatar avatar-xs mr-2">
                                    <img src="../../public/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                 </span>
                                 <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Michelle</strong>
                                    <span class="text-black-70">Clients loved the new design.</span>
                                 </span>
                              </span>
                           </a>

                           <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center mb-1">
                                 <small class="text-black-50">5 minutes ago</small>

                              </span>
                              <span class="d-flex">
                                 <span class="avatar avatar-xs mr-2">
                                    <img src="../../public/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                 </span>
                                 <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Michelle</strong>
                                    <span class="text-black-70">🔥 Superb job..</span>
                                 </span>
                              </span>
                           </a>

                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                           <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                           <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- // END Notifications dropdown -->

               <!-- Notifications dropdown -->
               <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window" data-original-title="" title="">
                  <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                     <i class="material-icons">notifications_none</i>
                     <span class="badge badge-notifications badge-accent">2</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                     <div data-perfect-scrollbar="" class="position-relative ps">
                        <div class="dropdown-header"><strong>System notifications</strong></div>
                        <div class="list-group list-group-flush mb-0">

                           <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                              <span class="d-flex align-items-center mb-1">
                                 <small class="text-black-50">3 minutes ago</small>

                                 <span class="ml-auto unread-indicator bg-accent"></span>

                              </span>
                              <span class="d-flex">
                                 <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                       <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                    </span>
                                 </span>
                                 <span class="flex d-flex flex-column">

                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                 </span>
                              </span>
                           </a>

                           <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center mb-1">
                                 <small class="text-black-50">5 hours ago</small>

                              </span>
                              <span class="d-flex">
                                 <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                       <i class="material-icons font-size-16pt text-primary">group_add</i>
                                    </span>
                                 </span>
                                 <span class="flex d-flex flex-column">
                                    <strong class="text-black-100">Adrian. D</strong>
                                    <span class="text-black-70">Wants to join your private group.</span>
                                 </span>
                              </span>
                           </a>

                           <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center mb-1">
                                 <small class="text-black-50">1 day ago</small>

                              </span>
                              <span class="d-flex">
                                 <span class="avatar avatar-xs mr-2">
                                    <span class="avatar-title rounded-circle bg-light">
                                       <i class="material-icons font-size-16pt text-warning">storage</i>
                                    </span>
                                 </span>
                                 <span class="flex d-flex flex-column">

                                    <span class="text-black-70">Your deploy was successful.</span>
                                 </span>
                              </span>
                           </a>

                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                           <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                           <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- // END Notifications dropdown -->

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