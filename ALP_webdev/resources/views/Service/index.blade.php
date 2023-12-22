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
            <div>
                @foreach ($service as $ser)
                    <div class="card mx-auto mb-4" style="width: 50%;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center">{{ $ser['service_name'] }}</h5>
                            <p class="card-text text-center">Durasi : {{ $ser['duration'] }}</p>
                            <p class="card-text text-center">Harga Service : {{ $ser['service_price'] }}</p>
                            <p class="card-text text-center">
                                <a href="/service" class="btn btn-primary text-center">Back</a>
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <a href="{{ route('service.edit', [$ser->id]) }}"
                                        class="btn btn-warning text-white">Edit</a>
                                    </p>
                                    <p>
                                    <form action="{{ route('service.destroy', $ser->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
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
            <a href="{{ route('service.create') }}" class="btn btn-success d-grid gap-2">Add Service</a>
        @endif
    </section>

@endsection
