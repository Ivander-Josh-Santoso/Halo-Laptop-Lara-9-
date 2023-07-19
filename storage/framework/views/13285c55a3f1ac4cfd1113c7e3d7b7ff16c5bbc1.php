<?php $__env->startSection('title'); ?>
    Admin Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Welcome !</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Tipe Laptop</h6>
            <h4 class="mb-3"><span data-plugin="counterup"><?php echo e($count_laptop); ?> </span></h4>
            <span class="badge badge-primary"></span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Max Price</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($max_price); ?> </h4>
            <span class="badge badge-primary"> Euros</span> 
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Min Price</h6>
            <h4 class="mb-3"><span data-plugin="counterup"><?php echo e($min_price); ?></span></h4>
            <span class="badge badge-primary"> Euros </span> 
        </div>
    </div>



    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Average Price</h6>
            <h4 class="mb-3" data-plugin="counterup"><?php echo e($average_price); ?> </h4>
            <span class="badge badge-primary"> Euros </span> 
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>