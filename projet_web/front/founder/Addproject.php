<!DOCTYPE html>
<?php
include('../../config/connect_db.php');
$req = $bdd->query("SELECT * FROM categories");
?>
<html lang="en" dir="ltr">
<?php
include('../../includes/founder/head-dashboard.php');
?>

<body>

    <!-- Main navbar -->
    <?php include('../../includes/founder/main-navbar.php') ?>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <?php include('../../includes/founder/main-sidebar.php') ?>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">
                                Home - <span class="fw-normal">Request a Project</span>
                            </h4>

                            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>


                    </div>
                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="#" class="breadcrumb-item">Home</a>
                                <span class="breadcrumb-item active">Request a project</span>
                            </div>

                            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-body">
                                <h6 class="fw-semibold">Add your project</h6>

                                <hr>

                                <div class="d-lg-flex">
                                    <ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-start wmin-lg-200 me-lg-3 mb-3 mb-lg-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#vertical-left-tab1" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                                <i class="ph-user-circle me-2"></i>
                                                Add Project
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#vertical-left-tab2" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="ph-currency-circle-dollar me-2"></i>
                                                Add images
                                            </a>
                                        </li>

                                    </ul>



                                    <form action="../../controllers/client/addproject.php" method="POST" class="flex-lg-fill" data-select2-id="45" enctype="multipart/form-data">

                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="vertical-left-tab2" role="tabpanel">
                                                <p class="fw-semibold">upload images</p>
                                                <input type="file" name="upload[]" class="form-control" multiple="multiple" >
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="vertical-left-tab1" role="tabpanel">
                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">title:</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" name="title" class="form-control" placeholder="Enter project Name">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Objectif plafon:</label>
                                                    <div class="col-lg-9">
                                                        <input type="number" name="plafon" class="form-control" placeholder="Max price">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Begin date:</label>
                                                    <div class="col-lg-9">
                                                        <input type="date" name="begin" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">End date:</label>
                                                    <div class="col-lg-9">
                                                        <input type="date" name="end" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Categorie:</label>
                                                    <div class="col-lg-9">
                                                        <select name="categ" id="select_categ" class="form-control">
                                                            <option value="0">choisir une categorie</option>
                                                            <?php while ($data = $req->fetch()) { ?>
                                                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>






                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Description:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="3" cols="3" name="desc" class="form-control" placeholder="Enter your description"></textarea>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" name="btn_save" class="btn btn-success">Save <i class="ph-paper-plane-tilt ms-2"></i></button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; 2022 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web App Kit</a></span>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-lifebuoy"></i>
                                        <span class="d-none d-md-inline-block ms-2">Support</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://demo.interface.club/limitless/demo/Documentation/index.html" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-file-text"></i>
                                        <span class="d-none d-md-inline-block ms-2">Docs</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-shopping-cart"></i>
                                        <span class="d-none d-md-inline-block ms-2">Purchase</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->







</body>

</html>