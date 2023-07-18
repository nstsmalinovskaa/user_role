<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="flex justify-center mt-6">
        <div class="w-96 bg-white rounded-lg shadow-md p-6">
            <img class="w-full h-32 object-cover object-center" src="<?php echo e($user->getFirstMediaUrl('public')); ?>" alt="avatar">
            <div class="px-6 py-6">
                <h2 class="text-xl font-bold mb-2"><?php echo e($user->name); ?></h2>
                <p class="text-gray-700 mb-4"><?php echo e($user->email); ?></p>

                <form action="<?php echo e(route('users.update', $user)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="mb-4">
                        <label for="roles" class="block text-sm font-medium text-gray-700">Role</label>
                        <div class="mt-1">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="role" value="<?php echo e($role->name); ?>" <?php echo e($user->hasRole($role->name) ? 'checked' : ''); ?> class="form-checkbox h-4 w-4 text-blue-500">
                                    <span class="ml-2 text-sm text-gray-700"><?php echo e($role->name); ?></span>
                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">Update role</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="mt-2 text-center">
        <a href="<?php echo e(url()->previous()); ?>" class="text-blue-500 hover:text-blue-600 underline">Back</a>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/admin/edit.blade.php ENDPATH**/ ?>