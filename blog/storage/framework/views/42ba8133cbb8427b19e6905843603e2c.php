

<?php $__env->startSection('content'); ?>
  <div class="card">
    <h2><?php echo e($article['title']); ?></h2>
    <p><a href="<?php echo e(route('articles.index')); ?>">← Retour à la liste</a></p>
    <ul>
      <li>Auteur : <?php echo e($article['author']); ?></li>
      <li>Slug : <code><?php echo e($article['slug']); ?></code></li>
      <li>Vues : <?php echo e($article['views']); ?></li>
    </ul>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/articles/show.blade.php ENDPATH**/ ?>