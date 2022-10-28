@extends('layouts.main')
@section('container')

<body>
    <h1>THE ARCANA'S</h1>
    <table class="table table-borderless mt-5">
        <!-- LOOPING UNTUK MENGATUR LAYOUTS -->
        <?php $i = 1 ?>
        @foreach ($allBarang as $key => $barang)
        @if($i == 1 OR $i==5)
        <tr>
            @endif
            <td>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images') }}/{{ $barang->photo }}" class="card-img-top" alt="{{ $barang->photo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                        <a href="{{ route('review', $barang->id_barang) }}" button type="button" class="btn btn-outline-primary">Details & Review</button></a>
                    </div>
                </div>
            </td>
            @if ( $i == 4)
        </tr>
        @endif
        <?php $i++; ?>
        @if ( $i == 5)
        <?php $i = 1; ?>
        @endif
        @endforeach
    </table>
</body>
@endsection