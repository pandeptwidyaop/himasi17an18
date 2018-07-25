@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="c-btn c-btn--info pull-right" href="{{route('exportUpben')}}">Export Excel</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="c-table">
            <thead class="c-table__head">
            <tr class="c-table__row">
                <th class="c-table__cell c-table__cell--head">ID</th>
                <th class="c-table__cell c-table__cell--head">No Urut</th>
                <th class="c-table__cell c-table__cell--head">NIM</th>
                <th class="c-table__cell c-table__cell--head">Nama</th>
                <th class="c-table__cell c-table__cell--head">No Telp</th>
                <th class="c-table__cell c-table__cell--head">Program Studi</th>
                <th class="c-table__cell c-table__cell--head" width="150">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)

            <tr class="c-table__row">
                <td class="c-table__cell">{{$data->id}}</td>
                <td class="c-table__cell">{{$data->urut}}</td>
                <td class="c-table__cell"><a href="{{ route('upben.show',['id' => $data->id])}}">{{$data->nim}}</a></td>
                <td class="c-table__cell">{{$data->nama}}</td>
                <td class="c-table__cell">{{$data->telp}}</td>
                <td class="c-table__cell">{{$data->program_studi}}</td>
                <td class="c-table__cell"><a href="{{route("upben.edit",['id' => $data->id])}}" class="c-btn c-btn--warning c-btn--small">Edit</a> <a class="c-btn c-btn--danger c-btn--small delete-btn" data-id="{{$data->id}}"  >Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
@push('scripts')
<script>
    $(".delete-btn").click(function(){
        let id = $(this).attr('data-id');
        if(confirm("Apa anda yakin akan menghapus? ")) {
            $.ajax({
                url : "{{url('/')}}/upben/"+id,
                method : "POST",
                data : {
                    _token : "{{csrf_token()}}",
                    _method : "DELETE",
                }
            })
                .then(function(data){
                    location.reload();
                });
        }
    })

    //success save
    @if (session('success'))
        notie.alert({ type: 'success', text: '{{ session('success') }} ', time: 10 }) 
        @endif

    //error save
    @if (session('error'))
        notie.alert({ type: 'error', text: '{{ session('error') }}  ', time: 10 })
        @endif

</script>

@endpush