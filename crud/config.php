<?php
/**
 * using mysqli_connact for database connection
 */

 $databaseHost  = 'localhost';
 $databaseName  = 'crud_db';
 $databaseUsername  = 'root';
 $databasePassword  = '';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
 if (mysqli_connect_error()) {
    echo "Koneksi database gagal: 
    " . mysqli_connect_error();
}

?>