@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Edit Service</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        @if (Auth::check() && Auth::user()->isAdmin())
                <form action="{{ route('Service.update', ['service' => $service->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="service_name">Name :</label>
                        <input type="text" class="form-control" id="service_name" name="service_name"
                            value="{{ $service->service_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration : </label>
                        <textarea class="form-control" id="duration" name="duration" rows="3" required>{{ $service->duration }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="service_price">Price : </label>
                        <input type="text" class="form-control" id="service_price" name="service_price"
                            value="{{ $service->service_price }}" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Update Service</button>
                </form>
            @else
                <p>You do not have permission to edit this service.</p>
            @endif
    </div>
</section>

@endsection
