<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de pro</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already Have an Account ?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't Have an Account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

                <form method="post" action="<?= base_url('login')?>">
                    <h3>Login </h3>
                    <input type="text" placeholder="Username" name="name" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" value="Login">
                    <a href="#" class="forgot">Forgot Password</a>
                </form>
            </div>
            <div class="form signupForm">
            
            <?php if (session()->getFlashdata('success')): ?>
                <div class="color: green;">
                    <?= session()->getFlashdata('success') ?>
                </div>
            
            <?php endif; ?>
            <?php if (session()->getFlashdata('error_to')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error_to') ?>
                </div>
            <?php endif; ?>


                <form method="post" action="<?=base_url('ajout')?>">
                    <h3>Sign Up</h3>
                    <input type="text" placeholder="name" name="name" required>
                    <input type="text" placeholder="Email Address" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="password" placeholder="Confirm Password" name="repetepassword" required>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>