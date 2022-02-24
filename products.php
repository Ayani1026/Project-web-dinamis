<?php
// require "fungsi_search.php";

// if (isset($_POST["carii"])) {
//     $row = cari($_POST["keyword"]);
// }

if (isset($_POST["keranjangg"])) {
    echo "
        <script>
            alert('data masuk keranjang');
        </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="css/products.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background-color:#F8DDE2;
        }
    </style>
</head>


<body>
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-2 offset-1 navbar text-center">
                <img src="assets/logox.png" width="31px">
            </div>

            <div class="col-md-1 offset-md-4 navbar">
                <h5><a style="text-decoration: none; color: white; font-size: 15px; " href="index.php">Homepage</a></h5>
            </div>

            <div class="col-md-1 navbar">
                <h5><a style="text-decoration: none; color: white; font-size: 15px; font-weight:bold;" href="products.php">Products</a></h5>
            </div>

            <div class="col-md-1 navbar">
                <h5><a style="text-decoration: none; color: white; font-size: 15px;" href="Contact_Us.php">Contact Us</a></h5>
            </div>


            <div class="col-md-1 cari">
                <form action="" method="post">
                    <input type="text" id="" name="keyword" class="form-control" placeholder="Serach..." aria-label="Search" />
                    <button type="submit" name="carii" style="display: none;">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-2 tambah">
        <div class="row">
            <div class="col tambahh" style="margin-top:1%; text-align:right; margin-right:35px">
            <button type="button" class="btn btn-info border-0" style="border-radius:14px; font-size:14px;height: 40px; width: 100px;"><a href="tambah.php" style="text-decoration: none; color:white">tambah</a></buttnon>
            </div>
        </div>
    </div>
    <!-- konek data base -->
    <?php
    include_once("data/connect.php");
    $no = 1;
    $hasil = mysqli_query($mysqli, "SELECT * from produk");

    ?>

    <?php while ($row = mysqli_fetch_assoc($hasil)) : ?>

        <div class="container-fluid mt-4 isi">
            <div class="row" style="margin-left:2%;margin-right:2%">
                <div class="col navbar" style="background-color:white; height:190px; border-radius:16px">
                    <img src="./img/<?= $row['Gambar']; ?>" width="20%">
                    <div class="col judul" style="margin-top:-1%">
                        <a style="font-size: 25px; font-weight:bold;"><?= $row['nama_produk'] ?></a>

                        <div class="row">
                            <div class="col-8 deskrip" style="margin-top:1%;">
                                <a><?= $row['deskripsi'] ?></a>
                            </div>
                            <div class="col harga" style="margin-top:-1%;text-align: center;">
                                <a><?= $row['harga'] ?></a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 warna" style="margin-top:3%">
                                <a>Warna : <?= $row['warna'] ?></a>
                            </div>
                            <div class="col-md-6 ukuran" style="margin-top:3%">
                                <a>ukuran : <?= $row['ukuran'] ?></a>
                            </div>

                            <div class="col-md-2 edit" style="margin-top:2%; text-align:center;">
                                <form method="post">
                                    <!-- <button type="button" name="keranjangg" class="btn btn-primary border-0" style="border-radius:14px; font-size:15px ;height: 32px; width: 100px;">Cart</button> -->
                                    <button type="button" class="btn btn-primary border-0" style="border-radius:14px; font-size:14px;height: 35px; width: 90px;"><a href="update.php?id=<?= $row["id_produk"]; ?>" style="text-decoration: none; color:white">edit</a></button>
                                </form>
                            </div>
                            


                            <div class="col-md-1 hapus" style="margin-top:2%; text-align:center;">
                                <form method="post">
                                    <!-- <button type="button" name="keranjangg" class="btn btn-primary border-0" style="border-radius:14px; font-size:15px ;height: 32px; width: 100px;">Cart</button> -->
                                    <button type="button" class="btn btn-success border-0" style="border-radius:14px; font-size:14px;height: 35px; width: 90px;"><a href="delete.php?id=<?= $row["id_produk"]; ?>" style="text-decoration: none; color:white">hapus</a></button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    <?php endwhile ?>




    <!--  -->


    <div class="container-fluid barang">
        <div class="row">
            <div class="col navbar text-center">
                <img src="">
            </div>
        </div>
    </div>
</body>

</html>