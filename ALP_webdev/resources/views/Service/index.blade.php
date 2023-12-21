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
                    <p class="card-text text-center">Durasi : {{ $ser['duration']}}</p>
                    <p class="card-text text-center">Harga Service : {{ $ser['service_price'] }}</p>
                    <p class="card-text text-center"><a href="/service" class="btn btn-primary text-center">Back</a></p>
                </div>
            </div>
        @endforeach
        </div>
</section>

@endsection
