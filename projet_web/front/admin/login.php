﻿<!DOCTYPE html>
<html lang="en">
<?php include('../../includes/admin/head-login.php') ?>
<body>
	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Inner content -->
			<div class="content-inner">
				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login card -->
					<form class="login-form">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="global/assets/images/logo_icon.svg" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>
								<div class="alert alert-success alert-dismissible text-truncate rounded-pill fade show text-center">
										<i class="ph-check me-2"></i>
										<span class="fw-semibold">You  are succefully registered !</span> <br/><strong>Please Login to your account</strong>
										<button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
								    </div>
								<div class="mb-3">
									<label class="form-label">Username</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" name="email" class="form-control" required="" placeholder="john@doe.com">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3">
									<label class="form-check">
										<input type="checkbox" name="remember" class="form-check-input" checked="">
										<span class="form-check-label">Remember</span>
									</label>

									<a href="login_password_recover.html" class="ms-auto">Forgot password?</a>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Sign in</button>
								</div>
								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Don't have an account?</span>
								</div>

								<div class="mb-3">
									<a href="./sign-up.php" class="btn btn-light w-100">Sign up</a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</div>
						</div>
					</form>
					<!-- /login card -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Demo config -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">
			<button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
				<i class="ph-gear"></i>
			</button>
		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Demo configuration</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Color mode</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Light theme</span>
								<div class="fs-sm text-muted">Set light theme or reset to default</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked="">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Dark theme</span>
								<div class="fs-sm text-muted">Switch to dark theme</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Auto theme</span>
								<div class="fs-sm text-muted">Set theme based on system mode</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Direction</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">RTL direction</span>
								<div class="text-muted">Toggle between LTR and RTL</div>
							</div>
						</div>
						<input type="checkbox" name="layout-direction" value="rtl" class="form-check-input cursor-pointer m-0 ms-auto">
					</div>
				</label>
			</div>

			<div class="fw-semibold mb-2">Layouts</div>
			<div class="row">
				<div class="col-12">
					<a href="index.html" class="d-block mb-3">
						<img src="global/../../assets/images/layouts/layout_1.png" class="img-fluid img-thumbnail bg-primary bg-opacity-20 border-primary" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="../../layout_2/full/index.html" class="d-block mb-3">
						<img src="global/../../assets/images/layouts/layout_2.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="../../layout_3/full/index.html" class="d-block mb-3">
						<img src="global/../../assets/images/layouts/layout_3.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="../../layout_4/full/index.html" class="d-block mb-3">
						<img src="global/../../assets/images/layouts/layout_4.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="../../layout_5/full/index.html" class="d-block mb-3">
						<img src="global/../../assets/images/layouts/layout_5.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
				<div class="col-12">
					<a href="../../layout_6/full/index.html" class="d-block">
						<img src="global/../../assets/images/layouts/layout_6.png" class="img-fluid img-thumbnail" alt="">
					</a>
				</div>
			</div>
		</div>

		<div class="border-top text-center py-2 px-3">
			<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="btn btn-yellow fw-semibold w-100 my-1" target="_blank">
				<i class="ph-shopping-cart me-2"></i>
				Purchase Limitless
			</a>
		</div>
	</div>
	<!-- /demo config -->

</body>
</html>
