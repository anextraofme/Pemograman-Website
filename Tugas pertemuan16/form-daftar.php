<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h3 {
            margin: 0;
        }

        .logo {
            order: 1;
            margin-left: auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea,
        select {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<header>
    <h3>Formulir Pendaftaran Siswa Baru</h3>

</header>
<form action="proses-pendaftaran.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap"/>
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah"/>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar"/>
        </p>
    </fieldset>
</form>
</body>
</html>
