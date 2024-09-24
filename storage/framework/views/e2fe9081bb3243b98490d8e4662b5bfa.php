<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
<div class="login-container">
    <h1>Login</h1>
    <form method="POST" action="<?php echo e(route('admin.login')); ?>">
        <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <input type="email" name="email" class="form-control" required placeholder="Email" value="<?php echo e(old('email')); ?>">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" required placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-login">Login</button>

        <div class="register-container">
            <a href="<?php echo e(route('admin.register.form')); ?>" class="btn btn-secondary btn-register">Register</a>
        </div>
    </form>
</div>




<?php /**PATH D:\faq\resources\views/admin/login.blade.php ENDPATH**/ ?>