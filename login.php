<?php
  session_start();
  if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]) {
    if($_SESSION['level'] == 'admin') { 
      header("location:DashboardAdmin.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="images/logo bapenda.png"/>
  <link rel="stylesheet" href="admin.css">
  <title>Login Admin | Badan Pendapatan Daerah </title>
</head>

<body>
    <div class="container">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                        <div class="text-center my-5">
                        <img src="images/logo bapenda.png" alt="logo bapenda" width="100" padding="10px 20px">
                            <h2 class="fs-3 card-title fw-bold mb-3 text-primary" text-align="center">BAPENDA GARUT</h2>
                            <form action="aksi.php" method="post" accept-charset="utf-8">
                            <?php
                            if (isset($_GET['pesan'])) {
                              if ($_GET['pesan'] == "gagal") {
                              echo '<div class="alert alert-danger" role="alert"> Maaf, username dan password yang anda masukkan tidak valid</div>';
                              }
                            }
                            ?>  
                            <div class="mb-3">
                                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="mb-3">
                                  
                                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto">
                              <button type="submit" class="btn btn-outline-primary">Login</button>
                              </div>
                              <br>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                      Copyright &copy; 2022 Badan Pendapatan Daerah Garut
                    </div>
                </div>
            </div>
        </div>          
</body>
</html>