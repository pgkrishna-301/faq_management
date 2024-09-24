
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet"> 
 
</head>
<body>
    <div class="login-container">
        <div class="login-box">
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
    </div>
</body>
</html>

<?php /**PATH C:\Users\Krishna\Downloads\_public_html\resources\views/admin/login.blade.php ENDPATH**/ ?>