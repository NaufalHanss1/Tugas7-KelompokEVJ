<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Account</title>
    <link rel="stylesheet" href="profilestyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Informasi Profil Akun
        </h4>
        <form method="post" action = "/update/{{$profile_data->id}}" input type ="hidden"
         name="id" value="{{$profile_data->id}}">
        @csrf
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="picture/profile.png" alt class="d-block ui-w-80">
                                <label class="btn btn-outline-danger">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput" name="profile_image">
                                    </label> &nbsp;
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5" value=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" name="Username" value="{{$profile_data->Username}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$profile_data->name}}">
                                </div>
                                <div class = "form-group">
                                    <label class="form-label">NIM</label>
                                    <input type="string" class="form-control" name="nim" value="{{$profile_data->nim}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="Email" value="{{$profile_data->Email}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat/Address</label>
                                    <input type="text" class="form-control" name="address" value="{{$profile_data->address}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" name="birthday" value="{{$profile_data->birthday}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$profile_data->country}}">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$profile_data->phone}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" value="{{$profile_data->website}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>&nbsp;
        </div>
        </form>
        <button type="button" class="btn btn-danger" id="back">Back</button>
    </div>
    <script>
        $(document).ready(function() {
            $("#back").click(function() {
                window.location.href="Catagory"
            })
        })
    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    </script>
</body>
</html>