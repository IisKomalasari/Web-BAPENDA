
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
    <title>Berita Bapenda | Badan Pendapatan Daerah Garut</title>
</head>
<body>
<!-- navbar -->
<header>
<?php
    //tambahkan dbconnect
    include('koneksi.php');

    //query
    $query = "SELECT * FROM berita";

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
      <!--Navbar-->

      <!-- Berita-->
     
      <section class="hero5">
        <div>
            <h1 class="boxin" data-aos="fade-right" data-aos-duration="1000">Daftar Berita</h1>
          </div>
        <div class="para">
        <?php
                            $no = 1;
                                while ($row= mysqli_fetch_assoc($result)) {
                            ?>
                                <tr align="center">
                                    <td><?php echo $row['judul_berita']; ?></td><br>
                                    <td><img src="images/<?php echo $row['image_berita']; ?>" width="120px" height="100px"></td><br>
                                    <td><?php echo $row['tgl_berita']; ?></td>
                                    <td class="tema1"><?php echo $row['deskripsi_berita']; ?></td>
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
    <section class="contact1">
        <h1> CONTACT</h1>
        <div class="box-kontak">
        <h2>Lokasi</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3635998898585!2d107.88505101432004!3d-7.199290872668496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b0f3dac38681%3A0x9e8871f20bb5c58d!2sBadan%20Pendapatan%20Daerah%20Kabupaten%20Garut!5e0!3m2!1sid!2sid!4v1659772650229!5m2!1sid!2sid" width="300" height="200" style="border:1px solid rgb(26, 83, 81)" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-right"></iframe>
        </div>
    </section>
    <section id="tombol">
        <h2 class="tombolteks">Follow</h2>
        <div class="icon-tombol">
            <a class="tombol" href="https://www.facebook.com/profile.php?id=100086121386587" data-aos="fade-right"><i class="ri-facebook-box-line"></i></a>
    
            <a class="tombol" href="https://mobile.twitter.com/bapenda_garut" data-aos="fade-right"><i class="ri-twitter-line"></i></a>
    
            <a class="tombol" href="https://instagram.com/bapenda_garut?igshid=YmMyMTA2M2Y=" data-aos="fade-right"><i class="ri-instagram-line"></i></a>

        </div>
        <div class="ContactForm" data-aos="fade-left" data-aos-duration="1000">
            <form>
              <h2> Komentar</h2>
              <div class="inputBox">
                <input type="text" name="" required="required">
                  <span>Nama</span>
                <div class="inputBox">
                <input type="text" name="" required="required">
                  <span>Email</span>
                  <div class="inputBox">
                    <input type="text" name="" required="required">
                      <span>Website</span>
                <div class="inputBox">
                  <textarea required="required"></textarea>
                  <span>Pesan</span>
                <div class="inputBox">
                    <input type="submit" name="" value="Kirim">
              </div>
            </form>
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