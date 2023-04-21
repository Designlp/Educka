 <!-- Header -->

 <div class="navbar navbar-expand navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                            type="button"
                            data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html"
                       class="navbar-brand mr-16pt d-lg-none">
                        <!-- <img class="navbar-brand-icon" src="<?= media() ?>/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="<?= media() ?>/images/illustration/student/128/white.svg"
                                     alt="logo"
                                     class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">Luma</span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                        <li class="nav-item active">
                            <a href="index.html"
                               class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Courses</a>
                            <div class="dropdown-menu">
                                <a href="courses.html"
                                   class="dropdown-item">Browse Courses</a>
                                <a href="student-course.html"
                                   class="dropdown-item">Preview Course</a>
                                <a href="student-lesson.html"
                                   class="dropdown-item">Preview Lesson</a>
                                <a href="student-take-course.html"
                                   class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                                <a href="student-take-lesson.html"
                                   class="dropdown-item">Take Lesson</a>
                                <a href="student-take-quiz.html"
                                   class="dropdown-item">Take Quiz</a>
                                <a href="student-quiz-result-details.html"
                                   class="dropdown-item">Quiz Result</a>
                                <a href="student-dashboard.html"
                                   class="dropdown-item">Student Dashboard</a>
                                <a href="student-my-courses.html"
                                   class="dropdown-item">My Courses</a>
                                <a href="student-quiz-results.html"
                                   class="dropdown-item">My Quizzes</a>
                                <a href="help-center.html"
                                   class="dropdown-item">Help Center</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Paths</a>
                            <div class="dropdown-menu">
                                <a href="paths.html"
                                   class="dropdown-item">Browse Paths</a>
                                <a href="student-path.html"
                                   class="dropdown-item">Path Details</a>
                                <a href="student-path-assessment.html"
                                   class="dropdown-item">Skill Assessment</a>
                                <a href="student-path-assessment-result.html"
                                   class="dropdown-item">Skill Result</a>
                                <a href="student-paths.html"
                                   class="dropdown-item">My Paths</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.html"
                               class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">Teachers</a>
                            <div class="dropdown-menu">
                                <a href="instructor-dashboard.html"
                                   class="dropdown-item">Instructor Dashboard</a>
                                <a href="instructor-courses.html"
                                   class="dropdown-item">Manage Courses</a>
                                <a href="instructor-quizzes.html"
                                   class="dropdown-item">Manage Quizzes</a>
                                <a href="instructor-earnings.html"
                                   class="dropdown-item">Earnings</a>
                                <a href="instructor-statement.html"
                                   class="dropdown-item">Statement</a>
                                <a href="instructor-edit-course.html"
                                   class="dropdown-item">Edit Course</a>
                                <a href="instructor-edit-quiz.html"
                                   class="dropdown-item">Edit Quiz</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"
                            data-toggle="tooltip"
                            data-title="Community"
                            data-placement="bottom"
                            data-boundary="window">
                            <a href="#"
                               class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               data-caret="false">
                                <i class="material-icons">people_outline</i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="teachers.html"
                                   class="dropdown-item">Browse Teachers</a>
                                <a href="student-profile.html"
                                   class="dropdown-item">Student Profile</a>
                                <a href="teacher-profile.html"
                                   class="dropdown-item">Instructor Profile</a>
                                <a href="blog.html"
                                   class="dropdown-item">Blog</a>
                                <a href="blog-post.html"
                                   class="dropdown-item">Blog Post</a>
                                <a href="faq.html"
                                   class="dropdown-item">FAQ</a>
                                <a href="help-center.html"
                                   class="dropdown-item">Help Center</a>
                                <a href="discussions.html"
                                   class="dropdown-item">Discussions</a>
                                <a href="discussion.html"
                                   class="dropdown-item">Discussion Details</a>
                                <a href="discussions-ask.html"
                                   class="dropdown-item">Ask Question</a>
                            </div>
                        </li>
                    </ul>

                    <form class="search-form navbar-search d-none d-lg-flex mr-16pt"
                          action="index.html"
                          style="max-width: 230px">
                        <button class="btn"
                                type="submit"><i class="material-icons">search</i></button>
                        <input type="text"
                               class="form-control"
                               placeholder="Search ...">
                    </form>

                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="login.html"
                               class="nav-link"
                               data-toggle="tooltip"
                               data-title="Login"
                               data-placement="bottom"
                               data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.html"
                               class="btn btn-outline-dark">Get Started</a>
                        </li>
                    </ul>
                </div>
  <!-- // END Header -->

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
                                    data-toggle="tooltip"
                                    data-title="Student"
                                    data-placement="right"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_student"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_student"
                                       aria-selected="true">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i>
                                        <span class="sidebar-menu-text">Student</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-toggle="tooltip"
                                    data-title="Instructor"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_instructor"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_instructor"
                                       aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">format_shapes</i>
                                        <span class="sidebar-menu-text">Instructor</span>
                                    </a>2
                                </li>
                                <li class="sidebar-menu-item "
                                    data-toggle="tooltip"
                                    data-title="Apps"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_apps"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_apps">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">apps</i>
                                        <span class="sidebar-menu-text">Apps</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item "
                                    data-toggle="tooltip"
                                    data-title="Account"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_account"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_account">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>
                                        <span class="sidebar-menu-text">Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item "
                                    data-toggle="tooltip"
                                    data-title="Messaging"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_messaging"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_messaging">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">message</i>
                                        <span class="sidebar-menu-text">Messaging</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item"
                                    data-toggle="tooltip"
                                    data-title="Components"
                                    data-placement="right"
                                    data-container="body"
                                    data-boundary="window">
                                    <a class="sidebar-menu-button"
                                       href="#sm_components"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                        <span class="sidebar-menu-text">Components</span>
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
                                 id="sm_account_1">
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing.html">Billing</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-history.html">Payments</a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane "
                                 id="sm_apps">
                                <div class="sidebar-heading">Apps</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button js-sidebar-collapse"
                                           data-toggle="collapse"
                                           href="#enterprise_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                            Enterprise
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="enterprise_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="erp-dashboard.html">
                                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="crm-dashboard.html">
                                                    <span class="sidebar-menu-text">CRM Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="hr-dashboard.html">
                                                    <span class="sidebar-menu-text">HR Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="employees.html">
                                                    <span class="sidebar-menu-text">Employees</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="staff.html">
                                                    <span class="sidebar-menu-text">Staff</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="leaves.html">
                                                    <span class="sidebar-menu-text">Leaves</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="departments.html">
                                                    <span class="sidebar-menu-text">Departments</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#community_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                            Community
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="community_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="teachers.html">

                                                    <span class="sidebar-menu-text">Browse Teachers</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="student-profile.html">

                                                    <span class="sidebar-menu-text">Student Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="teacher-profile.html">

                                                    <span class="sidebar-menu-text">Teacher Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="blog.html">

                                                    <span class="sidebar-menu-text">Blog</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="blog-post.html">

                                                    <span class="sidebar-menu-text">Blog Post</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="faq.html">
                                                    <span class="sidebar-menu-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="help-center.html">
                                                    <!--  -->
                                                    <span class="sidebar-menu-text">Help Center</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussions.html">
                                                    <span class="sidebar-menu-text">Discussions</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussion.html">
                                                    <span class="sidebar-menu-text">Discussion Details</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="discussions-ask.html">
                                                    <span class="sidebar-menu-text">Ask Question</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#productivity_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                            Productivity
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="productivity_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="projects.html">
                                                    <span class="sidebar-menu-text">Projects</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="tasks-board.html">
                                                    <span class="sidebar-menu-text">Tasks Board</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="tasks-list.html">
                                                    <span class="sidebar-menu-text">Tasks List</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="kanban.html">
                                                    <span class="sidebar-menu-text">Kanban</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#cms_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                            CMS
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="cms_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="cms-dashboard.html">
                                                    <span class="sidebar-menu-text">CMS Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="posts.html">
                                                    <span class="sidebar-menu-text">Posts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#ecommerce_menu">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                            eCommerce
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse sm-indent"
                                            id="ecommerce_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="ecommerce.html">
                                                    <span class="sidebar-menu-text">Shop Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button disabled"
                                                   href="edit-product.html">
                                                    <span class="sidebar-menu-text">Edit Product</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane  fade active show "
                                 id="sm_student">
                                <div class="sidebar-heading">Student</div>
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="index.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                            <span class="sidebar-menu-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                            <span class="sidebar-menu-text">Browse Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="paths.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                            <span class="sidebar-menu-text">Browse Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-dashboard.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                            <span class="sidebar-menu-text">Student Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-my-courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                            <span class="sidebar-menu-text">My Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-paths.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                                            <span class="sidebar-menu-text">My Paths</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                                            <span class="sidebar-menu-text">Path Details</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                            <span class="sidebar-menu-text">Course Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-lesson.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                            <span class="sidebar-menu-text">Lesson Preview</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                            <span class="sidebar-menu-text">Take Course</span>
                                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-lesson.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                            <span class="sidebar-menu-text">Take Lesson</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-take-quiz.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                            <span class="sidebar-menu-text">Take Quiz</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-results.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                            <span class="sidebar-menu-text">My Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-quiz-result-details.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                            <span class="sidebar-menu-text">Quiz Result</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                            <span class="sidebar-menu-text">Skill Assessment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="student-path-assessment-result.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                            <span class="sidebar-menu-text">Skill Result</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_instructor">
                                <div class="sidebar-heading">Instructor</div>
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-dashboard.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-courses.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                            <span class="sidebar-menu-text">Manage Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-quizzes.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                            <span class="sidebar-menu-text">Manage Quizzes</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-earnings.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                                            <span class="sidebar-menu-text">Earnings</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-statement.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                            <span class="sidebar-menu-text">Statement</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-course.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                            <span class="sidebar-menu-text">Edit Course</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-edit-quiz.html">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                            <span class="sidebar-menu-text">Edit Quiz</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_account">
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="pricing.html">
                                            <span class="sidebar-menu-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="login.html">
                                            <span class="sidebar-menu-text">Login</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="signup.html">
                                            <span class="sidebar-menu-text">Signup</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="signup-payment.html">
                                            <span class="sidebar-menu-text">Payment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="reset-password.html">
                                            <span class="sidebar-menu-text">Reset Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="change-password.html">
                                            <span class="sidebar-menu-text">Change Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-profile.html">
                                            <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-notifications.html">
                                            <span class="sidebar-menu-text">Email Notifications</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="edit-account-password.html">
                                            <span class="sidebar-menu-text">Account Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing.html">
                                            <span class="sidebar-menu-text">Subscription</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-upgrade.html">
                                            <span class="sidebar-menu-text">Upgrade Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-payment.html">
                                            <span class="sidebar-menu-text">Payment Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-history.html">
                                            <span class="sidebar-menu-text">Payment History</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="billing-invoice.html">
                                            <span class="sidebar-menu-text">Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane "
                                 id="sm_messaging">
                                <div class="sidebar-heading">Messaging</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="messages.html">
                                            <span class="sidebar-menu-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="email.html">
                                            <span class="sidebar-menu-text">Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
                                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
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