
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body, html {
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-image: url('<?php echo e(asset('images/bg (1).jpg')); ?>');

        }

        .login-container {
              display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
        }

        .login-box {
            background: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .register-container {
            text-align: center;
            margin-top: 15px;
        }

        .btn-register {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-register:hover {
            text-decoration: underline;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .login-box {
                width: 90%;
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
            .login-box {
                width: 100%;
                padding: 20px 15px;
            }

            .form-control {
                padding: 12px;
            }

            .btn-login {
                padding: 12px;
                font-size: 1rem;
            }
        }
    </style>
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

<?php /**PATH /home/u567042737/domains/faq.endlesskillshorthand.in/public_html/resources/views/admin/login.blade.php ENDPATH**/ ?>