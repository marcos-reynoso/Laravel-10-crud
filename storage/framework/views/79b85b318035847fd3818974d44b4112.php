

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">Students List</div>
            <div class="card-body">
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Student</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Group</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($student->id); ?></th>
                            <td><?php echo e($student->dni); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><?php echo e($student->last_name); ?></td>
                            <td><?php echo e($student->birthday); ?></td>
                            <td><?php echo e($student->group); ?></td>
                            <td>
                                <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this student?');"><i class="bi bi-trash"></i> Delete</button>

                                    
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Student Found!</strong>
                                </span>
                            </td>
                        <?php endif; ?>
                    </tbody>
                  </table>

                  <?php echo e($students->links()); ?>


            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-10-crud\resources\views/students/index.blade.php ENDPATH**/ ?>