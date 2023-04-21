            <!-- Footer -->

            <div class="bg-white border-top-2 mt-auto">
                    <div class="container page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="<?= media() ?>/images/logo/black-70@2x.png"
                                 width="30"
                                 alt="Luma"> Luma
                        </p>
                        <p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
                        <p class="mb-8pt d-flex">
                            <a href=""
                               class="text-70 text-underline mr-8pt small">Terms</a>
                            <a href=""
                               class="text-70 text-underline small">Privacy policy</a>
                        </p>
                        <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                    </div>
                </div>

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <?php require_once("nav_admin.php") ?>

        </div>

        <!-- // END Drawer Layout -->




        <script>
            const baseurl="<?= base_url(); ?>";
        </script>
        <!-- jQuery -->
        <script src="<?= media() ?>/vendor/jquery.min.js"></script>
        <!-- jQuery personalisado-->
        <!--  Descargar las librerias-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?= media() ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?= media() ?>/js/popper.min.js"></script>
        <script src="<?= media() ?>/js/bootstrap.min.js"></script>
        <script src="<?= media() ?>/js/main.js"></script>
        <script src="<?= media() ?>/js/plugins/pace.min.js"></script>
        <!-- Data table plugin-->
        <script type="text/javascript" src="<?= media() ?>/js/plugins/jquery.dataTables.min.js"></script>
        
        <!-- Data table plugin-->
        <!-- Permite crear tablas de datos atractivas y altamente funcionales-->
        <script type="text/javascript" src="<?= media() ?>/js/plugins/dataTables.bootstrap.min.js"></script>

        <!-- Bootstrap -->
        <!-- El popper libreria qua muestra mensajes emmergentes -->
        <!-- Esta Vendor
        <script src="<?= media() ?>/vendor/popper.min.js"></script>

        <script src="<?= media() ?>/vendor/bootstrap.min.js"></script>-->

        <!-- Perfect Scrollbar -->
        <script src="<?= media() ?>/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="<?= media() ?>/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="<?= media() ?>/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?= media() ?>/js/app.js"></script>

        <!-- Preloader -->
        <script src="<?= media() ?>/js/preloader.js"></script>

        <!-- Sidebar Mini JS -->
        <script src="<?= media() ?>/js/sidebar-mini.js"></script>
        <script>
            (function() {
                'use strict';
                // ENABLE sidebar menu tabs
                $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
                $('.js-sidebar-mini-tabs').on('show.bs.tab', function(e) {
                    $('.js-sidebar-mini-tabs > .active').removeClass('active')
                    $(e.target).parent().addClass('active')
                })
            })()
        </script>


        <script src="<?= media() ?>/js/functions/<?= $data['page_js'] ?>"></script>

        </body>
</html>