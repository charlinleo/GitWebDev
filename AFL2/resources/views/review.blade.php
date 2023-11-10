@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')



<body>
    <div class="container p-3">

        <div class="card-body">
            <h1>Reviews</h1>
            <br>

            <form action="view_add.php" method="POST">
                <button class="btn btn-primary">Tambah Penilaian</button>
            </form>

            <br>
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>USERNAME</th>
                        <th>RATING</th>
                        <th>COMMENT</th>
                        <th>ACTION</th>
                    </tr>


                    @php ( $username = ['Charlin Leo', 'Jesslyn Halim', 'Thomas Evander'])

                    @foreach ( $username as $user )
                    @if ( $loop->even )
                    @php ( $rating = "4.7/5" )
                    @else
                    @php ( $rating = "4.9/5" )
                    @endif

                    <tr>
                        <td>{{ $loop -> index+1 }}</td>
                        <td>{{ $user }}</td>
                        <td>{{ $rating }}</td>
                        <td> @if ( $loop -> first )
                            Pengerjaan rapi & cepat
                            @elseif ( $loop -> last )
                            Ownernya baik hati 🥰
                            @else
                            Kerencl
                            @endif ()
                        </td>
                        <td>
                            <a>
                                <button class="btn btn-warning">Update</button>
                            </a>
                            <a>
                                <button class="btn btn-danger">Delete</button>
                            </a>
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