@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')



<body>
    <div class="container p-3">

        <div class="card-body">
            <h1>Jasa yang Ditawarkan</h1>
            <br>
            <br>
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>PRODUK</th>
                        <th>JASA</th>
                        <th>DURASI PENGERJAAN</th>
                    </tr>


                    @php ( $product = ['Headlamp', 'Foglamp', 'Mini Projie'])

                    @foreach ( $product as $pro )
                    @if ( $loop->even )
                    @php ( $jasa = "Rp 300.000" )
                    @else
                    @php ( $jasa = "Rp 450.000" )
                    @endif

                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{ $pro }}</td>
                        <td>{{ $jasa }}</td>
                        <td> @if ( $loop -> first )
                            2 jam
                            @elseif ( $loop -> last )
                            3 jam
                            @else
                            1 jam
                            @endif ()
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
    </div>
</body>
@endsection