<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include('../../includes/founder/head-dashboard.php')
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
                                <h6 class="fw-semibold">Left alignment</h6>
                                <div>Tabs support vertical layout. If you need to display a list of tabs on the left, add <code>.nav-tabs-vertical</code> and <code>.nav-tabs-vertical-start</code> classes to the base tabs container</div>

                                <hr>

                                <div class="d-lg-flex">
                                    <ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-start wmin-lg-200 me-lg-3 mb-3 mb-lg-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#vertical-left-tab1" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                                <i class="ph-user-circle me-2"></i>
                                                Active
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#vertical-left-tab2" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="ph-currency-circle-dollar me-2"></i>
                                                Inactive
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown" role="presentation">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="ph-shopping-cart me-2"></i>
                                                Dropdown
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#vertical-left-tab3" class="dropdown-item" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Dropdown tab</a>
                                                <a href="#vertical-left-tab4" class="dropdown-item" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Another tab</a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="tab-content flex-lg-fill">
                                        <div class="tab-pane fade active show" id="vertical-left-tab1" role="tabpanel">
                                            <form action="#" data-select2-id="45">
                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Name:</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Password:</label>
                                                    <div class="col-lg-9">
                                                        <input type="password" class="form-control" placeholder="Your strong password">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Your state:</label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control form-control-select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK" data-select2-id="3">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="KY">Kentucky</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                            </optgroup>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bitn-container"><span class="select2-selection__rendered" id="select2-bitn-container" role="textbox" aria-readonly="true" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Gender:</label>
                                                    <div class="col-lg-9">
                                                        <div class="form-check-horizontal">
                                                            <label class="form-check form-check-inline">
                                                                <input type="radio" class="form-check-input" name="gender" checked="">
                                                                <span class="form-check-label">Male</span>
                                                            </label>

                                                            <label class="form-check form-check-inline">
                                                                <input type="radio" class="form-check-input" name="gender">
                                                                <span class="form-check-label">Female</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Your avatar:</label>
                                                    <div class="col-lg-9">
                                                        <input type="file" class="form-control">
                                                        <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Tags:</label>
                                                    <div class="col-lg-9">
                                                        <select multiple="" data-placeholder="Enter tags" class="form-control form-control-select2-icons select2-hidden-accessible" data-select2-id="19" tabindex="-1" aria-hidden="true">
                                                            <option value="slack" data-icon="slack-logo" selected="" data-select2-id="21">Slack</option>
                                                            <option value="instagram" data-icon="instagram-logo" selected="" data-select2-id="22">Instagram</option>
                                                            <option value="telegram" data-icon="telegram-logo" data-select2-id="49">Telegram</option>
                                                            <option value="whatsapp" data-icon="whatsapp-logo" data-select2-id="50">Whatsapp</option>
                                                            <option value="twitter" data-icon="twitter-logo" data-select2-id="51">Twitter</option>
                                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="20" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                    <ul class="select2-selection__rendered">
                                                                        <li class="select2-selection__choice" title="Instagram" data-select2-id="52"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="ph-instagram-logo"></i>Instagram</li>
                                                                        <li class="select2-selection__choice" title="Telegram" data-select2-id="53"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="ph-telegram-logo"></i>Telegram</li>
                                                                        <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                                                    </ul>
                                                                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-lg-3 col-form-label">Your message:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="vertical-left-tab2" role="tabpanel">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                                        </div>

                                        <div class="tab-pane fade" id="vertical-left-tab3" role="tabpanel">
                                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                                        </div>

                                        <div class="tab-pane fade" id="vertical-left-tab4" role="tabpanel">
                                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                                        </div>
                                    </div>
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