<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jib Poch Coffee Shop</title>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css') }}/style.css" rel="stylesheet">
    {{-- Sidebar Template .css --}}
    <link href="{{ asset('bootstrap-assets/sidebars') }}/sidebars.css" rel="stylesheet" />
    {{-- Font-awesome cnd --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-1 p-0">
                @include('partials.sidebar')
            </div>
            <div class="col-11 p-0">
                @include('partials.navbar')
            </div>
        </div> --}}
        @yield('content')

    </div>




    <link href="{{ asset('js') }}/script.js" rel="stylesheet">
    <!-- Template Javascript -->
    <script src="{{ asset('bootstrap') }}/js/bootstrap.bundle.min.js"></script>
    {{-- Sidebar Template .js --}}
    <script src="{{ asset('bootstrap-assets/sidebars') }}/sidebars.js"></script>


</body>

</html>
