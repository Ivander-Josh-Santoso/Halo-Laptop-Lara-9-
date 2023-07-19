<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Admin - Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?> " rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/assets/css/style.css')); ?> " rel="stylesheet" type="text/css" />

    <script src="<?php echo e(asset('admin/assets/js/modernizr.min.js')); ?> "></script>

</head>


<body class="bg-accpunt-pages">

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <h1>Halo Laptop</h1>
                                        </a>
                                    </h2>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="<?php echo e(route('login')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address // admin@minhajul.com</label>
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
                                                                                                    $__bag = $errors->getBag($__errorArgs[1] ?? 'default');
                                                                                                    if ($__bag->has($__errorArgs[0])) :
                                                                                                        if (isset($message)) {
                                                                                                            $__messageOriginal = $message;
                                                                                                        }
                                                                                                        $message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
                                                                                                        if (isset($__messageOriginal)) {
                                                                                                            $message = $__messageOriginal;
                                                                                                        }
                                                                                                    endif;
                                                                                                    unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                                <?php $__errorArgs = ['email'];
                                                $__bag = $errors->getBag($__errorArgs[1] ?? 'default');
                                                if ($__bag->has($__errorArgs[0])) :
                                                    if (isset($message)) {
                                                        $__messageOriginal = $message;
                                                    }
                                                    $message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
                                                    if (isset($__messageOriginal)) {
                                                        $message = $__messageOriginal;
                                                    }
                                                endif;
                                                unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <?php if (Route::has('password.request')) : ?>
                                                    <a href="<?php echo e(route('password.request')); ?>" class="text-muted pull-right">
                                                        <small>Forgot your password?</small>
                                                    </a>
                                                <?php endif; ?>
                                                <label for="password">Password 12345678</label>
                                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
                                                                                                            $__bag = $errors->getBag($__errorArgs[1] ?? 'default');
                                                                                                            if ($__bag->has($__errorArgs[0])) :
                                                                                                                if (isset($message)) {
                                                                                                                    $__messageOriginal = $message;
                                                                                                                }
                                                                                                                $message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
                                                                                                                if (isset($__messageOriginal)) {
                                                                                                                    $message = $__messageOriginal;
                                                                                                                }
                                                                                                            endif;
                                                                                                            unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                                <?php $__errorArgs = ['password'];
                                                $__bag = $errors->getBag($__errorArgs[1] ?? 'default');
                                                if ($__bag->has($__errorArgs[0])) :
                                                    if (isset($message)) {
                                                        $__messageOriginal = $message;
                                                    }
                                                    $message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
                                                    if (isset($__messageOriginal)) {
                                                        $message = $__messageOriginal;
                                                    }
                                                endif;
                                                unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <label for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>



                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


    <!-- jQuery  -->
    <script src="<?php echo e(asset('admin/assets/js/jquery.min.js')); ?> "></script>
    <script src="<?php echo e(asset('admin/assets/js/popper.min.js')); ?> "></script>
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.min.js')); ?> "></script>
    <script src="<?php echo e(asset('admin/assets/js/waves.js')); ?> "></script>
    <script src="<?php echo e(asset('admin/assets/js/jquery.slimscroll.js')); ?> "></script>

    <!-- App js -->
    <script src="<?php echo e(asset('admin/assets/js/jquery.core.js')); ?> "></script>
    <script src="<?php echo e(asset('admin/assets/js/jquery.app.js')); ?> "></script>

</body>

</html><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/auth/login.blade.php ENDPATH**/ ?>