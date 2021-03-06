<?php 
// HALAMAN INSERT DATA

// koneksi ke function
require "fungsi.php";

// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "shoes");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    //cek data apakah berhasil ditambahkan atau tidak dikarenakan php tidak memberikan pesan kesalahan di web. Menggunakan mysqli_affected_rows({koneksi}).
    if(tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='index.php';
        </script>";
    } else {
        echo "Gagal <br>";
        mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <!-- judul halaman tambah data -->
    <h1>Tambah Data</h1>

    <!-- membuat form -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Nama">Nama: </label>
                <input type="text" name="nama_produk" id="Nama" required>
            </li>
            <li>
                <label for="NIM">Desk: </label>
                <input type="text" name="deskripsi" id="NIM" required>
            </li>
            <li>
                <label for="Jurusan">Harga: </label>
                <input type="text" name="harga" id="Jurusan" required>
            </li>
            <li>
                <label for="Jurusan">Warna: </label>
                <input type="text" name="warna" id="Jurusan" required>
            </li>
            <li>
                <label for="Jurusan">Ukuran: </label>
                <input type="text" name="ukuran" id="Jurusan" required >
            </li>
            <li>
                <label for="Gambar">Gambar: </label>
                <input type="file" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali</a>
</body>
</html>