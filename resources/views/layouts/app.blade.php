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
    <link rel="stylesheet" href="https . {{ asset("css/main.css") }}">
{{--    Scripts--}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <title>Hermes Game Aggragator</title>

</head>
<body class="bg-black text-white">
{{--<div id="mdb-preloader" class="flex-center mt-5">--}}

{{--</div>--}}
<header class="border-gray-800">
    <nav class="container mx-auto flex items-center justify-between px-4 py-6 flex-col lg:flex-row">
        <div class="flex flex-col lg:flex-row items-center">
            <a href="/">
                <img
                    style="width: 60px;"
                    src="{{ asset('img/logo.png') }}"
                    alt="hermes"
                    class="flex-none lg:pb-0 sm:pb-16">
            </a>
            <ul class="flex ml-0 lg:ml-16 lg:pl-10 space-x-6">
                <li><a href="" class="hover:text-gray-600 font-bold uppercase">Games</a></li>
                <li><a href="" class="hover:text-gray-600 font-bold uppercase">Reviews</a></li>
                <li><a href="" class="hover:text-gray-600 font-bold uppercase">Coming Soon</a></li>
            </ul>
        </div>

        <div class="flex items-center mt-6 lg:mt-0">
            <livewire:search-dropdown />
                <div class="ml-6">
                    <a href="#"><img src="{{ asset('img/svg/avatar.svg') }}" alt="avatar" class="rounded-full w-8"></a>
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

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

<livewire:scripts>
</body>
</html>
