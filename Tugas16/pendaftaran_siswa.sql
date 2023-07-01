DROP DATABASE IF EXISTS pendaftaran_siswa;
CREATE DATABASE pendaftaran_siswa;
USE pendaftaran_siswa;

CREATE TABLE calon_siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(64) NOT NULL,
    nama VARCHAR(64) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(255) NOT NULL,
    agama VARCHAR(20) NOT NULL,
    sekolah_asal VARCHAR(64) NOT NULL,
    foto VARCHAR(255) NOT NULL
);
