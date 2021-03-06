<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <Title>Kr8gtig</Title>
        <!-- de stylesheet van de kr8tig applicatie hier gebonden aan de meester pagina-->
        <link rel="stylesheet" href="/css/all.css">
    </head>
    <body>

        <div class="nav-container col-md-2">
            @include('partials._nav')
        </div>
        <div class="container col-md-10">
            <h1 class="title-heading">Kr<span class="acht">8</span>gtig</h1>
            @yield('content')
        </div>

        <script src="/js/all.js"></script>
        @yield('footer')
    </body>
</html>