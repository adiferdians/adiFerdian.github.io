<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    {{-- Axios --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

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
                        <div class="frm">
                            <input type="text" class="form-control" autocomplete="off" id="user" placeholder="Username">
                        </div>
                        <div class="frm">
                            <input type="password" class="form-control" autocomplete="off" id="pass" placeholder="Password">
                        </div>
                        <div class="frm">
                            <button class="btn btn-primary" id="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
  // window.axios = require('axios');
  $(document).ready(function () {
    
    let submit = document.getElementById('submit');
    submit.addEventListener('click', function () {

            const username = document.getElementById('user').value;
            const password = document.getElementById('pass').value;

            axios.post('/auth', {
                username,
                password
                // captcha: captcha.val(),
                // captchaUuid: global_captchaObj.captchaUuid
            }).then(({ data }) => {
                // const date = new Date()
                // const minutes = 60
                // date.setTime(date.getTime() + (minutes * 60 * 1000))
                // if (data.OUT_STAT === 'T') {
                //     hideLoading()
                    window.location = `${window.appUrl}/`
                // } else {
                //     hideLoading()
                //     Swal.fire({
                //         title: 'Oops...',
                //         text: data.OUT_MESS,
                //         type: 'error',
                //         confirmButtonText: 'Ok'
                //     })
                // }
            }).catch(() => {
                // hideLoading()
            })
        });

    });

</script>

</html>
