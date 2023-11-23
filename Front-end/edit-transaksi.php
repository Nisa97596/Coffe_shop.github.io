<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="hal_admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="hal_admin.php">Euphoria Admin Site</a>
        <!-- Sidebar Toggle-->
        <img src="coffe_logo.png" width="40px" height="40px">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><img class="img_akun" src="e1.jpeg" width="40px"
                        height="40">&nbsp;Earth&nbsp;</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="hal_admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashbor
                        </a>
                        <div class="sb-sidenav-menu-heading">Tabel</div>
                        <a class="nav-link" href="user.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            user
                        </a>
                        <a class="nav-link" href="menu.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-mug-saucer"></i></div>
                            Menu
                        </a>
                        <a class="nav-link" href="karyawan.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users-rectangle"></i></div>
                            Karyawan
                        </a>
                        <a class="nav-link" href="transaksi.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill"></i></div>
                            Transaksi
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="Tabel_menu">
                    <div class="judul">
                        <h1 class="judul1">Edit Data Transaksi</h1>
                        <html>
                        <a href="transaksi.php">🔙 kembali</a>
                        <?php
                        include 'koneksi.php';
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "select * from transaksi where id_transaksi='$id'");
                        while ($tampil = mysqli_fetch_array($data)) {
                            ?>

                            <form class="edit_user" method="post" action="edit-aksi-transaksi.php">
                                <table>
                                    <tr>
                                        <td>id_transaksi</td>
                                        <td><input type="number" name="id_transaksi"
                                                value="<?php echo $tampil['id_transaksi']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>id_karyawan</td>
                                        <td><input type="number" name="id_karyawan"
                                                value="<?php echo $tampil['id_karyawan']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>id_menu</td>
                                        <td><input type="number" name="id_menu" value="<?php echo $tampil['id_menu']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td><input type="number" name="Harga" value="<?php echo $tampil['Harga']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td><input type="number" name="Jumlah" value="<?php echo $tampil['Jumlah']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="simpan"></td>
                                    </tr>
                                </table>
                            </form>

                            <?php
                        }
                        ?>

                        </html>