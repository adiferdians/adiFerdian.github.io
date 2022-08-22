<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('/assets/css/auth.css') }}" rel="stylesheet">
</head>
<body>
    <div class="content" style="padding-top: 40vh; padding-left: 40%">
        <div class="row">
          <div class="col-lg-3" style="min-width: 400px;">
            <div class="card card-stats">
              <div class="card-body">
                <form class="login" action="{{URL::asset('/auth')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="frm">
                        <input type="text" class="form-control" name="user" placeholder="Username">
                    </div>
                    <div class="frm">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                    <div class="frm">
                        <button class="btn btn-primary">Login</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>