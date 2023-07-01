<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMAN 55 JAKARTA</title>
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

        .daftar label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .daftar input[type="text"],
        .daftar input[type="password"],
        .daftar input[type="date"],
        .daftar textarea,
        .daftar select {
            width: 100%;
            font-family: 'Poppins', sans-serif;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
            width: 500px;
        }

        .daftar input[type="file"] {
            margin-top: 5px;
        }

        .daftar input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.7);
            color: rgb(55, 156, 206);
            transition: background-color 0.3s ease;
            outline: none;
            z-index: 1;
            border-style: solid;
            border-color: rgb(55, 156, 206);
        }

        .daftar input[type="submit"]:hover {
            background-color: rgb(55, 156, 206);
            color: #fff;
        }

        .preview-img {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
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
    <header>
    </header>
    <div class="navbar">
        <a href="http://localhost/Tugas16/index.php" class="navbar-logo">
            <img src="LOGO-SMAN-55-JAKARTA.jpg" alt="Logo">
        </a>
        <div class="navbar-menu">
            <a href="#">Tentang Aku</a>
            <a href="#">Galeri</a>
            <a href="#">Alumni</a>
            <a href="#">Kontak</a>
            <div class="navbar-search">
                <input type="text" class="search-input" placeholder="Pencarian">
            </div>
        </div>
    </div>
    <div class="judul">
        <fieldset>
            <h3>Pendaftaran</h3>
            <p>Anda dapat melakukan Pengecekan informasi Peserta dengan melengkapai data pada form isian berikut.</p>
        </fieldset>
    </div>

    <div class="daftar">
        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

            <fieldset>
                <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Username" required>
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required>
                </p>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama lengkap" required>
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" required>
                </p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" placeholder="Alamat" required>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama:</label>
                    <select name="agama" required>
                        <option selected disabled>-- Pilih Agama --</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required>
                </p>
                <p>
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" accept="image/*" required onchange="previewImage(event)">
                    <img id="preview" class="preview-img" src="#" alt="Preview" style="display: none;">
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar">
                </p>
            </fieldset>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

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
