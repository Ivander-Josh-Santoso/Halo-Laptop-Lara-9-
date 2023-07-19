<?php $__env->startSection('title'); ?>
    Setting Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setting</h4>
                <form action="<?php echo e(route('admin.setting.bobot')); ?> " method="POST" data-no-reset="true">
                <?php if(isset($c1)): ?>
                <?php
                    $c11 = json_decode($c1);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Inches (C1)  </label>
                              <select name="w_c1" id="" class="form-control">
                                  <option value="0.2" <?php if($c11->weight == 0.2): ?>
                                      <?php echo e("selected"); ?> <?php endif; ?> >Sangat Rendah </option>
                                  <option value="0.4" <?php if($c11->weight == 0.4): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?>>Rendah </option>
                                  <option value="0.6" <?php if($c11->weight == 0.6): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?>>Sedang </option>
                                  <option value="0.8" <?php if($c11->weight == 0.8): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?>>Tinggi </option>
                                  <option value="1" <?php if($c11->weight == 1): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?>>Sangat Tinggi </option>
                              </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c1" id="" class="form-control">
                              <option value="0" <?php if(!$c11->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c11->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c2)): ?>
                <?php
                    $c22 = json_decode($c2);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Weight (C2)  </label>
                              <select name="w_c2" id="" class="form-control">
                                <option value="0.2" <?php if($c22->weight == 0.2): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?> >Sangat Rendah </option>
                                <option value="0.4" <?php if($c22->weight == 0.4): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Rendah </option>
                                <option value="0.6" <?php if($c22->weight == 0.6): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sedang </option>
                                <option value="0.8" <?php if($c22->weight == 0.8): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Tinggi </option>
                                <option value="1" <?php if($c22->weight == 1): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c2" id="" class="form-control">
                              <option value="0" <?php if(!$c22->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c22->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c3)): ?>
                <?php
                    $c33 = json_decode($c3);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">RAM (C3)  </label>
                              <select name="w_c3" id="" class="form-control">
                                <option value="0.2" <?php if($c33->weight == 0.2): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?> >Sangat Rendah </option>
                                <option value="0.4" <?php if($c33->weight == 0.4): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Rendah </option>
                                <option value="0.6" <?php if($c33->weight == 0.6): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sedang </option>
                                <option value="0.8" <?php if($c33->weight == 0.8): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Tinggi </option>
                                <option value="1" <?php if($c33->weight == 1): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c3" id="" class="form-control">
                              <option value="0" <?php if(!$c33->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c33->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c4)): ?>
                <?php
                    $c44 = json_decode($c4);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Screen Resolution (C4)  </label>
                              <select name="w_c4" id="" class="form-control">
                                <option value="0.2" <?php if($c44->weight == 0.2): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?> >Sangat Rendah </option>
                                <option value="0.4" <?php if($c44->weight == 0.4): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Rendah </option>
                                <option value="0.6" <?php if($c44->weight == 0.6): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sedang </option>
                                <option value="0.8" <?php if($c44->weight == 0.8): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Tinggi </option>
                                <option value="1" <?php if($c44->weight == 1): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c4" id="" class="form-control">
                              <option value="0" <?php if(!$c44->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c44->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(isset($c5)): ?>
                <?php
                    $c55 = json_decode($c5);
                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Price (C5)  </label>
                              <select name="w_c5" id="" class="form-control">
                                <option value="0.2" <?php if($c55->weight == 0.2): ?>
                                    <?php echo e("selected"); ?> <?php endif; ?> >Sangat Rendah </option>
                                <option value="0.4" <?php if($c55->weight == 0.4): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Rendah </option>
                                <option value="0.6" <?php if($c55->weight == 0.6): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sedang </option>
                                <option value="0.8" <?php if($c55->weight == 0.8): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Tinggi </option>
                                <option value="1" <?php if($c55->weight == 1): ?>
                                  <?php echo e("selected"); ?> <?php endif; ?>>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c5" id="" class="form-control">
                              <option value="0" <?php if(!$c55->is_cost): ?>
                                  selected
                              <?php endif; ?>>Benefit</option>
                              <option value="1" <?php if($c55->is_cost): ?>
                                    selected
                                <?php endif; ?>>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Simpan</button>
                 </form>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make("admin.script.form-modal-ajax", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 8.0.2\htdocs\laptopivan\resources\views/admin/setting.blade.php ENDPATH**/ ?>