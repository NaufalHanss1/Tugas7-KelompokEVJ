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
    <div class="wrapp">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="" alt="">
                </div>
                <div class="col-md-6 right">
                    <header>Lupa Password</header>
                    <div class="input-field">
                        <input type="text" class="input" name="Email" value="{{old('Email')}}">
                        <label for="email">Email</label>
                        <span class="text-danger">@error('Email') {{$message}} @enderror</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>