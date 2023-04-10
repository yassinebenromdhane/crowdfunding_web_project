<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

<!-- Sidebar content -->
<div class="sidebar-content">

	<!-- Sidebar header -->
	<div class="sidebar-section">
		<div class="sidebar-section-body d-flex justify-content-center">
			<h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

			<div>
				<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
					<i class="ph-arrows-left-right"></i>
				</button>

				<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
					<i class="ph-x"></i>
				</button>
			</div>
		</div>
	</div>
	<!-- /sidebar header -->


	<!-- Main navigation -->
	<div class="sidebar-section">
		<ul class="nav nav-sidebar" data-nav-type="accordion">
			<!-- Main -->
			<li class="nav-item">
				<a href="index.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'index.php')?"active":""; ?>">
					<i class="ph-house"></i>
					<span>
						Dashboard
					</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="Addproject.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'Addproject.php')?"active":""; ?>">
					<i class="ph-house"></i>
					<span>
						Add a project
					</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- /main navigation -->

</div>
<!-- /sidebar content -->

</div>