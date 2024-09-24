<?php if($faqs->isNotEmpty()): ?>
    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($faq->display_name); ?></h5>
                <p class="card-text"><?php echo e($faq->description); ?></p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>No FAQs found.</p>
<?php endif; ?>
<?php /**PATH D:\faq\resources\views/faqs/search_result.blade.php ENDPATH**/ ?>