<?php

// user pass database
$db_host = 'mysql';
$db_user = 'root';
$db_pass = 'root123';
$db_name = 'db_perpustakaan';

// mematikan error reporting untuk mysqli
// mysqli_report(MYSQLI_REPORT_OFF);

// membuat koneksi
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// error handling
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
