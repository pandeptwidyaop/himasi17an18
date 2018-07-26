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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <!-- Notie -->
    <link href="{{ asset("/assets/plugins/notie/notie.min.css")}}" rel="stylesheet" type="text/css"/>

</head>
<body class="o-page o-page--center">
<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="o-page__card o-page__card--horizontal" >
    <div class="c-card c-login-horizontal">
        <div class="c-login__content-wrapper">
            <header class="c-login__header">
                <a class="c-login__icon c-login__icon--rounded c-login__icon--left" href="#!">
                    <img src="{{asset('assets/img/hima.jpg')}}" alt="Dashboard's Logo">
                </a>

                <h2 class="c-login__title">Upacara Bendera</h2>
            </header>

            <div class="c-field u-mb-small" style="padding:20px">
                <div class="c-alert c-alert--warning alert fade show">
                    Maaf, pendaftaran peserta Upacara Peringatan Hari Kemerdekaan RI 17 Agustus 2018 sudah kami tutup.
                </div>
            </div>
            
        </div>

        <div class="c-login__content-image">
            <img src="{{asset('assets/img/bg-hima.png')}}" alt="Welcome to Dashboard UI Kit">

            <h3>HIMAPRODI SI</h3>
            <p class="u-text-large">Form Pendaftaran Peserta Upacara Bendera <br>17 Agustus 2018 (FREE SKKM)</p>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/main.min.js')}}"></script>
<!-- Notie -->
<script src="{{ asset("/assets/plugins/notie/notie.min.js") }}" type="text/javascript"></script>
<script>
//success save
@if (session('success'))
    notie.alert({ type: 'success', text: '<b>{{ session('success') }}<b></br>Mohon No pendaftaran anda di ingat saat melakukan registrasi pada hari <br>Jumat, 17 Agustus 2018 pukul 07.00 WITA di lobby depan STMIK Stikom Bali ', time: 60 }) 
        @endif

//error save
@if (session('error'))
    notie.alert({ type: 'error', text: '{{ session('error') }}  ', time: 10 })
        @endif
</script>
</body>
</html>