<nav>
  <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Accueil</a>
  <a href="<?php echo e(route('articles.index')); ?>" class="<?php echo e(request()->routeIs('articles.*') ? 'active' : ''); ?>">Articles</a>
  <a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">À propos</a>
  <a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a>
</nav>
<?php /**PATH C:\Users\Solicode\AndroidStudioProjects\prototype\crudLaravel\resources\views/partials/nav.blade.php ENDPATH**/ ?>