@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Add Product</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div>
            @if (Auth::check() && Auth::user()->isAdmin())
                <form action="{{ route('service.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="service_name">Name :</label>
                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter Service Name" required>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration" required>
                    </div>

                    <div class="form-group">
                        <label for="service_price">Price :</label>
                        <input type="text" class="form-control" id="service_price" name="service_price" placeholder="Enter Service Price" required>
                    </div>

                    <!-- Add more form fields as needed -->
                    <br>
                    <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
            @else
                <p>You do not have permission to edit this product.</p>
            @endif
        </div>
</section>

@endsection
