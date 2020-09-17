<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Hermes Game Aggragator</title>
    <style>
        #main {
            display: none;
        }
    </style>
</head>
<body class="bg-black text-white">
<div id="mdb-preloader" class="flex-center mt-5">
    <div id="preloader-markup">
        <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>
<header class="border-gray-800">
    <nav class="container mx-auto flex items-center justify-between px-4 py-6 flex-col lg:flex-row">
        <div class="flex flex-col lg:flex-row items-center">
            <a href="/">
                <img
                    style="width: 60px;"
                    src="{{ asset('img/logo.png') }}"
                    alt="hermes"
                    class="flex-none pb-5 lg:pb-0">
            </a>
            <ul class="flex ml-0 lg:ml-16 space-x-6">
                <li><a href="" class="hover:text-gray-600">Games</a></li>
                <li><a href="" class="hover:text-gray-600">Reviews</a></li>
                <li><a href="" class="hover:text-gray-600">Coming Soon</a></li>
            </ul>
        </div>

        <div class="flex items-center mt-5 lg:mt-0">
            <div class="relative">
                <input class="pl-5 bg-gray-800 text-sm px-3 py-1 w-64 focus:outline-none focus:shadow-outline"
                       type="text" placeholder="Search...">
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24">
                        <path class="heroicon-ui"
                              d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
                    </svg>
                </div>
            </div>
            <div class="ml-6">
                <a href="">
                    <img class="rounded-full w-8" src="{{ asset('img/svg/005-user.svg') }}" alt="avatar">
                </a>
            </div>
        </div>
    </nav>
</header>
<main id="main" class="p-8">

    @yield('content')
</main>
<footer class="border-t border-black">
    <div class="container mx-auto px-4 py-6 text-gray-500">
        <p>
            Powered By
            <a href="" class="underline hover:text-red-800">
                IGDB API
            </a>
        </p>
        <p>
            Icons made by
            <a href="https://www.flaticon.com/authors/freepik" title="Freepik">
                Freepik
            </a>
            from <a class="hover:text-red-800" href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com
            </a>
        </p>
    </div>
</footer>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
    $(window).on('load', function () {
        $('#mdb-preloader').delay(2000).fadeOut(300, function () {
            $('#main').fadeIn();
        });
    });
</script>
</body>
</html>
