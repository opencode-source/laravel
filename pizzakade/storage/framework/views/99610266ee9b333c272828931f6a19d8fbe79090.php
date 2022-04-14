<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">

    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <img src="img/pizza-kade.png" alt="">
        <div class="title m-b-md">
            The Tehran's Best Pizzas
        </div>
        <p class="mssg"><?php echo e(session('mssg')); ?></p>
        <a href="<?php echo e(route('pizzas.create')); ?>">Order a Pizza</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OpenCode\Desktop\Laravel 6 Course\pizzakade\resources\views/welcome.blade.php ENDPATH**/ ?>