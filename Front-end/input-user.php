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
                        <h1 class="judul1">Input Data User</h1>
                        <a href="user.php">
                            🔙 KEMBALI
                        </a>
                    </div>
                    <form class="edit_user" method="post" action="input-aksi-user.php">
                        <table>
                            <tr>
                                <td>id_user</td>
                                <td><input type="number" name="id_user"></td>
                            </tr>
                            <tr>
                                <td>nama</td>
                                <td><input type="text" name="Nama"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" name="Password"></td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td><input type="text" name="Level"></td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td><input type="submit" value="SIMPAN"></td>
                            </tr>
                        </table>
                    </form>