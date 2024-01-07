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
            @if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember())
                <form action="{{ route('reservation.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="client_name">Name :</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter Your Name" required>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact :</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Your Phone Number" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text"/>
                    </div>

                    <div class="form-group">
                        <label for="service_id">Service :</label>
                        <select class="form-control" id="service_id" name="service_id" required>
                            <option value="" selected>Select Service</option>
                            @foreach ($service as $ser)
                                <option value="{{ $ser->id }}">
                                    {{ $ser->service_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_id">Service :</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            <option value="" selected>Select Product</option>
                            @foreach ($product as $pro)
                                <option value="{{ $pro->id }}">
                                    {{ $pro->product_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Add Reservation</button>
                </form>
            @else
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">
                    You do not have permission to create this Reservation. Please Login or Register
                </h2>
            </div>
            @endif
        </div>
</section>

@endsection
