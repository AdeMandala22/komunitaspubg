<?php
// Panggil koneksi database.php untuk koneksi database
require_once "assets/konektor.php";

if ($_GET['act']=='insert') {
    if (isset($_POST['submit'])) {
        // ambil data hasil submit dari form
        $nama     = mysqli_real_escape_string($konektor, trim($_POST['nama']));
        $email    = mysqli_real_escape_string($konektor, trim($_POST['email']));
        $komentar = mysqli_real_escape_string($konektor, trim($_POST['komentar']));

        // perintah query untuk menyimpan data ke tabel nelayan
        $query = mysqli_query($konektor, "INSERT INTO diskusi(nama,email,komentar)
                                        VALUES('$nama','$email','$komentar')")
                                        or die('Ada kesalahan pada query insert : '.mysqli_error($konektor));    

        // cek query
        if ($query) {
            // jika berhasil tampilkan pesan berhasil simpan data
            header("location:diskusi.php");
        }   
    }   
}    
?>