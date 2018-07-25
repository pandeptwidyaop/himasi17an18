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

<div class="o-page__card o-page__card--horizontal">
    <div class="c-card c-login-horizontal">
        <div class="c-login__content-wrapper">
            <header class="c-login__header">
                <a class="c-login__icon c-login__icon--rounded c-login__icon--left" href="#!">
                    <img src="{{asset('assets/img/hima.jpg')}}" alt="Dashboard's Logo">
                </a>

                <h2 class="c-login__title">Upacara Bendera </h2>
            </header>

            <form action="{{route('upben.store')}}" class="c-login__content" method="POST">
                @csrf

                @if ($errors->any())
                <div class="c-field u-mb-small">
                    <div class="c-alert c-alert--danger alert fade show">

                        @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach

                        <button class="c-close" data-dismiss="alert" type="button">×</button>
                    </div>
                </div>
                @endif

                <div class="c-field u-mb-small">
                    <label class="c-field__label" for="nim">NIM</label>
                    <input class="c-input" type="text" name="nim" id="nim" maxlength="9" minlength="9" placeholder="NIM" value="{{ old('nim') }}">
                </div>

                <div class="c-field u-mb-small">
                    <label class="c-field__label" for="nama">Nama</label>
                    <input class="c-input" type="text" name="nama" id="nama" placeholder="Contoh : Tasha Novila Sari" value="{{ old('nama') }}">
                </div>

                <div class="c-field u-mb-small">
                    <label class="c-field__label" for="telp">No Telp</label>
                    <input class="c-input" type="text" name="telp" id="telp" placeholder="Nomer Telepon yang bisa dihubungi" value="{{ old('telp') }}">
                </div>

                <div class="c-field u-mb-small">
                    <label class="c-field__label" for="select1">Program Studi</label>

                    <!-- Select2 jquery plugin is used -->
                    <select class="c-select" id="select1" name="program_studi">
                        <option value="Sistem Informasi" {{ old('program_studi')=="Sistem Informasi" ? 'selected='.'"selected"' : '' }}>Sistem Informasi</option>
                        <option value="Sistem Komputer" {{ old('program_studi')=="Sistem Komputer" ? 'selected='.'"selected"' : '' }}>Sistem Komputer</option>
                        <option value="Manajemen Informatika" {{ old('program_studi')=="Manajemen Informatika" ? 'selected='.'"selected"' : '' }}>Manajemen Informatika</option>
                    </select>
                </div>

                <button class="c-btn c-btn--success c-btn--fullwidth" type="submit">Daftar</button>

            </form>
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