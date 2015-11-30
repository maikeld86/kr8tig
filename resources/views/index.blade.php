<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <Title>Kr8gtig</Title>
        <!-- de stylesheet van de kr8tig applicatie hier gebonden aan de meester pagina-->
        <link rel="stylesheet" href="/css/all.css">
    </head>
    <body>
        <div class="container">
            <!-- images in public map zetten-->
            <div class="title-heading-login">
                {!! Html::image('images/kr8tig.png', 'logo', array('class' => 'logo')) !!}
            </div>

            @yield('content')
        </div>

        <script src="/js/all.js"></script>
        @yield('footer')
    </body>
</html>