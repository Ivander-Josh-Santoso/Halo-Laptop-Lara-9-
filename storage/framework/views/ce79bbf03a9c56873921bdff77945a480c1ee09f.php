<?php $__env->startSection('title'); ?>
    Data Laptop | Sitem Rekomendasi Laptop
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0">Tambah Laptop</h4>
            <?php echo $__env->make('admin.laptop.lihat-laptop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.laptop.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            


            <div class="button-list">
                <!-- Custom width modal -->
                <button type="button" class="btn btn-info waves-light waves-effect w-md" data-toggle="modal" data-target="#tambah-mahasiswa" data-table="#tabel-user"><i class="mdi mdi-library-plus"></i> Tambah Data</button>
            </div>
        </div>
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Daftar Laptop</b></h4>
            <p class="text-muted font-14 m-b-30">
            
            </p>

            <table id="table-laptop" class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>Product</th>
                    <th>CPU</th>
                    <th>Screen Resolution</th>
                    <th>Inches</th>
                    <th>Ram</th>
                    <th>Weight</th>
                    <th>Prices</th>
                    <th>Aksi</th>                                            
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
            function lihatLaptop(trigerer){
                    var tr = $(trigerer).parent().parent();
                    var modal = $(trigerer).data("target");
                    $(modal + " #company").html($("#table-laptop").DataTable().row(tr).data().Company);
                    $(modal + " #product").html($("#table-laptop").DataTable().row(tr).data().Product);
                    $(modal + " #typename").html("Type Name: " + $("#table-laptop").DataTable().row(tr).data().TypeName);
                    $(modal + " #Inches").html("Inches: "+$("#table-laptop").DataTable().row(tr).data().Inches);
                    $(modal + " #screenresolution").html("Screen Resolution: "+$("#table-laptop").DataTable().row(tr).data().ScreenResolution);
                    $(modal + " #cpu").html("Cpu"+$("#table-laptop").DataTable().row(tr).data().Cpu);
                    $(modal + " #ram").html("Ram"+$("#table-laptop").DataTable().row(tr).data().Ram);
                    $(modal + " #memory").html("Memory"+$("#table-laptop").DataTable().row(tr).data().Memory);
                    $(modal + " #gpu").html("GPU"+ $("#table-laptop").DataTable().row(tr).data().Gpu);
                    $(modal + " #opsys").html("Operating System"+$("#table-laptop").DataTable().row(tr).data().OpSys);
                    $(modal + " #weight").html("Weight"+$("#table-laptop").DataTable().row(tr).data().Weight);
                    $(modal + " #price").html("Prices"+$("#table-laptop").DataTable().row(tr).data().Price_euros);
                }
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
                $("#table-laptop").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '<?php echo route('admin.laptop.index'); ?>',
                    order:[0,'desc'],
                    columns:[
                        {data:'id', name: 'id'},
                        {data:'Company',name :'Company'},
                        {data:'Product', name: 'Product'},
                        {data:'Cpu',name:'Cpu'},
                        {data:'ScreenResolution',name:'ScreenResolution'},
                        {data:'Inches',name:'Inches'},
                        {data:'Ram',name:'Ram'},
                        {data:'Weight',name:'Weight'},
                        {data:'Price_euros',name:'Price_euros'},
                        {data:'aksi',name: 'aksi',searchable:false,orderable: false}                        
                    ]
                });
            } );

        </script>
        <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/admin/laptop/index.blade.php ENDPATH**/ ?>