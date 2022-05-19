<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <section class="container-flud">
                <div class="row px-3">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ route('home') }}">Home</a>
                
                                            <a  class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            </a>
                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none nav-item">
                                                @csrf
                                            </form> 
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a  class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a  class="nav-link" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                    
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </header>
    </body>
</html>
