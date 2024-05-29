
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/home/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/image/logo bapenda.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Visi & Misi Bapenda | Badan Pendapatan Daerah Garut</title>
</head>

<body>
<!-- navbar -->
<header>
<?php
        //tambahkan dbconnect
        include('koneksi.php');

        //query
        $query = "SELECT * FROM visi_misi";

        $result = mysqli_query($koneksi, $query);

        ?>
  <div class="navbar"> 
      <div class="container">
      <div class="box-navbar">
          <!--Kolom Pertama-->
      <div class="logo">
          <img src="assets/image/logobapenda.png" alt="logobapenda" width="40" height="40">
      </div>
      <div class="navigation">
          <!--Kolom Kedua-->
          <ul>
              <li><a href="index.php"> Beranda </a></li>
              <li><span class="dropdown1">Tentang BAPENDA
                  <i class="fa-solid fa-angle-down"></i>
              </span>
                  <div class="items">
                      <a href="Sejarah.php"> Sejarah</a>
                      <a href="VisiMisi.php"> Visi & Misi</a>
                      <a href="StrukturOrganisasi.php"> Struktur Organisasi</a>
                  </div>
              </li>
              <li><a href="BeritaBapenda.php"> Berita BAPENDA </a></li>
              <li><span class="dropdown4">Galeri
                  <i class="fa-solid fa-angle-down"></i>
              </span>
                  <div class="items4">
                      <a href="FotoBapenda.php"> Foto</a>
                      <a href="VideoBapenda.php"> Video</a>
                  </div>
              </li>
              <li><span class="dropdown5">Informasi Publik
                  <i class="fa-solid fa-angle-down"></i>
              </span>
                  <div class="items5">
                      <a href="RencanaKerja.php">Rencana Kerja</a>
                      <a href="SOP.php">SOP Perpajakan</a>
                  </div>
              </li>
          </ul>
      </div>
      <!--Kolom Kelima-->
      <div class="menu-bar">
          <i class="fa-solid fa-bars"></i>
      </div>
      </div>
      </div>
      </div>
      </section>


      <!--Navbar-->
      <section class="hero2">
        <div class="box2">  
        <h2 style="color:white" >Visi</h2>
        </div>
        <div class="article">
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr align="center">
            <p class="par2">“Terwujudnya Peningkatan Pendapatan Daerah dalam Mendukung Pembangunan  yang Berkualitas” </p>
                <td><?php echo $row['isi_visi']; ?></td>
            </tr>
        </div>
            <div class="hero3">
                <div class="box3"> 
                <h2 style="color:white">Misi</h2>
                </div>
                <div class="article">
                                <tr align="center"> 
                                <p class="par_3">Misi 1 Optimalisasi Peningkatan Pendapatan Daerah</p> 
                                <p class="par_3">Misi 2 Meningkatkan Pelayanan adminstrasi, akuntabilitas kinerja serta sumber daya aparatur yang  professional</p>
                                    <td><?php echo $row['isi_misi']; ?></td>
                                </tr>
                            <?php
                        }
                        // mysqli_close($koneksi);
                            ?> 
            </div>
        </section>

       <!--sidebar-->
       <div class="sidebars">
        <div class="side-logo">
            <img src="assets/image/logobapenda.png" alt="logobapenda" width="60" height="60"> 
        </div>
        <div>
          <ul>
              <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i>Beranda</a></li>
              <li><span class="bar-dropdown2"><i class="ri-file-info-fill"></i>Tentang BAPENDA
                  <i class="fa-solid fa-angle-down arrow2"></i>
              </span>
                  <div class="bar-items2">
                      <a href="Sejarah.php">Sejarah</a>
                      <a href="VisiMisi.php">Visi & Misi</a>
                      <a href="StrukturOrganisasi.php">Struktur Organisasi</a>
                  </div>
              </li>
              <li><a href="BeritaBapenda.php"><i class="fa-regular fa-newspaper"></i>Berita BAPENDA </a></li>
              <li><span class="bar-dropdown4"><i class="fa-regular fa-images"></i>Galeri
                  <i class="fa-solid fa-angle-down arrow4"></i>
              </span>
                  <div class="bar-items4">
                      <a href="FotoBapenda.php">Foto</a>
                      <a href="VideoBapenda.php">Video</a>
                  </div>
              </li>
              <li><span class="bar-dropdown5"><i class="fa-brands fa-creative-commons-share"></i>Informasi Publik
                  <i class="fa-solid fa-angle-down arrow5"></i>
              </span>
                  <div class="bar-items5">
                      <a href="RencanaKerja.php">Rencana Kerja</a>
                      <a href="SOP.php">SOP Perpajakan</a>
                  </div>
              </li>
          </ul>  
  </div>
    </div>
    <!--background sidebar-->
    <div class="bg-sidebar"></div>
    <!--bacground sidebar-->
    </div>
    <!--sidebar-->
</header>
<main>
    <section id="tema-motto">
        <div class="container" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-duration="2000" >
            <div class="box-motto">
          <h1 class="tema">Motto</h1>
           </div>
          <div class="text-motto">
             <p> “PROFESIONAL DALAM PENDATAAN DAN PENETAPAN, TERDEPAN DALAM PELAYANAN DAN SANTUN DALAM PENAGIHAN"</p>
          </div>
        </div>
      </section>
    </main>
<script src="assets/page/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<footer>
    <p> &#169; Badan Pendapatan Daerah Kabupaten Garut 2022</p>
</footer>
</body>
</html>