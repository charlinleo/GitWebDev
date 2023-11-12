@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <body>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5">Review</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="masthead container p-3 mt-5">
                    <div class="card p-3">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>USERNAME</th>
                                    <th>RATING</th>
                                    <th>COMMENT</th>
                                </tr>
                            </thead>
                            {{-- @php
                                $reviews = \App\Models\Review::all();
                            @endphp --}}
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $review['nama'] }}</td>
                                    <td>{{ $review['rating'] }}</td>
                                    <td>{{ $review['comment'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright py-4 text-center text-white mt-5 mb-0">
            <div class="container"><small>Copyright &copy; Autosight</small></div>
        </div>
    </body>
@endsection
