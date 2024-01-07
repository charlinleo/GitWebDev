@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Edit Product</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            @if ((Auth::check() && Auth::user()->isAdmin()))
                <form action="{{ route('Reservation.update', ['reservation' => $reservation->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="client_name">Name :</label>
                        <input type="text" class="form-control" id="client_name" name="client_name"
                            value="{{ $reservation->client_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact :</label>
                        <input type="text" class="form-control" id="contact" name="contact"
                            value="{{ $reservation->contact }}" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text"
                            value="{{ $reservation->date }}" />
                    </div>


                    <div class="form-group">
                        <label for="status_id">Status :</label>
                        <select class="form-control" id="status_id" name="status_id" required>
                            @foreach ($statuses as $stat)
                                <option value="{{ $stat->id }}"
                                    {{ $reservation->status_id == $stat->id ? 'selected' : '' }}>
                                    {{ $stat->status }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="service_id">Service :</label>
                        <select class="form-control" id="service_id" name="service_id" required>
                            @foreach ($services as $ser)
                                <option value="{{ $ser->id }}"
                                    {{ $reservation->service_id == $ser->id ? 'selected' : '' }}>
                                    {{ $ser->service_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_id">Service :</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            @foreach ($products as $pro)
                                <option value="{{ $pro->id }}"
                                    {{ $reservation->product_id == $pro->id ? 'selected' : '' }}>
                                    {{ $pro->product_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="total_purchase">Total Purchase :</label>
                        <input type="text" class="form-control" id="total_purchase" name="total_purchase"
                            value="{{ $reservation->total_purchase }}" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Update Reservation</button>
                </form>
            @else
                <p>You do not have permission to edit this reservation.</p>
            @endif
        </div>
    </section>

@endsection
