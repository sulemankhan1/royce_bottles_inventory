<!-- sidebar start-->
<aside class="sidebar sidebar-default navs-rounded-all ">
		<div class="sidebar-header d-flex align-items-center justify-content-start">
			<a href="../dashboard/index.html" class="navbar-brand">
				<!--Logo start-->
				<i class="fa-solid fa-hashtag"></i>
				<!--logo End-->
				<h4 class="logo-title">Hope UI</h4>
			</a>
			<div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
				<i class="icon">
					<i class="fa-solid fa-arrow-left-long"></i>
				</i>
			</div>
		</div>
		<div class="sidebar-body pt-0 data-scrollbar">
			<div class="sidebar-list">
				<!-- Sidebar Menu Start -->
				<ul class="navbar-nav iq-main-menu" id="sidebar-menu">

					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'dashboard'?'active':'' ?>" aria-current="page" href="<?= site_url('dashboard') ?>">
							<i class="icon">
								<i class="fa fa-home"></i>
							</i>
							<span class="item-name">Dashboard</span>
						</a>
					</li>
					<li>
						<hr class="hr-horizontal">
					</li>
					<li class="nav-item static-item">
						<a class="nav-link static-item disabled" href="#" tabindex="-1">
							<span class="default-icon">Manage</span>
							<span class="mini-icon">-</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'users'?'active':'' ?>" data-bs-toggle="collapse" href="#users-auth" role="button"
							aria-expanded="false" aria-controls="users-user">
							<i class="icon">
								<i class="fa fa-users"></i>
							</i>
							<span class="item-name">Users</span>
							<i class="right-icon">
								<i class="fa-solid fa-angle-right"></i>
							</i>
						</a>
						<ul class="sub-nav collapse <?= $active_menu == 'users'?'show':'' ?>" id="users-auth" data-bs-parent="#users-menu">
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'admins'?'active':'' ?>" href="<?= site_url('admins') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> A </i>
									<span class="item-name">Admins</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'drivers'?'active':'' ?>" href="<?= site_url('drivers') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> D </i>
									<span class="item-name">Drivers</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'productions'?'active':'' ?>" href="<?= site_url('productions') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> P </i>
									<span class="item-name">Productions</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'others_users'?'active':'' ?>" href="<?= site_url('other_users') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> O </i>
									<span class="item-name">Other</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'rights'?'active':'' ?>" href="<?= site_url('rights') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> R </i>
									<span class="item-name">Rights</span>
								</a>
							</li>

						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'categories'?'active':'' ?>" aria-current="page" href="<?= site_url('categories') ?>">
							<i class="icon">
								<i class="fa-solid fa-soap"></i>
							</i>
							<span class="item-name">Categories</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'products'?'active':'' ?>" aria-current="page" href="<?= site_url('products') ?>">
							<i class="icon">
								<i class="fa-brands fa-product-hunt"></i>
							</i>
							<span class="item-name">Products</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'customers'?'active':'' ?>" aria-current="page" href="<?= site_url('customers') ?>">
							<i class="icon">
									<i class="fa fa-users"></i>
							</i>
							<span class="item-name">Customers</span>
						</a>
					</li>
					<li>
						<hr class="hr-horizontal">
					</li>
					<li class="nav-item static-item">
						<a class="nav-link static-item disabled" href="#" tabindex="-1">
							<span class="default-icon">Pages</span>
							<span class="mini-icon">-</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'inventory'?'active':'' ?>" data-bs-toggle="collapse" href="#inventory-auth" role="button"
							aria-expanded="false" aria-controls="inventory-user">
							<i class="icon">
								<i class="fa-solid fa-warehouse"></i>
							</i>
							<span class="item-name">Inventory</span>
							<i class="right-icon">
								<i class="fa-solid fa-angle-right"></i>
							</i>
						</a>
						<ul class="sub-nav collapse" id="inventory-auth" data-bs-parent="#inventory-menu">
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'view_inventory'?'active':'' ?>" href="<?= base_url('view_inventory') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> VI </i>
									<span class="item-name">View Inventory</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'add_stock'?'active':'' ?>" href="<?= base_url('add_stock') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> AS </i>
									<span class="item-name">Add Stock</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'view_stock'?'active':'' ?>" href="<?= base_url('view_stock') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> VS </i>
									<span class="item-name">View Stock</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'stock_history'?'active':'' ?>" href="<?= base_url('stock_history') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> SH </i>
									<span class="item-name">Stock History</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'assign_to_driver'?'active':'' ?>" href="<?= base_url('assign_to_driver') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> ATD </i>
									<span class="item-name">Assign To Driver</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'return_stock'?'active':'' ?>" href="<?= base_url('return_stock') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> RS </i>
									<span class="item-name">Return Stock</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'live_stock'?'active':'' ?>" href="<?= base_url('live_stock') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> LS </i>
									<span class="item-name">Live Stock</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link <?= $active_submenu == 'logs'?'active':'' ?>" href="<?= base_url('logs') ?>">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> L </i>
									<span class="item-name">Logs</span>
								</a>
							</li>

						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'sales'?'active':'' ?>" aria-current="page" href="<?= base_url('sales') ?>">					
							<i class="icon">
								<i class="fa-solid fa-circle-dollar-to-slot"></i>
							</i>
							<span class="item-name">Sales</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'evidence'?'active':'' ?>" aria-current="page" href="../dashboard/index.html">
							<i class="icon">
								<i class="fa-solid fa-file-shield"></i>
							</i>
							<span class="item-name">Evidence</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'invoices'?'active':'' ?>" aria-current="page" href="../dashboard/index.html">
							<i class="icon">
								<i class="fa-solid fa-file-invoice-dollar"></i>
							</i>
							<span class="item-name">Invoices</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $active_menu == 'salesperson'?'active':'' ?>" aria-current="page" href="../dashboard/index.html">
							<i class="icon">
								<i class="fa-solid fa-person-dots-from-line"></i>
							</i>
							<span class="item-name">Salesperson</span>
						</a>
					</li>

					<li class="nav-item mb-5">
						<a class="nav-link <?= $active_menu == 'setting'?'active':'' ?>" data-bs-toggle="collapse" href="#setting-auth" role="button"
							aria-expanded="false" aria-controls="setting-user">
							<i class="icon">
								<i class="fa-solid fa-gear"></i>
							</i>
							<span class="item-name">Setting</span>
							<i class="right-icon">
								<i class="fa-solid fa-angle-right"></i>
							</i>
						</a>
						<ul class="sub-nav collapse" id="setting-auth" data-bs-parent="#setting-menu">
							<li class="nav-item">
								<a class="nav-link" href="../dashboard/auth/sign-in.html">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> C </i>
									<span class="item-name">Company</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../dashboard/auth/sign-in.html">
									<i class="icon">
										<i class="fa-solid fa-caret-right"></i>
									</i>
									<i class="sidenav-mini-icon"> E </i>
									<span class="item-name">Email</span>
								</a>
							</li>

						</ul>
					</li>
				</ul>
				<!-- Sidebar Menu End -->
			</div>
		</div>
		<div class="sidebar-footer"></div>
	</aside>

  <!-- sidebar end-->


  <main class="main-content" style="background-color:#e9ecef!important; ">
		<div class="position-relative iq-banner">
			<!--Nav Start-->
			<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
				<div class="container-fluid navbar-inner">
					<a href="../dashboard/index.html" class="navbar-brand">
						<!--Logo start-->
						<i class="fa-solid fa-hashtag"></i>
						<!--logo End-->
						<h4 class="logo-title">Hope UI</h4>
					</a>
					<div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
						<i class="icon">
							<i class="fa-solid fa-arrow-right-long"></i>
						</i>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<span class="mt-2 navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
							<li class="nav-item dropdown">
								<a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= base_url('assets/images/avatars/01.png" alt') ?>" alt="User-Profile"
										class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
									<div class="caption ms-3 d-none d-md-block ">
										<h6 class="mb-0 caption-title">Austin Robertson</h6>
										<p class="mb-0 caption-sub-title">Admin</p>
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<li>
										<a class="dropdown-item" href="<?= site_url('edit_profile/1') ?>">
											<i class="fa-solid fa-user-pen"></i> Edit Profile
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="<?= site_url('view_profile/1') ?>">
												<i class="fa-solid fa-id-card-clip"></i> View Profile
										</a>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li>
										<a class="dropdown-item" href="<?= site_url('logout') ?>">
											<i class="fa-solid fa-right-from-bracket"></i> Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
