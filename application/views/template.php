<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/stisla-fill.svg">
    <title><?php echo $title; ?> &mdash; Book Services</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mystyle.css">



    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">

</head>

<body>
    <!-- Loadingpage -->
    <div id="load"></div>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?php echo base_url() ?>assets/img/avatar/avatar-6.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo ucfirst($this->fungsi->user_login()->name) ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?php echo base_url('profile') ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Are you sure want to logout ?</div>
                        <div class="modal-footer">
                            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo site_url('auth/logout') ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">

                    <div class="sidebar-brand">
                        <a href="<?php echo base_url('dashboard') ?>"><img src="<?php echo base_url() ?>/assets/img/stisla-fill.svg" alt="logo" style="width: 28px;"> &nbsp; Service Book</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?php echo base_url('dashboard') ?>"><img src="<?php echo base_url() ?>/assets/img/stisla-fill.svg" alt="logo" style="width: 28px;"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
                            <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
                                <i class="fas fa-fire"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Starter</li>
                        <li <?php echo $this->uri->segment(1) == 'note' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
                            <a class="nav-link" href="<?php echo site_url('note') ?>">
                                <i class="fas fa-book"></i>
                                <span>Note</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <?php echo $contents ?>
                    <div class="section-body">
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Develop By <a href="https://nauval.in/">Zainal Arifin</a>
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url() ?>assets/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>


    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>assets/js/page/forms-advanced-forms.js"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>/assets/js/page/modules-datatables.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

    <!-- Loading page -->
    <script>
        document.onreadystatechange = function() {
            var state = document.readyState
            if (state == 'complete') {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
            }
        }
    </script>

    <script>
        var timeout = '5000;' //
        $('.hide-it').delay(timeout).fadeOut(1000);
    </script>


</body>

</html>