<?php  
      
        include('../../config/connect_db.php');
        $req = $bdd->query("SELECT * FROM categories");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include('../../includes/admin/head-dashboard.php')
?>

<body>

    <!-- Main navbar -->
    <?php include('../../includes/admin/main-navbar.php') ?>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <?php include('../../includes/admin/main-sidebar.php') ?>
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
                                Home - <span class="fw-normal">Dashboard</span>
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
                                <span class="breadcrumb-item active">Dashboard</span>
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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Categories List</h5>
                            </div>

        
                            <div class="row">
                                <div class="col-12">
                                <a href="./addCateg.php" class="btn btn-flat-primary btn-icon mt-1 float-end">
                                    <i class="ph-plus"></i>
                                </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                    <?php while ($data = $req->fetch()) { ?>
                                        <tr>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['description']; ?></td>
                                            <td>
                                            <div class="d-inline-flex">
						                		<a href="#" class="text-primary " data-bs-popup="tooltip" aria-label="Edit" data-bs-original-title="Edit">
													<i class="ph-pen"></i>
					                			</a>
						                		<a href="#" class="text-danger mx-2" data-bs-popup="tooltip" aria-label="Remove" data-bs-original-title="Remove">
													<i class="ph-trash"></i>
					                			</a>
						                	</div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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