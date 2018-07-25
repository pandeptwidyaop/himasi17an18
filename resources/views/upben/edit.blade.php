@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="c-graph-card">

            <div class="c-graph-card__chart">

                <h3 class="c-graph-card__title u-h4">Update</h3><br>

                <form action="{{route('upben.update',['id' => $upben->id])}}" class="c-login__content" method="POST">
                    @csrf
                    @method('PUT')
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
                        <input class="c-input" type="text" name="nim" id="nim" maxlength="9" minlength="9" placeholder="NIM" value="{{$upben->nim}}">
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="nama">Nama</label>
                        <input class="c-input" type="text" name="nama" id="nama" placeholder="Contoh : Tasha Novila Sari" value="{{$upben->nama}}">
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="telp">No Telp</label>
                        <input class="c-input" type="text" name="telp" id="telp" placeholder="Nomer Telepon yang bisa dihubungi" value="{{$upben->telp}}">
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="select1">Program Studi</label>

                        <!-- Select2 jquery plugin is used -->
                        <select class="c-select" id="select1" name="program_studi">
                            <option value="Sistem Informasi" {{ $upben->program_studi=="Sistem Informasi" ? 'selected='.'"selected"' : '' }}>Sistem Informasi</option>
                            <option value="Sistem Komputer" {{ $upben->program_studi=="Sistem Komputer" ? 'selected='.'"selected"' : '' }}>Sistem Komputer</option>
                            <option value="Manajemen Informatika" {{ $upben->program_studi=="Manajemen Informatika" ? 'selected='.'"selected"' : '' }}>Manajemen Informatika</option>
                        </select>
                    </div>

                    <button class="c-btn c-btn--success c-btn--fullwidth" type="submit">Daftar</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')

@endpush