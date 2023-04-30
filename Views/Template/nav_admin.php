 <!-- drawer -->
 <div class="mdk-drawer js-mdk-drawer layout-mini__drawer"
                 id="default-drawer">
                <div class="mdk-drawer__content js-sidebar-mini"
                     data-responsive-width="992px"
                     data-layout="mini">

                    <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">

                        <!-- Brand -->
                        <a href="index.html"
                           class="sidebar-brand p-0 navbar-height d-flex justify-content-center">

                            <span class="avatar avatar-sm ">

                                <span class="avatar-title rounded bg-primary"><img src="<?= media() ?>/images/illustration/student/128/white.svg"
                                         class="img-fluid"
                                         alt="logo" /></span>

                            </span>

                        </a>

                        <div class="flex d-flex flex-column justify-content-start"
                             data-perfect-scrollbar>
                            <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 js-sidebar-mini-tabs"
                                role="tablist">
                                <li class="sidebar-menu-item active"
                                    data-title="Usuarios"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_components"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">group</i>
                                        <span class="sidebar-menu-text">Usuarios</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-toggle="tooltip"
                                    data-title="Layouts"
                                    data-placement="right"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_layouts"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_layouts"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Layouts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>




                    <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary pt-16pt"
                         data-perfect-scrollbar>

                        <div class="tab-content">
                            <div class="tab-pane"
                                 id="sm_components">
                                <div class="sidebar-heading">UI Components</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#components_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                            Components
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="components_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-buttons.html">
                                                    <span class="sidebar-menu-text">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-avatars.html">
                                                    <span class="sidebar-menu-text">Avatars</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-forms.html">
                                                    <span class="sidebar-menu-text">Forms</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-loaders.html">
                                                    <span class="sidebar-menu-text">Loaders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-tables.html">
                                                    <span class="sidebar-menu-text">Tables</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-cards.html">
                                                    <span class="sidebar-menu-text">Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-icons.html">
                                                    <span class="sidebar-menu-text">Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-tabs.html">
                                                    <span class="sidebar-menu-text">Tabs</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-alerts.html">
                                                    <span class="sidebar-menu-text">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-badges.html">
                                                    <span class="sidebar-menu-text">Badges</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-progress.html">
                                                    <span class="sidebar-menu-text">Progress</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-pagination.html">
                                                    <span class="sidebar-menu-text">Pagination</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="">
                                                    <span class="sidebar-menu-text">Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#plugins_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                            Plugins
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="plugins_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-charts.html">
                                                    <span class="sidebar-menu-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-flatpickr.html">
                                                    <span class="sidebar-menu-text">Flatpickr</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-daterangepicker.html">
                                                    <span class="sidebar-menu-text">Date Range Picker</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-dragula.html">
                                                    <span class="sidebar-menu-text">Dragula</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-dropzone.html">
                                                    <span class="sidebar-menu-text">Dropzone</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-range-sliders.html">
                                                    <span class="sidebar-menu-text">Range Sliders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-quill.html">
                                                    <span class="sidebar-menu-text">Quill</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-select2.html">
                                                    <span class="sidebar-menu-text">Select2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-nestable.html">
                                                    <span class="sidebar-menu-text">Nestable</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-fancytree.html">
                                                    <span class="sidebar-menu-text">Fancy Tree</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-maps-vector.html">
                                                    <span class="sidebar-menu-text">Vector Maps</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-sweet-alert.html">
                                                    <span class="sidebar-menu-text">Sweet Alert</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ui-plugin-toastr.html">
                                                    <span class="sidebar-menu-text">Toastr</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="">
                                                    <span class="sidebar-menu-text">Disabled</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane"
                                 id="sm_layouts">
                                <div class="sidebar-heading">Layouts</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Compact_App_Layout/index.html">
                                            <span class="sidebar-menu-text">Compact</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_App_Layout/index.html">
                                            <span class="sidebar-menu-text">Mini</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Mini_Secondary_Layout/index.html">
                                            <span class="sidebar-menu-text">Mini + Secondary</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../App_Layout/index.html">
                                            <span class="sidebar-menu-text">App</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Boxed_App_Layout/index.html">
                                            <span class="sidebar-menu-text">Boxed</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Sticky_App_Layout/index.html">
                                            <span class="sidebar-menu-text">Sticky</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../Fixed_Layout/index.html">
                                            <span class="sidebar-menu-text">Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- // END drawer -->