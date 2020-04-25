<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT  id_penderita, nama_penderita FROM penderita 
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);

}
if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);
        
        $_SESSION['id_penderita'] = $data_login['id_penderita']; 
        //nilainya digunakan waktu insert peminjaman
        
        $_SESSION['nama_penderita'] = $data_login['nama']; 
        //nilainya bisa digunakan di navbar, mis. 'Hai, [nama_petugas]'

        header("Location: http://localhost/covid/member/check.php");
    }
    else
    {   
        header("Location: http://localhost/covid/member/check.php");
    }

?>