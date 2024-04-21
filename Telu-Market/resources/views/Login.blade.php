<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeluMart</title>
    <link rel="stylesheet" href="{{ asset('view2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- main container untuk page nya -->
    <div class="wrapp">
        <div class="container main">

            <!-- row untuk dua kolom: side image dan login form  -->
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="" alt="">
                </div>

                <!-- kolom login form -->
                <div class="col-md-6">
                    <!-- form user login -->
                    <form action="{{route('login-user')}}" method="post">
                        @csrf
                        <div class="input-box d-flex flex-column justify-content-center">
                            <div class="tempatLogin">

                                <!-- header  -->
                                <header>Login</header>

                                <!-- input field email untuk login -->
                                <div class="input-field">
                                    <input type="text" class="input" name="Email" value="{{old('Email')}}">
                                    <label for="email">Email</label>
                                    <span class="text-danger">@error('Email') {{$message}} @enderror</span>
                                </div>

                                <!-- input field password untuk login -->
                                <div class="input-field">
                                    <input type="password" class="input" name="Password" value="{{old('Password')}}">
                                    <label for="password">Password</label>
                                    <span class="text-danger">@error('Password') {{$message}} @enderror</span>
                                </div>

                                <!-- menampilkan success & fail allert -->
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                <div class="alert alert-danfer">{{Session::get('fail')}}</div>
                                @endif

                                <!-- tombol submit untuk signin -->
                                <button type="submit" class="btn btn-primary">Sign In</button>
                                <br>

                                <!-- link untuk ke page registrasi jika belum punya akun -->
                                <a href="registration">belum punya akun? buat akun</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>