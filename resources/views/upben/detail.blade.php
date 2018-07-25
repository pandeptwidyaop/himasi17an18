@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="c-graph-card">

            <div class="c-graph-card__chart">

                <h3 class="c-graph-card__title u-h4">Detail</h3><br>

                <h6 class="c-graph-card__title u-h6">Nim</h6>
                <h4 class="c-graph-card__title u-h4">{{ $upben->nim}}</h4><br>

                <h6 class="c-graph-card__title u-h6">Nama</h6>
                <h4 class="c-graph-card__title u-h4">{{ $upben->nama}}</h4><br>

                <h6 class="c-graph-card__title u-h6">No Telp</h6>
                <h4 class="c-graph-card__title u-h4">{{ $upben->telp}}</h4><br>

                <h6 class="c-graph-card__title u-h6">Program Studi</h6>
                <h4 class="c-graph-card__title u-h4">{{ $upben->program_studi}}</h4><br>


            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')

@endpush