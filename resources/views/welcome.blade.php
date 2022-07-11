<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
      body a {
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #29537A;">
  <div class="container py-2">
    <a class="navbar-brand" href="#">
      <img src="images/2.png" alt="logo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tutorial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- navbar --}}

{{-- isi --}}
<div class="container-fluid" style="background-color: #29537A;">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="mt-5">Mulai Belajar Python</h1>
    </div>
    <div class="col-md-12 mt-3">
      Python adalah bahasa pemrograman yang memungkinkan Anda bekerja
      <br> 
      lebih cepat dan mengintegrasikan sistem Anda lebih
      efektif.
    </div>
    <div class="col-md-12 mt-5 mb-5">
      <button type="button" class="btn btn-primary ">Large button</button>
    </div>
    <div class="col-md-12 mt-5 mb-5">
      <img src="images/1.png" alt="bg" class="img-fluid">
    </div>
  </div>

  <!-- <div class="row mt-5 mb-5" style="background-color: #29537A;"">

  </div> -->
</div>
</div>

<div class="container-fluid py-5">
  <div class="container py-5">



    <div class="row">
      <div class="col-md-4 text-center">
          <img src="images/a.png" alt="aa" class="img-fluid">
        <h1>Ikuti Tutorial</h1>
       <p>Mulai belajar bahasa pemrograman python dari
          tingkat dasar dengan tutorial yang dikhususkan
          untuk pemula agar lebih cepat mempelajari bahasa pemrograman python</p>
      </div>

      <div class="col-md-4 text-center">
        <img src="images/b.png" alt="aa" class="img-fluid">
        <h1>Baca Artikel</h1>
        <p>Baca artikel terbaru dan terpopuler tentang bahasa 
           pemrograman python dengan beragam topik. Artikel dibuat 
           oleh komunitas dan ditujukan untuk komunitas</p>
      </div>

      <div class="col-md-4 text-center">
        <img src="images/c.png" alt="aa" class="img-fluid">
        <h1>Ajukan Pertanyaan</h1>
        <p>Ajukan setiap pertanyaan yang anda temui 
           tentang bahasa pemrograman python. Setiap orang di 
           komunitas akan segera menyelesaikan setiap pertanyaan pengguna</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-5" style="background-color: #E9EEF2;">
  <div class="container justify-content-center">
    <div class="row">
        <div class="col-md-12 text-center my-3">
          <h2>Artikel Pilihan</h2>
        </div>
      </div>
    <div class="row">
      <div class="col-md-4">
        <a href="#">
        <div class="card" style="width: 18rem;">
          <img src="images/d.png" class="card-img-top" alt="aa">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
            </a>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <a href="#">
        <div class="card" style="width: 18rem;">
          <img src="images/d.png" class="card-img-top" alt="aa">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            </a>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <a href="#">
          <img src="images/d.png" class="card-img-top" alt="aa">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>
            </a>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center mt-5">
        <a href="#">
          <b><p>LIHAT SEMUA ARTIKEL</p></b>
        </a>
      </div>
    </div>
  </div>
</div>
{{-- isi --}}

<footer>
  <!-- <div class="container-fluid" style="background-color: #D4DDE6;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 my-3">
          <ul>
            <li style="list-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg></li>
            <li style="list-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-github"
              viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg></li>
          </ul>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div> -->

  <nav class="navbar navbar-expand-lg" style="background-color: #D4DDE6;">
    <div class="container py-2">
      <a class="navbar-brand" href="#">
        <img src="images/2.png" alt="logo" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tutorial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</footer>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

