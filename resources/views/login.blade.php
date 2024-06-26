<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}

    <title>Đăng nhập</title>

    <style>
        .khung {
            display: flex;
            justify-content: center;
            align-items: centr;
            height: 100vh;
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
        }

        .boxlogin {
            height: 350px;
            max-width: 600px;
            min-width: 400px;
            background: white;
            display: block;
            padding: 20px;
            margin-top: 3cm;
            border-radius: 17px;
        }
    </style>
</head>

<body>
    <div class="khung">
        <div class="boxlogin">
            <h1 class="text-center text-success">Đăng nhập</h1>
            <form action="{{ route('website.dologin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <lable for="username">
                        <strong>Tên đăng nhập</strong>
                    </lable>
                    <input type="text" id="username" class="form-control" placeholder="Tên đăng nhập hoặc email"
                        name="username">
                </div>
                <div class="mb-3">
                    <lable for="password">
                        <strong>Mật khẩu</strong>
                    </lable>
                    <input type="password" id="password" class="form-control" placeholder="Mật khẩu" name="password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Đăng nhập</button>
                </div>  
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    @if (Session::has('message'))
        <script>
            toastr.options = {
                "processBar":true,
                "closeButton":true
            }
            toastr.error("{{ Session::get('message') }}");
        </script>
    @endif
</body>

</html>
