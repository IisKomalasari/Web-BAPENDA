<?php
session_start();
if ($_SESSION["level"] != "admin") {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Edit Form SOP | Badan Pendapatan Daerah Kabupaten Garut</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo bapenda.png" />
</head>

<body id="page-top">
    <main>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="DashboardAdmin.php">
                <div class="sidebar-brand-icon ">
                    <img src="images/bapenda oke.png" alt="bapenda" class="brand-image img-circle elevation-3" weight="100" height="50"></img>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin Bapenda</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="DashboardAdmin.php">
                <i class="fa-solid fa-house-chimney"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Data_User.php">
                <i class="fa-solid fa-user-group"></i>
                    <span>Data Pengguna</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tentang Bapenda</h6>
                        <a class="collapse-item" href="AdminSejarah.php">Sejarah</a>
                        <a class="collapse-item" href="AdminVisiMisi.php">Visi Misi</a>
                        <a class="collapse-item" href="AdminStruktur.php">Struktur Organisasi</a>
                        <br>
                        <a class="collapse-item" href="AdminBerita.php">Berita Bapenda</a>
                        <br>
                        <h6 class="collapse-header">Galeri Bapenda</h6>
                        <a class="collapse-item" href="Adminfoto.php"> Foto</a>
                        <a class="collapse-item" href="Adminvideo.php">Video</a>
                        <br>
                        <h6 class="collapse-header">Informasi Publik</h6>
                        <a class="collapse-item" href="AdminRencanakerja.php">Rencana Kerja</a>
                        <a class="collapse-item" href="AdminSOP.php">SOP Perpajakan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">

                <a class="nav-link" href="login.php">
                <i class="fas fa-power-off text-gray-500"></i>
                    &nbsp Logout
                </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <!-- Divider -->

            <!-- Heading -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                        </li>

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <?php
                            include('koneksi.php');
                            $currentuser = $_SESSION['username'];
                            $sql = "select * from user where username='$currentuser'";
                            $result = mysqli_query($koneksi, $sql);
                            if ($result) {
                            if (mysqli_num_rows($result) > 0) { 
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['nama_petugas']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="images/<?php echo $row['gambar'];?>">
                            </a>
                            <?php
                                }
                            }
                            }
                        ?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="login.php">
                                <i class="fas fa-power-off text-gray-400"></i>
                                    &nbsp Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-center"> Halaman Edit SOP Perpajakan</h1>
                </div>
                <!-- /.container-fluid -->
                <div id="layoutSidenav_content">
            <div class="container">
              <div class="card mt-3">
                <div class="card-header">
                  <h3>Form Edit SOP Perpajakan</h3>
                  <?php
                    $id_sop = $_GET['id_sop'];

                    //koneksi database
                    include('koneksi.php');

                    //query
                    $query = "SELECT * FROM sop_perpajakan WHERE id_sop='$id_sop'";
                    $result = mysqli_query($koneksi, $query);

                    ?>
                </div>
                <div class="card-body">
                <form role="form" action="edit_SOP.php" method="get" >

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                      <input type="hidden" name="id_sop" value="<?php echo $row['id_sop']; ?>">

                        <div class="mb-3">
                          <label for="nm_sop" class="form-label">Nama File</label>
                          <input type="text" class="form-control" name="nm_sop" id="nm_sop" value="<?= $row['nm_sop']; ?>">
                        </div>
                        <div class="form-group mt-3">
                        <label for="file_sop"> Pilih File</label>
                        <br>
                        <input type="file" name="file_sop" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update SOP Perpajakan</button>
                        <?php
                        }
                        mysqli_close($koneksi);
                        ?>
                </form>
                </div>
              </div>
            </div>
            <!-- End of Main Content -->
           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    </main>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> &copy; 2022 Badan Pendapatan Daerah Kabupaten Garut</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
</body>

</html>