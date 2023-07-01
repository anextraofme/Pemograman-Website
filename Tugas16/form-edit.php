<?php
include("config.php");
// kalau tidak ada id di query string 
if (!isset($_GET['id'])) {
    header("location:list-siswa-admin.php");
    exit();
}
//ambil id dari query string 
$id = $_GET['id'];
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
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

        .edit {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        .edit fieldset {
            border-radius: 10px;
        }

        .edit label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .edit input[type="text"],
        .edit input[type="password"],
        .edit input[type="date"],
        .edit textarea,
        .edit select {
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

        .edit input[type="file"] {
            margin-top: 5px;
        }

        .edit input[type="submit"] {
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

        .edit input[type="submit"]:hover {
            background-color: rgb(55, 156, 206);
            color: #fff;
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
      <a href="list-siswa.php">Logout</a>
    </div>
</div>
<div class="judul">
    <fieldset>
    <h3>Formulir Edit Siswa</h3>

    </fieldset>
    </div>
<div class="edit">

    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" value="<?php echo $siswa['username'] ?>" />
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" value="<?php echo $siswa['password'] ?>" />
            </p>
            <p>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </p>
            <p>
                <label for="foto">Foto:</label>
                <input type="file" name="foto" accept="image/*" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
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
