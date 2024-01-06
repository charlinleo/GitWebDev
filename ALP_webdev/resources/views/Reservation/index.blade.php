@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Reservation</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($reservation as $res)
                    <div class="card mx-auto p-2 mb-4" style="width: 25rem;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center fw-bolder">{{ $res['client_name'] }}</h5>
                            <p class="card-text text-center">Reservation Date :</p>
                            <p class="card-text text-center fw-bold">{{ $res->date }}</p>

                            <p class="card-text text-center">Status : </p>
                            <div class="d-grid gap-2 col-6 mx-auto mb-2">

                                @if ($res->status->id == 1)
                                    <p class="card-text text-center fw-bold btn btn-outline-info disabled">
                                        {{ $res->status->status }}</p>
                                @elseif ($res->status->id == 2)
                                    <p class="card-text text-center fw-bold btn btn-outline-primary disabled">
                                        {{ $res->status->status }}</p>
                                @elseif ($res->status->id == 3)
                                    <p class="card-text text-center fw-bold btn btn-outline-danger disabled">
                                        {{ $res->status->status }}</p>
                                @elseif ($res->status->id == 4)
                                    <p class="card-text text-center fw-bold btn btn-outline-secondary disabled">
                                        {{ $res->status->status }}</p>
                                @elseif ($res->status->id == 5)
                                    <p class="card-text text-center fw-bold btn btn-outline-success disabled">
                                        {{ $res->status->status }}</p>
                                @endif
                            </div>

                            <p class="card-text text-center">Service : </p>
                            @foreach ($res->services as $service)
                                <p class="card-text text-center fw-bold">{{ $service->service_name }}</p>
                            @endforeach

                            <p class="card-text text-center">Product :</p>
                            @foreach ($res->products as $product)
                                <p class="card-text text-center fw-bold">{{ $product->product_name }}</p>
                                <img src="{{ asset('img/' . $product->product_image) }}"
                                    alt="{{ $product->product_name }} Image" style="width: 200px; height: 200px;"
                                    class="rounded mx-auto d-block mb-2">
                            @endforeach
                            <p class="card-text text-center">Total Purchase :</p>
                            <p class="card-text text-center fw-bold">{{ $res->total_purchase }}</p>
                            <p class="card-text ">
                            <form action="{{ route('reservation.destroy', $res->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <a href="{{ route('reservation.edit', [$res->id]) }}"
                                        class="btn btn-warning text-white">Edit</a>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                @endif
                            </form>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <a href="{{ route('reservation.create') }}" class="btn btn-success d-grid gap-2 col-6 mx-auto"
            style="width: 50%">Add Reservation</a>

    </section>

@endsection
