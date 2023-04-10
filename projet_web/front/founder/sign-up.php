<!DOCTYPE html>
<html lang="en" dir="ltr">
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

					<form class="login-form" method="POST" action="../../controllers/admin/addUser.php">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="global/assets/images/logo_icon.svg" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Enter your credentials below</span>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<div class="form-control-feedback form-control-feedback-start">
												<input type="text" name="name" class="form-control" placeholder="Please enter your First name">
												<div class="form-control-feedback-icon">
													<i class="ph-user-circle text-muted"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<div class="form-control-feedback form-control-feedback-start">
												<input type="text" class="form-control" name="last_name" placeholder="Please enter your last name">
												<div class="form-control-feedback-icon">
													<i class="ph-user-circle text-muted"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="col-12">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<div class="form-control-feedback form-control-feedback-start">
												<input type="email" class="form-control" name="email" placeholder="Please enter your email">
												<div class="form-control-feedback-icon">
													<i class="ph ph-at text-muted"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Password</label>
											<div class="form-control-feedback form-control-feedback-start">
												<input type="password" name="password" class="form-control" placeholder="•••••••••••">
												<div class="form-control-feedback-icon">
													<i class="ph-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Confirme Password</label>
											<div class="form-control-feedback form-control-feedback-start">
												<input type="password" name="c_password" class="form-control" placeholder="•••••••••••">
												<div class="form-control-feedback-icon">
													<i class="ph-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label class="form-label">Role</label>
											<div class="form-control-feedback form-control-feedback-start">
												<select name="role" class="form-select" aria-label="Default select example">
													<option selected>Select Role</option>
													<option value="1">Founder</option>
													<option value="2">Investor</option>
												</select>
											</div>
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
									<button type="submit" name="btn" class="btn btn-primary w-100">Sign Up</button>
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Already have an account?</span>
								</div>

								<div class="mb-3">
									<a href="./login.php" class="btn btn-light w-100">Sign in</a>
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



</body>

</html>