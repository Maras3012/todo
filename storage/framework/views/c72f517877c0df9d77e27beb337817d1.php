<?php

use App\Models\Todo;

?>


    <div>
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Todo</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php /**PATH C:\wamp64\www\todo-app\storage\framework\views/cf895f4e042030f283e08ba26fcfa9ea.blade.php ENDPATH**/ ?>