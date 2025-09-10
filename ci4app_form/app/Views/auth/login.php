<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="text-align:center; margin-top:100px;">
    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form method="post" action="<?= site_url('/auth/login') ?>">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
