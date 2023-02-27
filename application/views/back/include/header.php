<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyBlog Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?= base_url('assets/back/')?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?= base_url('admin/panel') ?>">MyBlog</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Genel</div>
                            <a class="nav-link" href="<?= base_url('admin/panel/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Ayarlar
                            </a>
                            <div class="sb-sidenav-menu-heading">Site</div>
                            <a class="nav-link" href="<?= base_url('admin/iletisim/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                                İletişim
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/blog/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Blog
                            </a>
                            <div class="sb-sidenav-menu-heading">Admin</div>
                            <a class="nav-link" href="<?= base_url('admin/yoneticiler/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Yöneticiler
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/sifre/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-lock"></i></div>
                                Şifre Değiştir
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/logout/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Çıkış Yap
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <?php flashread(); ?>