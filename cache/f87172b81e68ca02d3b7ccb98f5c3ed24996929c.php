<h1>Шаблон блейд блог</h1>

<?php $__currentLoopData = $Blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <b><?php echo e($post['ID']); ?></b><br>
        <?php echo e($post['NAME']); ?>

    </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\OSPanel\domains\saweb.loc\app\View/blog.blade.php ENDPATH**/ ?>