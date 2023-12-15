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
                <div class="card mx-auto" style="width: 50%;">
                    <img src="{{ asset('img/' . $services['imageS']) }}" class="center" alt="...">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title text-center">{{ $services['namaS'] }}</h5>
                        <p class="card-text text-center">Durasi : {{ $services['durasiS'] }}</p>
                        <p class="card-text text-center">Harga : {{ $services['hargaS'] }}</p>
                        <p class="card-text text-center">Products : {{ $services->products->namaP }}</p>
                        <p class="card-text text-center">Harga Products : {{ $services->products->hargaP }}/pcs</p>
                        <a href="/service" class="btn btn-primary text-center">Back</a>
                    </div>
                </div>
            </div>
    </section>
    <div class="copyright mt-5 mb-0 py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Autosight</small></div>
    </div>


@endsection
