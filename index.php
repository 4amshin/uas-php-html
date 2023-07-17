<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Css Link-->
    <link rel="stylesheet" href="assets/css/index.css" />
    <!--Font Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Beranda</title>
  </head>
  <body>
    <!--Header NavBar-->
    <header id="header" class="header">
      <div class="logo">
        <img src="assets/images/logo-y.png" alt="bpjs-logo" />
        <!-- <img src="https://tinyurl.com/bpjs-ks-logo-white" alt="bpjs-logo" /> -->
      </div>
      <nav>
        <ul>
          <li><a href="#home" class="nav-item">Home</a></li>
          <li><a href="#about" class="nav-item">Tentang</a></li>
          <li class="dropdown">
            <a href="#service" class="nav-item">Layanan</a>
            <ul class="dropdown-menu">
              <li><a href="#">Layanan 1</a></li>
              <li><a href="#">Layanan 2</a></li>
              <li><a href="#">Layanan 3</a></li>
            </ul>
          </li>
          <li><a href="#contact" class="nav-item">Kontak</a></li>
          <a href="login.php" class="login-button">Login</a>
        </ul>
      </nav>
    </header>

    <!--Home Section-->
    <section class="home" id="home">
      <div class="left-side">
        <h1 class="title one">BPJS</h1>
        <h1 class="title two">KESEHATAN</h1>
        <h2 class="subtitle">KOTA PALOPO</h2>
        <p class="description">
          Website ini menyediakan informasi seputar BPJS Kesehatan Cabang Kota
          Palopo, seperti layanan, jenis layanan, fasilitas, dan lain-lainnya
        </p>
        <button class="detail-button">Lihat Selengkapnya</button>
      </div>
      <div class="right-side">
        <img src="assets/images/lady-circle.png" alt="hero-image" />
        <!-- <img src="https://tinyurl.com/lady-circle" alt="hero-image" /> -->
      </div>
    </section>

    <!---About Section-->
    <section class="about" id="about">
      <div class="left-side">
        <div class="image">
          <img
            class="office-img"
            src="assets/images/office.png"
            alt="bpjs-picture"
          />
          <!-- <img
            class="office-img"
            src="https://tinyurl.com/bpjs-office"
            alt="bpjs-picture"
          /> -->
        </div>
        <div class="card">
          <img src="assets/images/fast-response.png" alt="message-icon" />
          <!-- <img src="https://tinyurl.com/fast-response" alt="message-icon" /> -->
          <p class="text">Layanan Cepat</p>
        </div>
      </div>
      <div class="right-side">
        <h1 class="title">Deskripsi</h1>
        <p class="description">
          <b class="bold-color">BPJS Kesehatan</b> adalah badan penyelenggara
          jaminan sosial khusus untuk kesehatan.
          <b class="bold-color">BPJS</b> merupakan transformasi dari
          <b class="bold-color">PT Askes (persero)</b>, fungsi utama dari BPJS
          Kesehatan ialah menyelenggarakan jaminan kesehatan bagi seluruh
          masyarakat indonesia. Pada prosesnya, BPJS Kesehatan membantu
          <b class="bold-color">menjamin kesehatan</b> dengan program-program
          <b class="bold-color">asuransi kesehatan</b>.<br /><br /><b
            class="bold-color"
            >Asuruansi BPJS Kesehatan</b
          >
          sangat mudah diakses dengan
          <b class="bold-color">kerjasama rumah sakit</b> yang sangat luas
          diseluruh Indonesia. Untuk mendukung layanannya, BPJS Kesehatan
          <b class="bold-color">melayani</b> baik secara langsun
          <b class="bold-color">melalui kantor dan online</b> melalui website
          BPJS yang dapat di akses secara online
        </p>
      </div>
    </section>

    <!--Service Section-->
    <section class="service" id="service">
      <h1 class="title">LAYANAN</h1>

      <div class="card-grid">
        <div class="card">
          <div class="container">
            <img src="assets/icons/1-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-satu" alt="register icon" /> -->
          </div>
          <p class="text">Registrasi Peserta PPU Badan Usaha</p>
        </div>

        <div class="card">
          <div class="container">
            <img src="assets/icons/2-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-dua" alt="register icon" /> -->
          </div>
          <p class="text">Layanan Peserta JKN-KIS</p>
        </div>

        <div class="card">
          <div class="container">
            <img src="assets/icons/3-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-tiga" alt="register icon" /> -->
          </div>
          <p class="text">Informasi Fasilitas Kesehatan</p>
        </div>

        <div class="card">
          <div class="container">
            <img src="assets/icons/4-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-empat" alt="register icon" /> -->
          </div>
          <p class="text">Skrining Riwayat Kesehatan</p>
        </div>

        <div class="card">
          <div class="container">
            <img src="assets/icons/5-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-lima" alt="register icon" /> -->
          </div>
          <p class="text">Registrasi Autodebit</p>
        </div>

        <div class="card">
          <div class="container">
            <img src="assets/icons/6-card.png" alt="register icon" />
            <!-- <img src="https://tinyurl.com/kartu-enam" alt="register icon" /> -->
          </div>
          <p class="text">Informasi, Pengaduan, Saran & Aspirasi</p>
        </div>
      </div>
    </section>

    <!--Contact Section-->
    <section class="contact" id="contact">
      <h1 class="title">Kontak</h1>
      <div class="body">
        <div class="left-side">
          <form action="send_email.php" method="POSTS">
            <label class="label" for="name">Name:</label>
            <input class="input" type="text" name="name" id="name" />

            <label class="label" for="email">Email:</label>
            <input class="input" type="email" name="email" id="email" required/>

            <label class="label" for="message">Message:</label>
            <textarea
              class="textarea"
              rows="5"
              cols="30"
              name="message"
              id="message"
              required
            ></textarea>

            <input class="button" type="submit" value="Kirim" />
          </form>
        </div>

        <div class="right-side">
          <div class="sub-cont">
            <p class="text">Email</p>
            <p class="content">bpjskspalopo@gmail.com</p>
          </div>
          <div class="sub-cont">
            <p class="text">Phone</p>
            <p class="content">+6280 12345678</p>
          </div>
          <div class="map-box">
            <iframe 
            class="google-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158624.81093431353!2d120.19086465180972!3d-2.9972373674133337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db227703c8d617b%3A0xf13f24c31f2f8e54!2sSample%20Location!5e0!3m2!1sen!2sus!4v1626871182032!5m2!1sen!2sus&zoom=15" 
            frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    
    <!--Footer Section-->
    <footer>
      <p class="title">Support By:</p>
      <img class="logos" src="assets/icons/logo-w.png" alt="Sponsor Line Up">
      <!-- <img class="logos" src="https://tinyurl.com/logo-white" alt="Sponsor Line Up"> -->
      <p class="rights">&copy Copyright UNCP - Palopo 2023</p>
    </footer>

    <!--Back to Top Button-->
    <a href="#home" class="back-to-top">
      <i class="fa-solid fa-angles-up"></i>
    </a>

    <!--JavaScript Link-->
    <script src="assets/js/script.js"></script>
  </body>
</html>
