<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'covid_19');

/**
 * $dbconnect : koneksi kedatabase
 */
$connect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($connect->connect_error) {
    die('Database Not Connect. Error : ' . $connect->connect_error);
}