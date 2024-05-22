

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                   students Information
                </div>
                <div class="float-end">
                    <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="dni" class="col-md-4 col-form-label text-md-end text-start"><strong>DNI:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($student->dni); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($student->name); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end text-start"><strong>Last Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($student->last_name); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-end text-start"><strong>Birthday:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($student->birthday); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="group" class="col-md-4 col-form-label text-md-end text-start"><strong>group</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($student->group); ?>

                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-10-crud\resources\views/students/show.blade.php ENDPATH**/ ?>