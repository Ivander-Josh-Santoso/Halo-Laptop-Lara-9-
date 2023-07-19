<?php $__env->startSection('title'); ?>
    Matrix Normalisasi | Sitem Rekomendasi Laptop
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Matrix Normalisasi</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-mahasiswa" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Inches (C1)</th>
                    <th>Weight (C2)</th>
                    <th>RAM (C3)</th>
                    <th>Screen Resolution (C4)</th>
                    <th>Price (C5)</th>                                          
                </tr>
                </thead>


                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
        <script type="text/javascript">
            
            // function editDataUser(trigerer){
            //         var tabel = $(trigerer).parent().data('table-target');
            //         var modal = $(trigerer).data('target');
            //         var tr =$(trigerer).parent().parent().parent();
            //         data = $("table#"+tabel).DataTable().row(tr).data();
            //         var form = modal+" form ";
            //         var role = JSON.parse(data.role_id);
            //         $(form+"input#name").val(data.name);
            //         $(form+"input#email").val(data.email);
            //         $(form+" input[type=checkbox]").prop("checked",false);
            //         role.forEach(role_id => {
            //             $(form+" input#role_"+role_id).prop("checked",true);
            //         });
            //         $(form+"input#id").val(data.id);
            //     }
            $(document).ready(function() {
                $("#laptop").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '<?php echo route('admin.saw.matrix_normalisasi'); ?>',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'Product', name: 'Product'},
                        {data:'n_inches',name:'n_inches'},
                        {data:'n_weight',name:'n_weight'},
                        {data:'n_ram',name:'n_ram'},
                        {data:'n_screenresolution',name:'n_screenresolution'},
                        {data:'n_price',name:'n_price'}                        
                    ]
                });
            } );

        </script>
        <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/admin/saw/matrix_normalisasi.blade.php ENDPATH**/ ?>