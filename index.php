<?php
  session_start();
  if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]) {
    if($_SESSION['level'] == 'pengguna') { 
      header("location:index.php");
    }
}
?>
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
    <title>Beranda Bapenda | Badan Pendapatan Daerah Garut</title>
</head>


<!-- navbar -->
<header>
  <div class="navbar"> 
      <div class="container">
      <div class="box-navbar ">
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
       <!--Kolom Keempat-->

        <section id="hero">
          <div class="image">
            <img src="assets/image/oke2.png" alt="oke2.png">
          </div>
        <h1>Badan Pendapatan Daerah Kabupaten Garut</h1>
        <p class="par"> Orang Bijak Pasti Taat Pajak…<br>
                        Orang Jahat Makan Pajak<br>
                        Orang Gila Enggak Di Ajak <br>
                        ~Ayoo Peduli Pajak😊~</p>
          </section>
      <!--Kolom Kelima-->
      <div class="menu-bar">
          <i class="fa-solid fa-bars"></i>
      </div>
      </div>
      </div>
      </div>
     
      <!--Navbar-->

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
  <section class="abuabu" id="support">
      <div class="layar-dalam support">
        <div data-aos="zoom-in"  data-aos-duration="1000">
          <a href="http://epad.bapenda.garutkab.go.id:81/"><img src="assets/image/weboke.png" ></a>
          <h6>e-PAD</h6>
          <p>
              Sistem aplikasi yang dibangun berbasis web yang dikembangkan sebagai sarana pengelolaan pajak lainnya <br> non PBB dan BPHTB.
          </p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000">
          <a href="http://esptpd.bapenda.garutkab.go.id:84/"><img src="assets/image/daftaruser.png"></a>
          <h6>e-SPTPD</h6>
          <p>
              Aplikasi sebagai sarana wajib pajak untuk mendaftarkan, membayar dan melaporkan kewajiban pajak daerahnya online
          </p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000">
        <a href="https://e-pbb.bapenda.garutkab.go.id/site/login"><img src="assets/image/world_icon_125099.png"></a>
          <h6>e-PBB</h6>
          <p>
              aplikasi yang dibangun berbasis web yang dikembangkan sebagai pengelolaan dan sarana Pelayanan PBB-P2 
          </p>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000">
          <a href="https://dashboard.bapenda.garutkab.go.id/v2/"><img src="assets/image/dashboard1.png"></a>
          <h6>Dashboard</h6>
          <p>
              Dashboard Untuk mengetahui Pendapatan Asli Daerah Kabupaten Garut dari berbagai sektor secara real time data
          </p>
        </div>
      </div>
    </section>
  </main>
<main>
  <section id="aboutus" data-aos="fade-up" data-aos-duration="1000">
  <div class="layar-dalam">
    <h3>Kabar Bapenda</h3>
    <p class="ringkasan">
      Setiap Pembayar Pajak Buktikan Ketaatan Bernilai Ibadah
    </p>
    <div class="konten-isi">
      <p>
        Kepala Badan Pendapatan Daerah (Bapenda) Kabupaten Garut,Drs H. Hendra S. Gumilang, MM., katakan, setiap pembayar pajak dan retribusi sebagai bentuk ketaatan yang bernilai ibadah. Lantaran bentuk ketaatan mereka terhadap 
        pemerintah maupun pemerintah daerah tersebutLantaran bentuk ketaatan mereka terhadap pemerintah maupun pemerintah daerah tersebut, bisa mewujudkan peningkatan kegiatan pembangunan di Kabupaten Garut, yang dipastikan dirasakan manfaatnya oleh seluruh masyarakat.
        Sedangkan capaian perolehan pajak termasuk retribusi pada 2021 di kabupaten ini ditargetkan mencapai Rp133 miliar, yang hingga sekarang terealisasi 13,6 persen atau sekitar Rp18 miliar, ungkap Hendra S. Gumilang di ruang kerjanya, Senin (22/03-2021).<br>
      <a href="https://garutnews.com/setiap-pembayar-pajak-buktikan-ketaatan-bernilai-ibadah.html"> <span>Sumber</span> </a>
      <br>
      </p>
    </div>
  </div>
 </div>
</section>
</main>

<section class="contact">
  <div class="Content" data-aos="fade-up" data-aos-duration="1000" >
    <h1>Contact Info</h1>
  </div>
  <div class="Container" data-aos="fade-right">
    <div class="contactInfo">
      <div class="box">
        <div class="icon1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
        <div class="huruf">
          <h5> Lokasi</h5>
          <p>Jl. Otista No.278</p>
        </div>
      </div>
    </div>
  </div>
  <div class="Container" data-aos="fade-right">
    <div class="contactInfo">
      <div class="box">
        <div class="icon1"><i class="ri-mail-fill"></i></div>
        <div class="huruf">
          <h5>Email</h5>
          <p>bapenda@garutkab.go.id</p>
        </div>
      </div>
    </div>
  </div>  
  <div class="Container" data-aos="fade-right">
    <div class="contactInfo">
      <div class="box">
        <div class="icon1"><i class="ri-customer-service-fill"></i></div>
        <div class="huruf">
          <h5>Layanan Pajak</h5>
          <p>(0262) 2801834</p>
        </div>
      </div>
    </div>
  </div>
    <div class="contactForm" data-aos="fade-left" data-aos-duration="1000">
      <form>
        <h2> Kritik dan Saran</h2>
        <div class="inputBox">
          <input type="text" name="" required="required">
            <span>Nama</span>
          <div class="inputBox">
          <input type="text" name="" required="required">
            <span>Email</span>
          <div class="inputBox">
            <textarea required="required"></textarea>
            <span>Pesan</span>
          <div class="inputBox">
              <input type="submit" name="" onclick="return confirm('Kritik dan Saran Anda Telah Di Kirim Terima Kasih')" value="Kirim">
        </div>
      </form>
    </div>
  </div>
</section>

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