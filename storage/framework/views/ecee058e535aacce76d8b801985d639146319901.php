<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/plugins/datatables/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo e(asset('admin/assets/js/modernizr.min.js')); ?>"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />
        <?php echo $__env->yieldPushContent('css'); ?>
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<span class="logo-small"><i class="mdi mdi-radar"></i></span>-->
                            <!--<span class="logo-large"><i class="mdi mdi-radar"></i> Abstack</span>-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="/" class="logo">
                            <h4 style="padding-top: 20px;">Sistem Rekomendasi Laptop</h4>
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                 <span class="ml-1 pro-user-name"><?php echo e(Auth::user()->name); ?>  <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Settings</span>
                                    </a>


                                    <!-- item-->
                                    <a class="dropdown-item notify-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i class="fi-power"></i> <span>Logout</span>
                                        
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <?php echo $__env->make('layouts.admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <?php echo $__env->yieldContent('content'); ?>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        21090069_IvanderJoshSantoso_4A
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo e(asset('admin/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/waves.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/jquery.slimscroll.js')); ?>"></script>

        <!-- Counter number -->
        <script src="<?php echo e(asset('admin/plugins/waypoints/lib/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/counterup/jquery.counterup.min.js')); ?>"></script>

        <!-- Chart JS -->
        <script src="<?php echo e(asset('admin/plugins/chart.js/chart.bundle.js')); ?>"></script>

        <!-- init dashboard -->
        <script src="<?php echo e(asset('admin/assets/pages/jquery.dashboard.init.js')); ?>"></script>


        <!-- App js -->
        <script src="<?php echo e(asset('admin/assets/js/jquery.core.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/assets/js/jquery.app.js')); ?>"></script>

        <script src="<?php echo e(asset('admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <!-- Buttons examples -->
        <script src="<?php echo e(asset('admin/plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/pdfmake.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/vfs_fonts.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/buttons.print.min.js')); ?>"></script>
        <!-- Responsive examples -->
        <script src="<?php echo e(asset('admin/plugins/datatables/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/plugins/datatables/responsive.bootstrap4.min.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/layouts/admin.blade.php ENDPATH**/ ?>