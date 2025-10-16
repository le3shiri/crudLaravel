<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo e($title ?? config('app.name')); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu;max-width:760px;margin:32px auto;padding:0 16px}
    nav a{margin-right:12px;text-decoration:none}
    .active{font-weight:700;text-decoration:underline}
    .card{padding:16px;border:1px solid #eee;border-radius:12px;margin-bottom:16px}
  </style>
</head>
<body>
  <header>
    <h1><?php echo e(config('app.name', 'Blog Solicode')); ?></h1>
    <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <hr>
  </header>

  <main>
    <?php echo $__env->make('partials.flash', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <hr>
  <footer>
    Laravel • <?php echo e(now()->format('d/m/Y H:i')); ?> • <?php echo e(config('app.timezone')); ?>

  </footer>
</body>
</html>
<?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>