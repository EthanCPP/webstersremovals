<!DOCTYPE html>
<html>
    <head>
        <title>Admin | Websters Removals & Storage</title>

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- External -->
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="/css/home/main.css" />

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <nav class="w-nav navbar navbar-expand-lg navbar-light">
            <a class="w-logo navbar-brand" href="/admin">Websters Removals</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="w-link nav-link" href="/login">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="w-link nav-link" href="/admin">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="w-link nav-link" href="/">Site Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="w-link nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        @yield('banner-image')

        <div class="container" style="margin-top: 80px;">
            @yield('content')
        </div>

        @yield('full-view')

        <div class="container">
            <br /><br />
            <hr />
            <div class="d-md-flex justify-content-between">
                <div>
                    Copyright &copy; Websters Removals Ltd {{ date("Y") }}. All Rights Reserved.
                    <br />
                    Built and managed by Ethan Webster | <a href="http://ethan-webster.com/" target="_blank">ethan-webster.com</a>
                </div>
            </div>
        </div>

        <br /><br />

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/64a4d46fd3.js" crossorigin="anonymous"></script>

        <script src="/js/home/main.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    </body>
</html>

