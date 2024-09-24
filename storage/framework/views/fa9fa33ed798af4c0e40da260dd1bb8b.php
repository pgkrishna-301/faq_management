

<?php $__env->startSection('title', 'Edit FAQ'); ?>

<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/edit.css')); ?>" rel="stylesheet">
<div class="faq-edit-container">
    <h1>Edit FAQ</h1>
    <form action="<?php echo e(route('admin.faqs.update', $faq->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="display_name">Display Name</label>
            <input type="text" class="form-control" name="display_name" value="<?php echo e($faq->display_name); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required><?php echo e($faq->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="faq_type_id">FAQ Type</label>
            <select class="form-control" name="faq_type">
                <option value="tooltip" <?php echo e($faq->faq_type == 'tooltip' ? 'selected' : ''); ?>>Tool-tip</option>
                <option value="abbreviation" <?php echo e($faq->faq_type == 'abbreviation' ? 'selected' : ''); ?>>Abbreviation</option>
                <option value="glossary" <?php echo e($faq->faq_type == 'glossary' ? 'selected' : ''); ?>>Glossary</option>
                <option value="demo" <?php echo e($faq->faq_type == 'demo' ? 'selected' : ''); ?>>Demo</option>
                <?php $__currentLoopData = $faqTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>" <?php echo e($faq->faq_type == $type->id ? 'selected' : ''); ?>><?php echo e($type->display_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update FAQ</button>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\faq\resources\views/admin/faqs/edit.blade.php ENDPATH**/ ?>