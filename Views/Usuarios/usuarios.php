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
                </div>

                <div class="container page__container page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Employees</div>
                    </div>

                    <div class="card mb-lg-32pt">

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-date"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-name", "js-lists-values-department", "js-lists-values-status", "js-lists-values-type", "js-lists-values-phone", "js-lists-values-date"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#employees"
                                                       id="customCheckAllemployees">
                                                <label class="custom-control-label"
                                                       for="customCheckAllemployees"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-name">Name</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-department">Department</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-status">Status</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-type">Type</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-phone">Phone</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-date">Hire date</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="employees">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_employees1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_employees1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">BN</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Billy Nunez</strong></p>
                                                            <small class="js-lists-values-email text-50">annabell.kris@yahoo.com</small>
                                                        </div>

                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">link</i>
                                                            <small class="ml-4pt"><strong class="text-50">2</strong></small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Ds</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Design</strong></small>
                                                        <small class="js-lists-values-location text-50">UX Designer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Probation</small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">Temporary</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">239-721-3649</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">19/02/2019</small>
                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_employees2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_employees2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">TP</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Tony Parks</strong></p>
                                                            <small class="js-lists-values-email text-50">vida_glover@gmail.com</small>
                                                        </div>

                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">comment</i>
                                                            <small class="ml-4pt"><strong class="text-50">1</strong></small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Dv</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Development</strong></small>
                                                        <small class="js-lists-values-location text-50">Senior Frontend Developer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">On Contract</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">169-769-4821</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">18/02/2019</small>
                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_employees3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_employees3"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="public/images/people/110/guy-1.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Gilbert Barrett</strong></p>
                                                            <small class="js-lists-values-email text-50">paolo.zieme@gmail.com</small>
                                                        </div>

                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">comment</i>
                                                            <small class="ml-4pt"><strong class="text-50">1</strong></small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">CR</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Customer Relationship</strong></small>
                                                        <small class="js-lists-values-location text-50">CRM Manager</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">On Contract</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">462-060-7408</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">17/02/2019</small>
                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_employees4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_employees4"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="public/images/people/110/guy-2.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Ollie Wallace</strong></p>
                                                            <small class="js-lists-values-email text-50">lorna_kirlin@nora.biz</small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">HR</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>HR</strong></small>
                                                        <small class="js-lists-values-location text-50">HR Manager</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">Full Time</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">285-626-6050</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">16/02/2019</small>
                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr class="selected">

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       checked=""
                                                       id="customCheck1_employees5">
                                                <label class="custom-control-label"
                                                       for="customCheck1_employees5"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="public/images/people/110/guy-3.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Ricardo Bell</strong></p>
                                                            <small class="js-lists-values-email text-50">smith_winfield@douglas.io</small>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Ds</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Design</strong></small>
                                                        <small class="js-lists-values-location text-50">UX Designer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Terminated</small>
                                                <span class="indicator-line rounded bg-danger"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-type text-50">Temporary</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">285-626-6050</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">01/12/2018</small>
                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link"
                                       href="#"
                                       aria-label="Previous">
                                        <span aria-hidden="true"
                                              class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link"
                                       href="#"
                                       aria-label="Page 1">
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link"
                                       href="#"
                                       aria-label="Page 2">
                                        <span>2</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link"
                                       href="#"
                                       aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true"
                                              class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                    </div>

                </div>

                <!-- // END Page Content -->

<?php 
  footeradmin($data);
?>
   