<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buat query untuk mengambil data username dan password dari database
    $sql = "SELECT * FROM calon_siswa WHERE username='$username' AND password='$password'";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // Cek hasil query
    if ($siswa) {
        // Jika username dan password ditemukan, redirect ke list-siswa-admin.php
        header('Location: project.php');
        exit();
    } else {
        // Jika username atau password salah, tampilkan pesan error
        $error = 'Username atau Password salah';
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
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

            .section-1 {
                background-image: url('https://sman55jakarta.sch.id/wp-content/uploads/2023/05/DSC03582-scaled.jpg');
                background-size: cover;
                font-family: 'Poppins', sans-serif;
                background-position: center;
                height: 665px;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                margin-top: 80px;
            }

            .container {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.9);
                border: 1px solid #ddd;
                margin-top: 50px;
                text-align: center;
                border-radius: 10px;
            }

            .container fieldset {
                border-radius: 10px;
                padding: 20px;
            }


            .khususbutton label {
                display: block;
                margin-bottom: 10px;
                text-align: center;

            }

            .khususbutton input[type="text"],
            .khususbutton input[type="password"]{
                width: 100%;
                font-family: 'Poppins', sans-serif;
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #ccc;
                font-size: 16px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                background-color: #f7f7f7;
                width: 200px;
                text-align: center;


            }

            .error {
                color: red;
                margin-bottom: 10px;
            }

            .container label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;

            }

            .button-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 250px;
            }

            .buttonlogin {
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
                margin: 15px;
            }

            .buttonlogin:hover,
            .buttonlogin:focus {
                background-color: rgb(55, 156, 206);
                color: #fff;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #333;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            .logo {
                margin-bottom: 20px;
            }
    
    </style>
</head>
<body>
<div class="navbar">
    <a href="http://localhost/Tugas16/index.php" class="navbar-logo">
      <img src="LOGO-SMAN-55-JAKARTA.jpg" alt="Logo">
    </a>
    <div class="navbar-menu">
      <a href="index.php">Kembali</a>
    </div>
</div>   
<section class="section-1">
        <div class="container">
            <fieldset>
                <img src="LOGO-SMAN-55-JAKARTA.jpg" alt="Logo" class="logo" height="80" width="160">
                <h3>Login Siswa</h3>

                <?php if (isset($error)): ?>
                    <p class="error"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="khususbutton">
                    <form method="POST">
                        <label for="id">Username:</label>
                        <input type="text" id="username" name="username" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>

                        <input class="buttonlogin" type="submit" value="Login">
                    </form>
                </div>
            </fieldset>
        </div>
    </section>
</body>
</html>
