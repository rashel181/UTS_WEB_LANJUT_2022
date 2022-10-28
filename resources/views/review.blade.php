@extends('layouts.main')
@section('container')

<body>
    <h1>About This Arcana</h1>
    @foreach ($daftarbarang as $key => $item)
    <p>{{ $item->deskripsi_barang }}</p>
    <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $item->reviewer_name }}</h5>
            <p class="card-text">{{ $item->review }}</p>
        </div>
    </div>
    @endforeach
</body>
@endsection