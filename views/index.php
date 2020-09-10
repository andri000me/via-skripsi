<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 21:45:59 GMT -->

<head>
    <meta charset="utf-8" />
    <title>e-Monitoring | Halaman admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/pu.png">

    <!-- third party css -->
    <link href="<?=base_url();?>assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?=base_url();?>assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" /> -->
    <link href="<?=base_url();?>assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?=base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="enlarged" data-keep-enlarged="true">

    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- LOGO -->
                <a href="<?=base_url('admin');?>" class="logo text-center">
                    <span class="logo-lg">
                        <img src="<?=base_url();?>assets/images/pu.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="<?=base_url();?>assets/images/pu.png" alt="" height="16">
                    </span>
                </a>

                <!--- Sidemenu -->
                <ul class="metismenu side-nav">

                    <li class="side-nav-title side-nav-item">Daftar Menu</li>

                    <li class="side-nav-item">
                        <a href="<?=base_url('admin');?>" class="side-nav-link">
                            <i class="dripicons-meter"></i>
                            <span> Beranda </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?=base_url('admin/data_proyek');?>" class="side-nav-link">
                            <i class="dripicons-list"></i>
                            <!-- <span class="badge badge-success float-right">7</span> -->
                            <span> Data Proyek </span>
                        </a>
                    </li>
                    <?php if($this->session->tipe=='administrator'):?>
                    <li class="side-nav-item">
                        <a href="<?=base_url('admin/kontraktor');?>" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <!-- <span class="badge badge-success float-right">7</span> -->
                            <span> Kontraktor </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?=base_url('admin/pengguna');?>" class="side-nav-link">
                            <i class="dripicons-user"></i>
                            <!-- <span class="badge badge-success float-right">7</span> -->
                            <span> Pengguna </span>
                        </a>
                    </li>

                    <?php endif; ?>
                    <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="<?=base_url();?>assets/images/pu.png" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name"><?=$this->session->userdata('fullname');?></span>
                                    <span class="account-position"><?=$this->session->userdata('tipe');?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>



                                <!-- item-->
                                <a href="<?=base_url('admin/logout');?>" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <!-- <div class="app-search">
						<form>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="mdi mdi-magnify"></span>
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">Search</button>
								</div>
							</div>
						</form>
					</div> -->
                </div>
                <!-- end Topbar -->

                <?php $this->load->view($content);?>

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <?= date('Y'); ?> © e-Monitoring
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <!-- <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- bundle -->
    <script src="<?=base_url();?>assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="<?=base_url();?>assets/js/vendor/Chart.bundle.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery.dataTables.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/dataTables.bootstrap4.js"></script>
    <!-- <script src="<?=base_url();?>assets/js/vendor/dataTables.responsive.min.js"></script> -->
    <script src="<?=base_url();?>assets/js/vendor/responsive.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/buttons.html5.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/buttons.flash.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/buttons.print.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="<?=base_url();?>assets/js/pages/demo.dashboard.js"></script>
    <script src="<?=base_url();?>assets/js/pages/demo.datatable-init.js"></script>
    <!-- end demo js-->
</body>


<!-- Mirrored from coderthemes.com/hyper/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 21:46:28 GMT -->

</html>
