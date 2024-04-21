<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Deskripsi Produk</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="resources/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="resources/css/style.css" />
        <!-- LOGO-->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
        <!-- Akhir Logo-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg shadow p-2">
            <div class="container">
                <a class="navbar-brand mt-2" href="#">
                    <img src="/storage/img/logotelumart.png" alt="" width="40" height="30" class="d-inline-block " />
                    Telumart
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <form class="d-flex" role="search" style="width: 800px">
                    <input id="sercing" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i id="keranjang" class="bi bi-cart text-black me-2" style="font-size: 25px"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-person-circle text-black me-1" style="font-size: 25px"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Akhir Navbar-->

        <div class="card mb-4 mt-4 ms-4 me-4" style="width: auto;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-8"><img src="data:image/png;base64, {{ base64_encode($deskripsi->gambar) }}" class="card-img-top" alt="Gambar"></div>
                    <div class="col-sm-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $deskripsi->nama_produk }}</h5>
                            <p class="card-text">Rp. {{ $deskripsi->harga_produk }}</p>
                            <p>
                                {{ $deskripsi->deskripsi }}
                            </p>
                            <table class="table table-borderless">
                                <tr>
                                    <th>Toko</th>
                                    <td>{{ $deskripsi->nama_toko }}</td>
                                </tr>
                                <tr>
                                    <th>Rating</th>
                                    <td>
                                        {{ $deskripsi->rating }}
                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                        <i class="fa-solid fa-star" style="color: orange;"></i>
                                        <i class="far fa-star" style="color: orange;"></i><br>
                                    </td>
                                </tr>
                            </table>
                            <div class="position-absolute bottom-0 end-0 mb-4 me-4">
                                <a href="#" class="btn btn-danger me-1" id="back">Back</a>
                                <a href="#" class="btn btn-primary" id="beli">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <hr>
        <footer class="bg-light text-black pt-5 pb-4 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Company Name</h5>
                        <p><i class="bi bi-instagram text-danger me-2"></i>Telkom University</p>
                        <p><i class="bi bi-twitter text-info me-2"></i>Telkom University</p>
                        <p><i class="bi bi-instagram text-danger me-2"></i>TelUmart</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Pembuat</h5>
                        <p><a href="#" class="text-black" style="text-decoration: none">Fikri Fadhil Mustofa <br>(1302210053)</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Hasnan Husaini <br>(1302210100)</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Ariel Pabibak Pali' Mallua' <br>(1302210128)</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Andi Erlangga Sulistyo Hasan Bhakti <br>(1302213077)</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Rafi Alimudin <br>(1302210060)</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Hermawan Saputra <br>(1302213080)</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>
                        <p><a href="#" class="text-black" style="text-decoration: none">Your Account</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Become an Affiliate</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Shipping Rates</a></p>
                        <p><a href="#" class="text-black" style="text-decoration: none">Help</a></p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                        <p><i class="bi bi-house-door-fill me-2"></i>Bojongsoang Park</p>
                        <p><i class="bi bi-envelope-open-fill me-2"></i>tubes@gmail.com</p>
                        <p><i class="bi bi-telephone-fill me-2"></i>+62 8211127323</p>
                        <p><i class="bi bi-printer-fill me-2"></i>+01 335 633 77</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="resources/js/code.jquery.com_jquery-3.7.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="resources/fontawesome/js/all.min.js"></script>
        <script>
            $(document).ready(function() {
                // body...
                $("#back").click(function() {
                    window.location.href = "../dasboard_fikri/index.html"
                })

                $("#beli").click(function() {
                    window.location.href = "../keranjang_rapi/homepage.html"
                })
            })
        </script>
    </body>

    </html>
</div>