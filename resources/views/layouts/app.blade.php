<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Upacara Bendera 17 Agustus 2018</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">
        <style>
            .row {
                margin-bottom : 15px;
            }
        </style>
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">

         <!-- Notie -->
         <link href="{{ asset("/assets/plugins/notie/notie.min.css")}}" rel="stylesheet" type="text/css"/>
    </head>
    <body class="o-page">
        @include('layouts.sidebar')
        <main class="o-page__content">
                <header class="c-navbar u-mb-medium">
                    <button class="c-sidebar-toggle u-mr-small">
                        <span class="c-sidebar-toggle__bar"></span>
                        <span class="c-sidebar-toggle__bar"></span>
                        <span class="c-sidebar-toggle__bar"></span>
                    </button><!-- // .c-sidebar-toggle -->
    
                    <h2 class="c-navbar__title u-mr-auto">Upacara Bendera 17 Agustus 2018</h2> 
    
                    <div class="c-dropdown dropdown">
                        <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="c-avatar__img" src="{{ asset('assets/img/avatar2-200.jpg')}}" alt="User's Profile Picture">
                        </a>

                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                            <form method="post" action="{{ route('logout') }}">
                                {{ csrf_field() }}
                                <button class="c-dropdown__item dropdown-item" style="width:100%">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </header>
    
                <div class="container-fluid">
                        @yield('content')
                </div><!-- // .container -->
                
            </main><!-- // .o-page__content -->
        <script src="{{asset('assets/js/main.min.js')}}"></script>
        <!-- Notie -->
        <script src="{{ asset("/assets/plugins/notie/notie.min.js") }}" type="text/javascript"></script>
        @stack('scripts')
    </body>
</html>