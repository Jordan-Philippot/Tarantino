<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'my_website') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Rye&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Notable&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ route('home') }}"> -->
                <!-- Tarantino
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item hover-this">
                            <a class="nav-link" href="{{ route('welcome') }}">{{ __('Accueil') }}</a>
                        </li>
                        <li class="nav-item hover-this">
                            <a class="nav-link" href="{{ route('biographie') }}">{{ __('Biographie') }}</a>
                        </li>
                        <li class="nav-item hover-this">
                            <a class="nav-link" href="{{ route('filmographie') }}">{{ __('Filmographie') }}</a>
                        </li>
                        <li class="nav-item dropdown hover-this">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{_('Bonus') }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('contact') }}">{{ __('Bonus') }}</a>
                                <a class="dropdown-item" href="{{ route('contact') }}">{{ __('Source') }}</a>
                                <a class="dropdown-item" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                            </div>
                        </li>
                        <div class="cursor"></div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item hover-this">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item hover-this">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown hover-this">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('show') }}">{{ __('Profil') }}</a>
                                <a class="dropdown-item" href="{{ route('edit') }}">{{ __('Modifier') }}</a>
                                <a class="dropdown-item" href="{{ route('delete') }}">{{ __('Supprimer') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div id="myCarousel" class="carousel slide border" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="{{ route('home') }}"><img class="d-block w-100" src="{{ asset('images/django.jpg') }}" alt="Hateful Eight"></a>
                                <div class="carousel-caption d-none d-sm-block">
                                    <h2>QUENTIN TARANTINO</h2>
                                    <small>
                                        Directeur, Scénariste, Acteur, Ecrivain...
                                    </small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('biographie') }}"><img class="d-block w-100" src="{{ asset('images/photographe.jpg') }}" alt="Quentin Tarantino"></a>
                                <div class="carousel-caption d-none d-sm-block">
                                    <h2>BIOGRAPHIE</h2>
                                    <small>
                                        De ses débuts au succès international actuel.
                                    </small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('filmographie') }}"><img class="d-block w-100" src="{{ asset('images/portrait.jpg') }}" alt="Quentin Tarantino Caméra"></a>
                                <div class="carousel-caption d-none d-sm-block">
                                    <h2>FILMOGRAPHIE</h2>
                                    <small>
                                        Trouvez ici la totalité de ses oeuvres cinématographique et littéraire.
                                    </small>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('contact') }}"><img class="d-block w-100" src="{{ asset('images/dimmick.jpg') }}" alt="Jimmie Dimmick"></a>
                                <div class="carousel-caption d-none d-sm-block">
                                    <h2>CONTACT</h2>
                                    <small>
                                        Contactez l'agence de production A band apart.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>


        <main class="py-4">
            @yield('content')
        </main>


        <!--_____________   Footer  _____________ -->
        <footer class="container-fluid bg-dark">
            <ul>
                <li class="col-sm-2">
                    <p>&copy; 2020 Jordan Philippot</p>
                </li>
                <li class="col-sm-2"><a href="https://web.facebook.com/QuentinTarantinoDirector/?_rdc=1&_rdr">Facebook</a></li>
                <li class="col-sm-2"><a href="https://www.twittter.com/quentarantino?lang=en">Twittter</a></li>
                <li class="col-sm-2"><a href="https://instragram.com/tarantinoxx/?hl=en">Instragram</a></li>
                <li class="col-sm-2"><a href="https://www.amazon.fr/s?k=quentin+tarantino&__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&ref=nb_sb_noss_2">Amazon</a></li>
            </ul>
        </footer>
    </div>



    @yield('extra-js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>
</body>

</html>