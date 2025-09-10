<!DOCTYPE html>
<html>
<head>
    <title>Website SMA XYZ</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { width: 800px; margin: 0 auto; border: 1px solid #000; }
        .header, .footer { padding: 15px; border-bottom: 1px solid #000; }
        .footer { border-top: 1px solid #000; border-bottom: none; }
        .menu { border-bottom: 1px solid #000; padding: 10px; text-align: left; }
        .menu a { margin-right: 20px; text-decoration: none; }
        .content { padding: 30px; min-height: 200px; }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <h2><?= isset($title) ? esc($title) : 'WEBSITE SMA XYZ' ?></h2>
    </div>

    <!-- Menu -->
    <div class="menu">
        <a href="<?= site_url('/home') ?>">Home</a>
        <a href="<?= site_url('/mahasiswa/display_mahasiswa') ?>">Data Mahasiswa</a>
        <a href="<?= site_url('/auth/logout') ?>">Logout</a>
    </div>


    <!-- Konten -->
    <div class="content">
        <?= $content ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <b>Bandung - Jawa Barat</b>
    </div>
</div>
</body>
</html>
