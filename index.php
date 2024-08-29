<?php
 require "koneksi.php";

 $queryproduk = mysqli_query($con,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 20");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko online home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php require "navbar.php"; ?>
    <!-- banner -->
    <div class="container-fluid banner2 d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>toko online fashion</h1>
            <h3>Mau cari apa</h3>
           <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="masukkan nama produk" 
                        aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna2">cari</button>
                    </div>
                </form>    
           </div>
        </div>
    </div>

<!-- kategori-->
 <div class="container-fluid py-5">
    <div class="container text-center">
            <h3>Kategori terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                        <h3 class="text-white"><a class="no-decoration" href="produk.php?kategori=baju pria">Baju peria</a></h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-wanita  d-flex justify-content-center align-items-center">
                        <h3 class="text-white"><a class="no-decoration" href="produk.php?kategori=baju wanita">baju wanita</a></h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-sepatu  d-flex justify-content-center align-items-center">
                        <h3 class="text-white"><a class="no-decoration" href="produk.php?kategori=sepatu">sepatu</a></h3>
                    </div>
                </div>
            </div>
    </div>
 </div>

 <!-- tentang kami-->
  <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3 >Tentang kami</h3>
            <p class="fs-5 mt-">Anda mungkin pernah mendengar bahwa situs web Anda membutuhkan halaman yang menjelaskan merek Anda. Mungkin mereka pelatih dari kursus bisnis populer atau teman Anda pengusaha yang mengatakan itu. Tetapi apakah mereka memberi tahu Anda apa sebenarnya yang harus ditulis? Jika tidak, kami tidak akan meninggalkan Anda dalam masalah. Jika mereka melakukannya, kami punya sesuatu untuk ditambahkan. Dalam artikel ini, kami akan memberikan contoh halaman Tentang kami dan menjelaskan keunggulan masing-masing halaman tersebut. Kami juga akan memberi tahu di mana Anda bisa mendapatkan template untuk membuat halaman Anda sendiri dengan cepat.</p>
        </div>
  </div>
  <!-- produk-->
  <div class="container-fluid  py-5">
        <div class="container text-center">
            <h3 >Produk</h3>
               <div class="row mt-5">
               <?php while($data= mysqli_fetch_array($queryproduk)){?>
                <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                                 <img src="image/<?php echo $data['foto'];?>" class="card-img-top" alt="...">
                            </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data['nama'];?></h4>
                                    <p class="card-text text-truncate"><?php echo $data['detail'];?></p>
                                    <p class="card-text text-harga"><?php echo $data['harga'];?></p>
                                    <a href="produk-detail.php?nama=<?php echo $data['nama'];?>" class="btn warna2 text-white">Lihat Detail</a>
                                </div>
                     </div>
                </div>
                <?php }?>
            </div>
            <a href="produk.php" class="btn btn-outline-warning mt-3 p-3 fs-5">see more</a>
        </div>
  </div>

  <!--footer-->
  <?php require "footer.php"; ?>

   

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>