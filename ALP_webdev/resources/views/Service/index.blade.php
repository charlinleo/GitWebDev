@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Service</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($service as $ser)
                    <div class="card mx-auto p-2 mb-4" style="width: 25rem;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center">{{ $ser['service_name'] }}</h5>
                            <p class="card-subtitle">Durasi :</p>
                            <p class="card-text text-center">{{ $ser['duration'] }}</p>
                            <p class="card-subtitle">Harga Service :</p>
                            <p class="card-text text-center">{{ $ser['service_price'] }}</p>
                            <p class="card-text">
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <form action="{{ route('service.destroy', $ser->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('service.edit', [$ser->id]) }}"
                                            class="btn btn-warning text-white">Edit</a>
                                        <button type="submit" class="btn btn-danger justify-center"
                                            onclick="return confirm('Are you sure you want to delete this Service?')">Delete</button>
                                    </form>
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (Auth::check() && Auth::user()->isAdmin())
                <a href="{{ route('service.create') }}" class="btn btn-success d-grid gap-2 col-6 mx-auto" style="width: 50%">Add Service</a>
            @endif

    </section>

@endsection
