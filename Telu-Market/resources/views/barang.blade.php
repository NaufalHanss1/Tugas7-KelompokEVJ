<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
<body>
<nav class="navbar navbar-expand-lg shadow p-2">
            <div class="container">
                <a class="navbar-brand mt-2" href="#">
                    <img src="logotelumart.png;base64" width="40" height="30" class="d-inline-block">Telumart</a>
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

                <form class="d-flex" role="search" style="width: 800px">
                    <button class="btn btn-danger" type="button" onclick="searchFunction()"><i class="bi bi-search"></i></button>
                </form>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i
                                    id="keranjang"
                                    class="bi bi-cart text-black me-2"
                                    style="font-size: 25px"
                                ></i>
                            </a>
                        </li>
                        <li class="nav-item mt-2 me-2">
                            <button type="button" class="btn btn-outline-danger">Login</button>
                        </li>
                        <li class="nav-item mt-2 me-4">
                            <button type="button" class="btn btn-danger">Register</button>
                        </li>
                        <li class="nav-item">
                            <a class a class="nav-link active" aria-current="page" href="#">
                                <i
                                    class="bi bi-person-circle text-black me-1"
                                    style="font-size: 25px"
                                ></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <div class="container mt-5">
        <!-- Bagian Search -->
        <nav class="navbar navbar-light mb-3">
            <form class="input-group" action="{{ url('/barang/search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i>
            </form>
        </nav>

        <table class="table table-bordered table-striped mx-auto">
            <thead class="thead-dark">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>
                        @if ($barang->foto)
                            <img src="data:image/png;base64,{{ base64_encode($barang->foto) }}" alt="Foto Barang" style="max-width: 100px;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td align="center">
                        <a href="{{ route('barang.detail', $barang->id) }}" class="btn btn-warning">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $barangs->links() }}
    </div>

    <hr style="margin-top: 50px;">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
</style>
