
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(route('faqs.index')); ?>">FAQ Management</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
             
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.login.form')); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>

<?php /**PATH D:\faq\resources\views/layouts/app.blade.php ENDPATH**/ ?>