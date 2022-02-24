<?php

function cari($keyword){
    $koneksi = mysqli_connect('localhost', 'root', '', 'shoes');

    $query = "SELECT * FROM produk WHERE nama_produk LIKE '%keyword%'";

    return mysqli_query($koneksi,$query);
}
?>