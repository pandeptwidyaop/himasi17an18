<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HIMAPRODI SI</title>
        <meta name="description" content="Dashboard UI Kit">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">
    </head>
    <body class="o-page o-page--center">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="o-page__card">
            <div class="c-card u-mb-xsmall">
                <header class="c-card__header u-pt-large">
                    <a class="c-card__icon" href="#!">
                        <img src="{{asset('assets/img/logo-login.svg')}}" alt="Dashboard UI Kit">
                    </a>
                    <h1 class="u-h3 u-text-center u-mb-zero">Welcome back! Please login.</h1>
                </header>

                <form method="POST" action="{{ route('login') }}" class="c-card__body" aria-label="{{ __('Login') }}">
                    @csrf
                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="email">Log in with your e-mail address</label> 
                        <input id="email" type="email" id="email" class="c-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="clark@dashboard.com">
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="password">Password</label> 
                        <input id="password" type="password" id="password" class="c-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Numbers, Letters..."> 
                    </div>

                    <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Sign in to Dashboard</button>
                </form>
            </div>
        </div>

        <script src="{{asset('assets/js/main.min.js')}}"></script>
    </body>
</html>