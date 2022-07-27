
<?php $__env->startSection('title','BSCS-6'); ?>
<?php $__env->startSection('mainContent'); ?>
<?php if (isset($component)) { $__componentOriginal2769c57f71fbddebe407cac600e855f3ef8e3842 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AlertDialogue::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Alert-Dialogue'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AlertDialogue::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2769c57f71fbddebe407cac600e855f3ef8e3842)): ?>
<?php $component = $__componentOriginal2769c57f71fbddebe407cac600e855f3ef8e3842; ?>
<?php unset($__componentOriginal2769c57f71fbddebe407cac600e855f3ef8e3842); ?>
<?php endif; ?>

<h1>h1 Bootstrap heading (36px)</h1>
  <h2>h2 Bootstrap heading (30px)</h2>
  <h3>h3 Bootstrap heading (24px)</h3>
  <h4>h4 Bootstrap heading (18px)</h4>
  <h5>h5 Bootstrap heading (14px)</h5>

  <h6>h6 Bootstrap heading (12px)</h6>
  <img src="<?php echo e(asset('images/paris (1).jpg')); ?>"
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelProjects\bscs\resources\views/BSCS.blade.php ENDPATH**/ ?>