

<?php $__env->startSection('content'); ?>
  <h2><?php echo e($title); ?></h2>

  <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card">
      <h3>
        <a href="<?php echo e(route('articles.show', $a['slug'])); ?>"><?php echo e($a['title']); ?></a>
      </h3>
      <p>Auteur : <?php echo e($a['author']); ?> • Vues : <?php echo e($a['views']); ?></p>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>Aucun article disponible.</p>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/articles/index.blade.php ENDPATH**/ ?>