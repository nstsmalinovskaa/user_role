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

    <div class="px-4">
        <div class="py-12">
            <div class="grid grid-cols-4 gap-6">

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full">
                        <div class="bg-white rounded-lg shadow-md mb-4">
                            <img class="w-full h-32 object-cover object-center" src="<?php echo e($user->avatar()); ?>" alt="avatar">
                            <div class="px-6 py-6">
                                <h2 class="text-xl font-bold mb-2"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h2>
                                <p class="text-gray-700 mb-4"><?php echo e($user->email); ?></p>
                                <div class="flex justify-between">
                                    <a href="<?php echo e(route('users.edit', $user)); ?>" class="flex items-center justify-center px-2 py-1 text-xs text-white bg-blue-500 hover:bg-blue-600 rounded">Update role</a>

                                    <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="flex items-center justify-center px-2 py-1 text-xs text-white bg-blue-500 hover:bg-blue-600 rounded">Delete user</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/admin/user.blade.php ENDPATH**/ ?>