<?php if(session()->has('user')): ?>
    <?php echo e(View:: make('title')); ?>

    <?php echo e(View:: make('menu')); ?>

    <?php echo e(View:: make('footer')); ?>

<?php else: ?>
    <?php echo $__env->yieldContent('login'); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\miniproject\resources\views/header.blade.php ENDPATH**/ ?>