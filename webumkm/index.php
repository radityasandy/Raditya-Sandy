<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"/>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <style>
      /* Apply the Courgette font */
      body {
        font-family: 'Courgette', cursive;
      }

      .navbar-brand, .nav-link {
        font-family: 'Courgette', cursive;
      }
      
      /* Custom CSS to adjust spacing */
      .custom-search-form {
        margin-top: 0.5rem; /* Adjust this value as needed */
      }
      .custom-search-input {
        margin-right: 0.5rem; /* Adjust this value as needed */
      }

      .carousel-container {
        margin-top: 5rem; /* Adjust this value to control the spacing */
      }
    </style>
    <title>Web Umkm</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
        <!-- Navbar brand with icon -->
        <a class="navbar-brand" href="#">
          <i class="fas fa-shopping-cart"></i>
          <span class="ml-2 font-weight-bold">Toko UMKM</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Checkout</a>
            </li>
          </ul>
          <form class="d-flex custom-search-form">
            <input class="form-control me-2 custom-search-input" type="search" placeholder="ketik disini" aria-label="search">
            <button class="btn btn-outline-success" type="submit">cari</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container carousel-container">
      <div class="row">
        <div class="col-md-3">
          <div class="bg-light p-3">
          <ul class="list-group list-group-flush">
              <li class="list-group-item bg-warning">
                <i class="fas fa-list"></i> KATEGORI BARU
              </li>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Handphone
                </li>
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Laptop
                </li>
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Elektronik
                </li>
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Aksesoris HP
                </li>
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Aksesoris Laptop
                </li>
                <li class="list-group-item">
                  <i class="fas fa-angle-right"></i> Aksesoris Elektronik
                </li>
              </ul>
            </ul>
          </div>
        </div>
      <div class="col-md-9">
         <!-- Carousel di samping kiri menu -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
              <img src="slider/slide1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src="slider/slide2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="slider/slide3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>
  <div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk1.jpg" class="card-img-top" alt="Produk 1">
        <div class="card-body">
          <h5 class="card-title">Produk 1</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk2.jpeg" class="card-img-top" alt="Produk 2">
        <div class="card-body">
          <h5 class="card-title">Produk 2</h5>
          <p class="card-text">Rp.150.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk3.jpg" class="card-img-top" alt="Produk 3">
        <div class="card-body">
          <h5 class="card-title">Produk 3</h5>
          <p class="card-text">Rp.150.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk4.jpg" class="card-img-top" alt="Produk 4">
        <div class="card-body">
          <h5 class="card-title">Produk 4</h5>
          <p class="card-text">Rp.150.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk5.jpeg" class="card-img-top" alt="Produk 5">
        <div class="card-body">
          <h5 class="card-title">Produk 5</h5>
          <p class="card-text">Rp.120.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk6.jpeg" class="card-img-top" alt="Produk 6">
        <div class="card-body">
          <h5 class="card-title">Produk 6</h5>
          <p class="card-text">Rp.130.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk7.jpg" class="card-img-top" alt="Produk 7">
        <div class="card-body">
          <h5 class="card-title">Produk 7</h5>
          <p class="card-text">Rp.110.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card product-card">
        <img src="produk/produk8.jpg" class="card-img-top" alt="Produk 8">
        <div class="card-body">
          <h5 class="card-title">Produk 8</h5>
          <p class="card-text">Rp.140.000</p>
          <a href="#" class="btn btn-danger">Beli</a>
          <a href="#" class="btn btn-info">Detail</a>
        </div>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</div>

   
  </div>
  <!-- Tambahkan lebih banyak kartu produk di sini -->
</div>
<footer class="bg-dark text-white p-5">
<div class="row">
<div class="col-md-3">
    <h5>LAYANAN PELANGGAN</h5>
<ul>
      <li>Pusat Bantuan</li>
      <li>Cara Pembelian</li>
      <li>Pengiriman</li>
      <li>Cara Pengembalian</li>
</ul>
</div>
<div class="col-md-3">
    <h5>TENTANG KAMI</h5>
    <p>Kami adalah Toko Online terpercaya....
</div>
<div class="col-md-3">
    <h5>MITRA KERJASAMA</h5>
<ul>
    <li>Gojek</li>
    <li>Grab</li>
    <li>Maxim</li>
</ul>
</div>
<div class="col-md-3">
    <h5>HUBUNGI KAMI</h5>
<ul>
    <li>08123456578</li>
    <li>cs@toko_saya.com</li>
</ul>
</div>
</div>
</footer>
<div class="copyright text-center font-weight-bold p-2 bg-warning">
  <p>Copyright <i class="far fa-copyright"></i>2022 by RPL SMK PGRI 2 Ponorogo</p>
</div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
