
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
        }

        .register-box {
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

        .btn-primary {
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

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .login-container {
            text-align: center;
            margin-top: 15px;
        }

        .btn-login {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-login:hover {
            text-decoration: underline;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .register-box {
                width: 90%;
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
            .register-box {
                width: 100%;
                padding: 20px 15px;
            }

            .form-control {
                padding: 12px;
            }

            .btn-primary {
                padding: 12px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
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
    </div>
</body>
</html>
<?php /**PATH /home/u567042737/domains/faq.endlesskillshorthand.in/public_html/resources/views/admin/register.blade.php ENDPATH**/ ?>