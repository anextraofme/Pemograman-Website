<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>SMAN 55 JAKARTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
		        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 2cm;
            background-color: #f7f7f7;
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

        .judul {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 12px;
            background-color: #fff;
            border-radius: 10px;
            margin-top: 100px;
        }

		.judul fieldset {
            border-radius: 10px;
        }
        .daftar {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .daftar fieldset {
            border-radius: 10px;
        }


        h3 {
            margin: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-right: 1px;

        }

        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        .tindakan {
            display: flex;
            gap: 5px;
        }

        .tindakan a {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        .tindakan a:hover {
            background-color: #555;
        }

        p {
            margin-top: 10px;
        }

        .table-img {
            max-width: 100px;

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
      <a href="list-siswa.php">Logout</a>
    </div>
</div>

    <header>
    </header>

		<div class="judul">
		<fieldset>
            <h3>Calon Peserta didik 2023/2024</h3>
            <p>Anda dapat melakukan Pengecekan informasi Peserta dengan melengkapai data pada form isian berikut.</p>
        </fieldset>
	</div>
<div class="daftar">
		<fieldset>
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
				echo "<td><img src=\"uploads/" . $siswa['foto'] . "\" class='table-img' alt='Foto Siswa'></td>";
                echo "<td>" . $siswa['username'] . "</td>";
                echo "<td>" . $siswa['password'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['tanggal_lahir'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                echo "<td class='tindakan'>";
				echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
				echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</fieldset>
</div>
<footer class="footer">
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
            <p style="text-align: center;">&copy; 2023 SMAN 55 Jakarta. All Rights Reserved.<br>Operated by Lia Sabila -
                Mahasiswi Teknik Informatika Universitas Paramadina</p>
        </div>
    </footer>
</body>
</html>
