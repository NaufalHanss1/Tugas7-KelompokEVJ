<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--Css-->
    <link rel="stylesheet" href="{{ asset('dasboard_fikri/style.css') }}" />
    <link rel="stylesheet" href="../fikri.js">
    <!--AKHIR Css-->

    <!--js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- LOGO-->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- Akhir Logo-->
    <title>Catagory</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"                   
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg shadow p-2 ">
      <div class="container">
        <a class="navbar-brand mt-2" href="#">
          <img
          
            src="{{ asset('dasboard_fikri/gambar/logotelumart.png') }}"
            alt=""
            width="40"
            height="30"
            class="d-inline-block "
          
          />
          Telumart
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item" id="keranjang1">
              <a class="nav-link active" aria-current="page" href="#" 
                ><i 
                  id="keranjang"
                  class="bi bi-cart text-black me-2"
                  style="font-size: 25px"
                ></i
              ></a>
            </li>
           

            <li class="nav-item" id="profile1">
              <a class="nav-link active" aria-current="page" href="#"
                ><i
                  class="bi bi-person-circle text-black me-1"
                  style="font-size: 25px"
                ></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar-->

    <div class="container" >
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb mt-4">
          <li class="breadcrumb-item"><a href="{{route('catagory')}}">Dasboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catagory</li>
        </ol>
    </nav>

    <h1>Alat Tulis : </h1>

    <div class="container mt-3" id="produk">

      
      <div class="row">

        @foreach ($barang1 as $item1)
       
        <div class="col-lg-2 col-md-4 col-sm-4 col-6 " >
          <div class="card mt-2 " id="barang1">
            <img src="{{ asset('dasboard_fikri/gambar/'.$item1->foto_barang) }}" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">{{$item1->nama_barang}}</h5>
              <div class="icon-bintang" style="color: orange">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
              <p class="card-text">{{$item1->harga}}</p>
              <a href="#" class="btn btn-primary" >Beli</a>
            </div>
          </div>
        </div>

        @endforeach
     </div>
    </div>


</div>

    
    
        
    


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
