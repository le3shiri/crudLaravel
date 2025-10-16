<?php if(session('success')): ?>
  <p class="card" role="status"><?php echo e(session('success')); ?></p>
<?php endif; ?>
<?php if($errors->any()): ?>
  <div class="card" role="alert">
    <strong>Erreurs :</strong>
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($msg); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?>
<?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/partials/flash.blade.php ENDPATH**/ ?>