

<?php $__env->startSection('title', 'Register'); ?>
<link href="<?php echo e(asset('css/register.css')); ?>" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<div class="register-container">
    <h1>Register</h1>
    <form method="POST" action="<?php echo e(route('admin.register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="text" name="name" class="form-control" required placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" required placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" required placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" required placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <br>
        <div class="login-container">
            <a href="<?php echo e(route('admin.login.form')); ?>" class="btn-login">Login</a>
        </div>
    </form>
</div>



<?php /**PATH D:\faq\resources\views/admin/register.blade.php ENDPATH**/ ?>