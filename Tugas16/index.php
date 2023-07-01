<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMAN 55 JAKARTA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      margin: 0;
      display: flex;
      justify-content: space-between;
      padding: 10px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      background-color: #fff;
      z-index: 999;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

    }

    .navbar-logo img {
      width: 150px;
      height: auto;
      margin-left: 150px;
    }

    .navbar-menu {
      display: flex;
      align-items: center;
      margin-right: 150px;
    }

    .navbar-menu a {
      margin-right: 1cm;
      text-decoration: none;
      color: #333;
      font-size: 15px;
    }

    .navbar-search {
      position: relative;
      display: flex;
      align-items: center;
    }

    .navbar-search .search-input {
      border-radius: 15px;
      padding: 10px 10px;
      border: 1px solid #ccc;
      width: 150px;
      font-size: 12px;
    }

    .section-1 {
      background-image: url('https://sman55jakarta.sch.id//wp-content//uploads//2023//05//DSC03582-scaled.jpg');
      background-size: cover;
      background-position: center;
      height: 800px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      position: relative;
      margin-top: 80px;
    }

    .section-1::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .section-1 .SMAN55JKT {
      position: absolute;
      top: 275px;
      font-size: 75px;
      color: #E3BC22;
      font-family: 'Noto Sans', sans-serif;
    }

    .section-1 .WELCOME {
      position: absolute;
      font-size: 80px;
      font-weight: 300;
      top: 125px;
      font-family: 'Noto Sans', sans-serif;
    }

    .button-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 250px;
    }

    .button1,
    .button2 {
      display: inline-block;
      background-color: rgba(255, 255, 255, 0.7);
      color: rgb(55, 156, 206);
      font-size: 20px;
      font-weight: bold;
      border-radius: 50px;
      text-decoration: none;
      width: 300px;
      height: 50px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      outline: none;
      position: relative;
      z-index: 1;
      font-family: 'Poppins', sans-serif;
      border-style: solid;
      border-color: rgb(55, 156, 206);
    }

    .button1:hover,
    .button1:focus,
    .button2:hover,
    .button2:focus {
      background-color: rgb(55, 156, 206);
      color: #fff;
    }

    .button1 {
      margin: 15px;
    }

    .section-2 {
      margin: 2cm;
    }

    /* Styles for Table */
    .section-2 table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .section-2 th,
    .section-2 td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .section-2 th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    .section-2 td {
      font-size: 14px;
    }

    .section-2 p {
      margin-top: 10px;
    }

    .section-3 {
    background-color: #f8f8f8;
    padding: 50px 0;
  }

  .section-3 .container {
    max-width: 800px;
    margin: 0 auto;
  }

  .section-3 h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .section-3 p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
  }


  .section-3 iframe {
    width: 100%;
    height: 300px;
    border: none;
  }


    .footer {
    background-color: #1E1E1E;
    padding: 20px;
    color: #FFFFFF;
    
  }

  .footer .container {

    margin-bottom: 3cm;
  }

    .footer .social-media-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;

    }

    .footer .social-media-logo a {
    
      display: inline-block;
      margin: 0 10px;
    }

    .footer .social-media-logo img {
      width: 40px;
      height: 40px;
    }

  </style>
</head>

<body>
  <div class="navbar">
    <a href="http://localhost/Tugas16/index.php" class="navbar-logo">
      <img src="LOGO-SMAN-55-JAKARTA.jpg" alt="Logo">
    </a>
    <div class="navbar-menu">
      <a href="#section-3">Tentang Aku</a>
      <a href="form-daftar.php">Registrasi</a>
      <a href="list-siswa.php">Calon Siswa</a>
      <a href="#footer">Kontak</a>
      <div class="navbar-search">
        <input type="text" class="search-input" placeholder="Pencarian">
      </div>
    </div>
  </div>

  <section class="section-1">
    <h1 class="WELCOME">Welcome To</h1>
    <h1 class="SMAN55JKT"><strong>SMAN 55 JAKARTA</strong></h1>
    <div class="button-container">
      <a href="form-daftar.php">
        <button class="button1">REGISTRATION</button>
      </a>
      <a href="login-siswa.php">
        <button class="button2">E-LEARNING</button>
      </a>
    </div>
  </section>

  <section class="section-2">
    <div class="judul_section2">
      <h1>CALON PESERTA DIDIK<br>PEMBELAJARAN 2023/2024</h1>
    </div>

    <p>
      ini langsung masuk ke php my admin saja baiknya Laboratorium Komputer, Fisika, Kimia, dan Biologi,
      perpustakaan, greenhouse, ruang multimedia, serta audio visual. Untuk menunjang pembelajaran berbasis
      teknologi didukung dengan ketersediaan Wi-Fi.
    </p>

    <?php include("config.php"); ?>

    <br>
    <table>
      <thead>
        <tr>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        while ($siswa = mysqli_fetch_array($query)) {
          echo "<tr>";
          echo "<td>" . $siswa['nama'] . "</td>";
          echo "<td>" . $siswa['tanggal_lahir'] . "</td>";
          echo "<td>" . $siswa['alamat'] . "</td>";
          echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
          echo "<td>" . $siswa['agama'] . "</td>";
          echo "<td>" . $siswa['sekolah_asal'] . "</td>";
          echo "</tr>";
        }
        ?>  
      </tbody>
    </table>
    <a href="list-siswa.php">
        <p>Lebih Banyak</p>
      </a>
      ini langsung masuk ke php my admin saja baiknya Laboratorium Komputer, Fisika, Kimia, dan Biologi,
      perpustakaan, greenhouse, ruang multimedia, serta audio visual. Untuk menunjang pembelajaran berbasis
      teknologi didukung dengan ketersediaan Wi-Fi.
    </p>
  </section>

  <section id = "section-3" class="section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
            <h3 class="aa" style="text-align: center;">Deskripsi Singkat</h3>
            <p>SMAN 55 Jakarta adalah sekolah menengah atas unggulan di Jakarta dengan pendidikan berkualitas, staf pengajar berkualifikasi, fasilitas yang baik, dan berbagai kegiatan ekstrakurikuler.<br><br>Sekolah ini meraih prestasi gemilang dalam kompetisi akademik dan non-akademik, serta memberikan lingkungan belajar yang
            stimulatif dan mendukung bagi siswa yang ingin persiapan perguruan tinggi.
        </p>
            </div>
            <div class="col-md-6 col-12" >
                <h3 style="text-align: center;">Kunjungi Kami</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=1hBewSuNPo2mGwkyMVvvJq8YoRR0&hl=en_US&ehbc=2E312F" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
  </section>

  <footer id="footer" class="footer">
    <h2 style="text-align: center;">-- Follow Us --</h2>
    <div class="social-media-logo">
            <a href="https://www.instagram.com" target="_blank">
                <img src="instagram.png" alt="Instagram" />
            </a>
            <a href="https://www.youtube.com" target="_blank">
                <img src="youtube.png" alt="YouTube" />
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <img src="facebook.png" alt="Facebook" />
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="twitter.png" alt="Twitter" />
            </a>
        </div>
        <div>
            <p style="text-align: center;">&copy; 2023 SMAN 55 Jakarta. All Rights Reserved.<br>Operated by Lia Sabila - Mahasiswi Teknik Informatika Universitas Paramadina</p>
        </div>
    </footer>
</body>

</html>
