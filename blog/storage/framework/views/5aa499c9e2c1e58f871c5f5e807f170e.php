

<?php $__env->startSection('content'); ?>
  <div class="card">
    <h2><?php echo e($title); ?></h2>
    <p>Bienvenue sur le blog ! Consultez la <a href="<?php echo e(route('articles.index')); ?>">liste des articles</a>.</p>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/home.blade.php ENDPATH**/ ?>