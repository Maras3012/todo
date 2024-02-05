<?php

use App\Models\Todo;

?>


    <div>
        <div class="card">
            <div class="card-header">
                Todo App
            </div>
            <div class="card-body">
                <div>
                   <!--[if BLOCK]><![endif]--><?php if(session('status')): ?>
                       <div class="alert alert-success">
                           <?php echo e(session('status')); ?>

                       </div>
                   <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add new todo</label>
                        <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($loop->index+1); ?></th>
                <td><?php echo e($todo->name); ?></td>
                <td>
                    <button class="btn btn-danger btn-sm float-end">Delete</button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
    </div>
    <?php /**PATH C:\wamp64\www\todo-app\storage\framework\views/feafc5839715e311c546da728ec0c5bb.blade.php ENDPATH**/ ?>