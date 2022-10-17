@extends('layout.master')
@section('tittle','Category')

@section('content')
<div class="p-3 mb-2 bg-success text-white"></div>
    <h1>Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswa_s as $mahasiswa)
                    <li class="list-group-item">{{ $mahasiswa }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection
