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
                    <br>
                    <button class="btn btn-primary btn-sm" type="button" onclick="openmodal()"  >Nuevo</button>
                </div>

                <div class="col-lg-8 d-flex align-items-center">
                            <div class="flex" style="max-width: 100%">

                                <div class="form-group">
                                    <label class="form-label" for="select01">Basic</label>
                                    <select id="select01" data-toggle="select" class="form-control select2-hidden-accessible" data-select2-id="select01" tabindex="-1" aria-hidden="true">
                                        <option selected="" data-select2-id="2">My first option</option>
                                        <option data-select2-id="16">Another option</option>
                                        <option data-select2-id="17">Third option is here</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="1" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select01-container"><span class="select2-selection__rendered" id="select2-select01-container" role="textbox" aria-readonly="true" title="Third option is here">Third option is here</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="select02">Avatars</label>
                                    <select id="select02" data-toggle="select" data-minimum-results-for-search="-1" class="form-control select2-hidden-accessible" data-select2-id="select02" tabindex="-1" aria-hidden="true">
                                        <option data-avatar-src="images/256_rsz_1andy-lee-642320-unsplash.jpg" data-select2-id="4">
                                            Adelle Sherley
                                        </option>
                                        <option data-avatar-src="images/256_rsz_nicolas-horn-689011-unsplash.jpg">
                                            Adrian Demian
                                        </option>
                                        <option data-avatar-src="images/256_rsz_clem-onojeghuo-150467-unsplash.jpg">
                                            Green Doe
                                        </option>
                                    </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="3" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select02-container"><span class="select2-selection__rendered" id="select2-select02-container" role="textbox" aria-readonly="true" title="
                                            Adelle Sherley
                                        ">
                                            Adelle Sherley
                                        </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="select03">Multiple</label>
                                    <select id="select03" data-toggle="select" multiple="" class="form-control select2-hidden-accessible" data-select2-id="select03" tabindex="-1" aria-hidden="true">
                                        <option selected="" data-select2-id="6">CSS</option>
                                        <option selected="" data-select2-id="7">HTML</option>
                                        <option>JavaScript</option>
                                        <option>Bootstrap</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="5" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="CSS" data-select2-id="8"><span class="select2-selection__choice__remove" role="presentation">×</span>CSS</li><li class="select2-selection__choice" title="HTML" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>HTML</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="select04">Large</label>
                                    <select id="select04" data-toggle="select" multiple="" class="form-control form-control-lg select2-hidden-accessible" data-select2-id="select04" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="22">CSS</option>
                                        <option data-select2-id="23">HTML</option>
                                        <option selected="" data-select2-id="11">JavaScript</option>
                                        <option data-select2-id="24">Bootstrap</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below" dir="ltr" data-select2-id="10" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="JavaScript" data-select2-id="12"><span class="select2-selection__choice__remove" role="presentation">×</span>JavaScript</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <label class="form-label" for="select05">Small</label>
                                <select id="select05" data-toggle="select" class="form-control form-control-sm select2-hidden-accessible" data-select2-id="select05" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="14">My first option</option>
                                    <option>Another option</option>
                                    <option>Third option is here</option>
                                </select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="13" style="width: 589.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-select05-container"><span class="select2-selection__rendered" id="select2-select05-container" role="textbox" aria-readonly="true" title="My first option">My first option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                            </div>
                        </div>

                <div class="container page__container page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Employees</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="tablecursos">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Autor</th>
                                    <th>Titulo</th>
                                    <th>Disponible</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
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
  getmodal('modalcursos',$data);
?>

</body>
</html>