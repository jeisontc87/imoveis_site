<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>din4_1</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


</head>

<body id="app-layout">
    @include('layouts._admin._nav')

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Home</a></li>
    </ul>
    </div>
    </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">SisAdmin</h5>

                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{ route('site.home') }}">Site</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2021 Site de Imoveis | CRECI 12345
                <a class="grey-text text-lighten-4 right" href="#!">JTC Sistemas WEB</a>
            </div>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous">
    </script>
    <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>


</html>
