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
                        <div class="page-separator__text">Projects</div>
                    </div>

                    <div class="card dashboard-area-tabs p-relative o-hidden mb-lg-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters"
                                 role="tablist">
                                <div class="col-auto">
                                    <a href="#"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-selected="true"
                                       class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">3</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Active</strong>
                                            <small class="card-subtitle text-50">Ongoing Projects</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#"
                                       data-toggle="tab"
                                       role="tab"
                                       aria-selected="false"
                                       class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong class="card-title">Archived</strong>
                                            <small class="card-subtitle text-50">Past Projects</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-date"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#projects"
                                                       id="customCheckAll">
                                                <label class="custom-control-label"
                                                       for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-project">Project</a>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-lead">Lead / Team</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-status">Status</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-budget">Budget</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-date">Due</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="projects">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-primary text-white">SM</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Social Media API</strong></small>
                                                        <small class="js-lists-values-location text-50">Twitter</small>
                                                    </div>
                                                </div>
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
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Billy Nunez</strong></p>
                                                            <small class="js-lists-values-email text-50">Quality Assurance</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">QA</small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;1,200</strong></small>
                                                <small class="text-50">Invoice Sent</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                                <small class="text-50">18 days</small>
                                            </div>
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
                                                       id="customCheck1_2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-accent text-white">PM</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Project Management App</strong></small>
                                                        <small class="js-lists-values-location text-50">Github</small>
                                                    </div>
                                                </div>
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
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Tony Parks</strong></p>
                                                            <small class="js-lists-values-email text-50">iOS Development</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                <span class="indicator-line rounded bg-accent"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;12,500</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>18/02/2019</strong></small>
                                                <small class="text-danger">Overdue</small>
                                            </div>
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
                                                       id="customCheck1_3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_3"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-warning text-white">AD</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Advertising Platform</strong></small>
                                                        <small class="js-lists-values-location text-50">Facebook</small>
                                                    </div>
                                                </div>
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
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Gilbert Barrett</strong></p>
                                                            <small class="js-lists-values-email text-50">Marketing</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                <span class="indicator-line rounded bg-accent"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;7,100</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>17/02/2019</strong></small>
                                                <small class="text-50">15 days</small>
                                            </div>
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
                                                       id="customCheck1_4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_4"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">FD</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Frontend Development</strong></small>
                                                        <small class="js-lists-values-location text-50">Trello</small>
                                                    </div>
                                                </div>
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
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Ollie Wallace</strong></p>
                                                            <small class="js-lists-values-email text-50">Design</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Designing</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;4,200</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>16/02/2019</strong></small>
                                                <small class="text-50">15 days</small>
                                            </div>
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
                                                       id="customCheck1_5">
                                                <label class="custom-control-label"
                                                       for="customCheck1_5"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">DU</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Database Upgrade</strong></small>
                                                        <small class="js-lists-values-location text-50">MySQL</small>
                                                    </div>
                                                </div>
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
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Ricardo Bell</strong></p>
                                                            <small class="js-lists-values-email text-50">Web Development</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Waiting</small>
                                                <span class="indicator-line rounded bg-danger"></span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;130</strong></small>
                                                <small class="text-danger">Overdue</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>01/12/2018</strong></small>
                                                <small class="text-50">1 day</small>
                                            </div>
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

                    <div class="page-separator">
                        <div class="page-separator__text">Clients</div>
                    </div>

                    <div class="card mb-lg-32pt">

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-date"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-name", "js-lists-values-company", "js-lists-values-phone", "js-lists-values-date"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#clients"
                                                       id="customCheckAll_clients">
                                                <label class="custom-control-label"
                                                       for="customCheckAll_clients"><span class="text-hide">Toggle all</span></label>
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
                                               data-sort="js-lists-values-company">Company</a>
                                        </th>

                                        <th style="width: 37px;">Tags</th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-phone">Phone</a>
                                        </th>

                                        <th style="width: 120px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-date">Added</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="clients">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_clients_1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_clients_1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">BN</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-name">Billy Nunez</strong></p>
                                                        <small class="js-lists-values-email text-50">annabell.kris@yahoo.com</small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-warning">FM</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-company"><strong>Frontend Matter Inc.</strong></small>
                                                        <small class="js-lists-values-location text-50">Leuschkefurt</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">User</a>

                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">239-721-3649</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">19 February 2019</small>
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
                                                       id="customCheck1_clients_2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_clients_2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">TP</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-name">Tony Parks</strong></p>
                                                        <small class="js-lists-values-email text-50">vida_glover@gmail.com</small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-accent">HH</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-company"><strong>Huma Huma Inc.</strong></small>
                                                        <small class="js-lists-values-location text-50">Mayerberg</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Admin</a>

                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">169-769-4821</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">18 February 2019</small>
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
                                                       id="customCheck1_clients_3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_clients_3"><span class="text-hide">Check</span></label>
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

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-name">Gilbert Barrett</strong></p>
                                                        <small class="js-lists-values-email text-50">paolo.zieme@gmail.com</small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Admin</a>

                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">462-060-7408</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">17 February 2019</small>
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
                                                       id="customCheck1_clients_4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_clients_4"><span class="text-hide">Check</span></label>
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

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-name">Ollie Wallace</strong></p>
                                                        <small class="js-lists-values-email text-50">lorna_kirlin@nora.biz</small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                        </td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Manager</a>

                                        </td>

                                        <td>
                                            <small class="js-lists-values-phone text-50">285-626-6050</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">16 February 2019</small>
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

                    <div class="page-separator">
                        <div class="page-separator__text">Shift distribution</div>
                    </div>

                    <div class="card mb-lg-32pt">

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-values='["js-lists-values-name"]'>

                            <table class="table table-bordered table-flush mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#contacts"
                                                       id="customCheckAll_contacts">
                                                <label class="custom-control-label"
                                                       for="customCheckAll_contacts"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th class="border-left-0">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-name">Name</a>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Monday <small>25/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Tuesday <small>26/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Wednesday <small>27/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Thursday <small>28/02/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Friday <small>01/03/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Saturday <small>02/03/2019</small>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="lh-1 d-flex flex-column text-50 my-4pt">
                                                Sunday <small>03/03/2019</small>
                                            </div>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="contacts">

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_contacts_1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_contacts_1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle bg-white border text-100">BN</span>

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Billy Nunez</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_contacts_2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_contacts_2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle bg-white border text-100">TP</span>

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Tony Parks</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr class="selected">

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       checked=""
                                                       id="customCheck1_contacts_3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_contacts_3"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="public/images/people/110/guy-1.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Gilbert Barrett</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Night</strong></small>
                                                <small class="text-black-50">20:00 - 08:00</small>
                                            </a>

                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0 border-right-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_contacts_4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_contacts_4"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td class="border-left-0">

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <img src="public/images/people/110/guy-2.jpg"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">

                                                </div>
                                                <div class="media-body ml-4pt">

                                                    <p class="mb-0"><strong class="js-lists-values-name">Ollie Wallace</strong></p>

                                                </div>
                                            </div>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                            <a class="d-flex flex-column border-1 rounded bg-light px-8pt py-4pt lh-1"
                                               href="">
                                                <small><strong class="js-lists-values-name text-black-100">Day</strong></small>
                                                <small class="text-black-50">07:30 - 20:00</small>
                                            </a>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-right">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer border-0 p-8pt">

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
                        <!-- <div class="card-body text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">Leave requests</div>
                    </div>

                    <div class="card mb-lg-32pt">

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-from"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#leaves"
                                                       id="customCheckAllleaves">
                                                <label class="custom-control-label"
                                                       for="customCheckAllleaves"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-name">Name</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-status">Status</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-policy">Policy</a>
                                        </th>
                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-reason">Reason</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-days">Days</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-available">Available</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-from">From</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-to">To</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="leaves">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_leaves1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_leaves1"><span class="text-hide">Check</span></label>
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

                                                    </div>

                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Pending</small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50">Anual Leave</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50">Family Vacation</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">15 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-available text-50">22 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-from text-50">19/02/2019</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-to text-50">19/02/2019</small>
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
                                                       id="customCheck1_leaves2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_leaves2"><span class="text-hide">Check</span></label>
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

                                                    </div>

                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Approved</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50">Anual Leave</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50">&mdash;</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">7 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-available text-50">15 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-from text-50">18/02/2019</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-to text-50">18/02/2019</small>
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
                                                       id="customCheck1_leaves3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_leaves3"><span class="text-hide">Check</span></label>
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

                                                    </div>

                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Approved</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50">Anual Leave</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50">&mdash;</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">7 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-available text-50">22 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-from text-50">17/02/2019</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-to text-50">17/02/2019</small>
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
                                                       id="customCheck1_leaves4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_leaves4"><span class="text-hide">Check</span></label>
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
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Approved</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50">Anual Leave</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50">&mdash;</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">15 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-available text-50">15 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-from text-50">16/02/2019</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-to text-50">16/02/2019</small>
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
                                                       id="customCheck1_leaves5">
                                                <label class="custom-control-label"
                                                       for="customCheck1_leaves5"><span class="text-hide">Check</span></label>
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
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Rejected</small>
                                                <span class="indicator-line rounded bg-danger"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50">Anual Leave</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50">&mdash;</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">15 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-available text-50">7 days</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-from text-50">01/12/2018</small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-to text-50">01/12/2018</small>
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

                    <div class="page-separator">
                        <div class="page-separator__text">Users</div>
                    </div>

                    <div class="card mb-lg-32pt">

                        <div class="table-responsive"
                             data-toggle="lists"
                             data-lists-sort-by="js-lists-values-employee-name"
                             data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;"
                                            class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-toggle-check-all"
                                                       data-target="#users"
                                                       id="customCheckAllusers">
                                                <label class="custom-control-label"
                                                       for="customCheckAllusers"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-employee-name">Employee</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-employer-name">Employer</a>
                                        </th>

                                        <th class="text-center"
                                            style="width: 48px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-projects">Projects</a>
                                        </th>

                                        <th style="width: 37px;">Status</th>

                                        <th style="width: 120px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-activity">Activity</a>
                                        </th>
                                        <th style="width: 51px;">
                                            <a href="javascript:void(0)"
                                               class="sort"
                                               data-sort="js-lists-values-earnings">Earnings</a>
                                        </th>
                                        <th style="width: 24px;"
                                            class="pl-0"></th>
                                    </tr>
                                </thead>
                                <tbody class="list"
                                       id="users">

                                    <tr class="selected">

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       checked=""
                                                       id="customCheck1_users1">
                                                <label class="custom-control-label"
                                                       for="customCheck1_users1"><span class="text-hide">Check</span></label>
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

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Michael Smith</strong></p>
                                                        <small class="js-lists-values-employee-email text-50"></small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                <a href=""
                                                   class="text-70"><span class="js-lists-values-employer-name">Black Ops</span></a>
                                            </div>
                                        </td>

                                        <td class="text-center js-lists-values-projects small">12</td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Admin</a>

                                        </td>

                                        <td class="text-50 js-lists-values-activity small">3 days ago</td>
                                        <td class="js-lists-values-earnings small">$12,402</td>
                                        <td class="text-right pl-0">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_users2">
                                                <label class="custom-control-label"
                                                       for="customCheck1_users2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">CS</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Connie Smith</strong></p>
                                                        <small class="js-lists-values-employee-email text-50"></small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                <a href=""
                                                   class="text-70"><span class="js-lists-values-employer-name">Backend Ltd</span></a>
                                            </div>
                                        </td>

                                        <td class="text-center js-lists-values-projects small">42</td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">User</a>

                                        </td>

                                        <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                        <td class="js-lists-values-earnings small">$1,943</td>
                                        <td class="text-right pl-0">
                                            <a href=""
                                               class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input js-check-selected-row"
                                                       id="customCheck1_users3">
                                                <label class="custom-control-label"
                                                       for="customCheck1_users3"><span class="text-hide">Check</span></label>
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

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-employee-name">John Connor</strong></p>
                                                        <small class="js-lists-values-employee-email text-50"></small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                <a href=""
                                                   class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                            </div>
                                        </td>

                                        <td class="text-center js-lists-values-projects small">31</td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Manager</a>

                                        </td>

                                        <td class="text-50 js-lists-values-activity small">2 weeks ago</td>
                                        <td class="js-lists-values-earnings small">$1,401</td>
                                        <td class="text-right pl-0">
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
                                                       id="customCheck1_users4">
                                                <label class="custom-control-label"
                                                       for="customCheck1_users4"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center"
                                                 style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">

                                                    <span class="avatar-title rounded-circle">LB</span>

                                                </div>
                                                <div class="media-body">

                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-employee-name">Laza Bogdan</strong></p>
                                                        <small class="js-lists-values-employee-email text-50"></small>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="text-warning"><i class="material-icons mr-8pt">star</i></a>
                                                <a href=""
                                                   class="text-70"><span class="js-lists-values-employer-name">Frontted</span></a>
                                            </div>
                                        </td>

                                        <td class="text-center js-lists-values-projects small">44</td>

                                        <td>

                                            <a href=""
                                               class="chip chip-outline-secondary">Admin</a>

                                        </td>

                                        <td class="text-50 js-lists-values-activity small">3 weeks ago</td>
                                        <td class="js-lists-values-earnings small">$22,402</td>
                                        <td class="text-right pl-0">
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

                    <div class="row mb-32pt">
                        <div class="col-lg-4">
                            <div class="page-separator">
                                <div class="page-separator__text">Toggle Checkboxes</div>
                            </div>
                            <p class="card-subtitle text-70 mb-16pt mb-lg-0">A tiny plugin which adds the ability to toggle all checkboxes within a table.</p>
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="flex"
                                 style="max-width: 100%">

                                <div class="card m-0">

                                    <div class="table-responsive"
                                         data-toggle="lists"
                                         data-lists-sort-by="js-lists-values-employee-name"
                                         data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>

                                                    <th style="width: 18px;"
                                                        class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-toggle-check-all"
                                                                   data-target="#toggle"
                                                                   id="customCheckAlltoggle">
                                                            <label class="custom-control-label"
                                                                   for="customCheckAlltoggle"><span class="text-hide">Toggle all</span></label>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-employee-name">Employee</a>
                                                    </th>

                                                    <th style="width: 37px;">Status</th>

                                                    <th style="width: 120px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-activity">Activity</a>
                                                    </th>
                                                    <th style="width: 51px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-earnings">Earnings</a>
                                                    </th>
                                                    <th style="width: 24px;"
                                                        class="pl-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list"
                                                   id="toggle">

                                                <tr class="selected">

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   checked=""
                                                                   id="customCheck1_toggle1">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_toggle1"><span class="text-hide">Check</span></label>
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

                                                                <div class="d-flex flex-column">
                                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Michael Smith</strong></p>
                                                                    <small class="js-lists-values-employee-email text-50">lorna_kirlin@nora.biz</small>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Admin</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">3 days ago</td>
                                                    <td class="js-lists-values-earnings small">$12,402</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_toggle2">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_toggle2"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">

                                                                <span class="avatar-title rounded-circle">CS</span>

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex flex-column">
                                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Connie Smith</strong></p>
                                                                    <small class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">User</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                                    <td class="js-lists-values-earnings small">$1,943</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="pr-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   class="custom-control-input js-check-selected-row"
                                                                   id="customCheck1_toggle3">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_toggle3"><span class="text-hide">Check</span></label>
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

                                                                <div class="d-flex flex-column">
                                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">John Connor</strong></p>
                                                                    <small class="js-lists-values-employee-email text-50">vida_glover@gmail.com</small>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Manager</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">2 weeks ago</td>
                                                    <td class="js-lists-values-earnings small">$1,401</td>
                                                    <td class="text-right pl-0">
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
                                                                   id="customCheck1_toggle4">
                                                            <label class="custom-control-label"
                                                                   for="customCheck1_toggle4"><span class="text-hide">Check</span></label>
                                                        </div>
                                                    </td>

                                                    <td>

                                                        <div class="media flex-nowrap align-items-center"
                                                             style="white-space: nowrap;">
                                                            <div class="avatar avatar-sm mr-8pt">

                                                                <span class="avatar-title rounded-circle">LB</span>

                                                            </div>
                                                            <div class="media-body">

                                                                <div class="d-flex flex-column">
                                                                    <p class="mb-0"><strong class="js-lists-values-employee-name">Laza Bogdan</strong></p>
                                                                    <small class="js-lists-values-employee-email text-50">annabell.kris@yahoo.com</small>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Admin</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">3 weeks ago</td>
                                                    <td class="js-lists-values-earnings small">$22,402</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-32pt">
                        <div class="col-lg-4">
                            <div class="page-separator">
                                <div class="page-separator__text">Search</div>
                            </div>
                            <p class="card-subtitle text-70 mb-16pt mb-lg-0">Add search functionality to your tables with List.js. Please read the <a href="http://listjs.com/"
                                   target="_blank">official plugin documentation</a> for a full list of options.</p>
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="flex"
                                 style="max-width: 100%">

                                <div class="card m-0">

                                    <div class="table-responsive"
                                         data-toggle="lists"
                                         data-lists-sort-by="js-lists-values-employee-name"
                                         data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                                        <div class="card-header">
                                            <div class="search-form">
                                                <input type="text"
                                                       class="form-control search"
                                                       placeholder="Search ...">
                                                <button class="btn"
                                                        type="button"><i class="material-icons">search</i></button>
                                            </div>
                                        </div>

                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>

                                                    <th>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-employee-name">Employee</a>
                                                    </th>

                                                    <th style="width: 37px;">Status</th>

                                                    <th style="width: 120px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-activity">Activity</a>
                                                    </th>
                                                    <th style="width: 51px;">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-earnings">Earnings</a>
                                                    </th>
                                                    <th style="width: 24px;"
                                                        class="pl-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list"
                                                   id="search">

                                                <tr>

                                                    <td>

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Michael Smith</strong></p>
                                                            <small class="js-lists-values-employee-email text-50">lorna_kirlin@nora.biz</small>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Admin</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">3 days ago</td>
                                                    <td class="js-lists-values-earnings small">$12,402</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Connie Smith</strong></p>
                                                            <small class="js-lists-values-employee-email text-50">paolo.zieme@gmail.com</small>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">User</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">1 week ago</td>
                                                    <td class="js-lists-values-earnings small">$1,943</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">John Connor</strong></p>
                                                            <small class="js-lists-values-employee-email text-50">vida_glover@gmail.com</small>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Manager</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">2 weeks ago</td>
                                                    <td class="js-lists-values-earnings small">$1,401</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>

                                                        <div class="d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-employee-name">Laza Bogdan</strong></p>
                                                            <small class="js-lists-values-employee-email text-50">annabell.kris@yahoo.com</small>
                                                        </div>

                                                    </td>

                                                    <td>

                                                        <a href=""
                                                           class="chip chip-outline-secondary">Admin</a>

                                                    </td>

                                                    <td class="text-50 js-lists-values-activity small">3 weeks ago</td>
                                                    <td class="js-lists-values-earnings small">$22,402</td>
                                                    <td class="text-right pl-0">
                                                        <a href=""
                                                           class="text-50"><i class="material-icons">more_vert</i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-32pt">
                        <div class="col-lg-4">
                            <div class="page-separator">
                                <div class="page-separator__text">Sort Columns</div>
                            </div>
                            <p class="card-subtitle text-70 mb-16pt mb-lg-0">Add sorting functionality to your tables with by List.js. Please read the <a href="http://listjs.com/"
                                   target="_blank">official plugin documentation</a> for a full list of options.</p>
                        </div>
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="flex"
                                 style="max-width: 100%">

                                <div class="card m-0">

                                    <div data-toggle="lists"
                                         data-lists-values='["js-lists-values-employee-name", "js-lists-values-employee-title"]'
                                         class="table-responsive">
                                        <table class="table table-flush">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-employee-name">Employee name</a>
                                                        <a href="javascript:void(0)"
                                                           class="sort"
                                                           data-sort="js-lists-values-employee-title">Employee title</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">

                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="avatar avatar-sm mr-3">
                                                                <img src="public/images/people/256/256_rsz_nicolas-horn-689011-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                            <div class="media-body">
                                                                <strong class="js-lists-values-employee-name">Jenell D. Matney</strong><br>
                                                                <span class="text-muted js-lists-values-employee-title">Founder and CEO</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right"><a href=""
                                                           class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="avatar avatar-sm mr-3">
                                                                <img src="public/images/people/256/256_rsz_sharina-mae-agellon-377466-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                            <div class="media-body">
                                                                <strong class="js-lists-values-employee-name">Sherri J. Cardenas</strong><br>
                                                                <span class="text-muted js-lists-values-employee-title">Software Engineer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right"><a href=""
                                                           class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="avatar avatar-sm mr-3">
                                                                <img src="public/images/people/256/256_rsz_90-jiang-640827-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                            <div class="media-body">
                                                                <strong class="js-lists-values-employee-name">Joseph S. Ferland</strong><br>
                                                                <span class="text-muted js-lists-values-employee-title">Web Designer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right"><a href=""
                                                           class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="avatar avatar-sm mr-3">
                                                                <img src="public/images/people/256/256_rsz_karl-s-973833-unsplash.jpg"
                                                                     alt="Avatar"
                                                                     class="avatar-img rounded-circle">
                                                            </div>
                                                            <div class="media-body">
                                                                <strong class="js-lists-values-employee-name">Bryan K. Davis</strong><br>
                                                                <span class="text-muted js-lists-values-employee-title">Web Developer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right"><a href=""
                                                           class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- // END Page Content -->

<?php 
  footeradmin($data);
?>
   