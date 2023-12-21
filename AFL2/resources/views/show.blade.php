@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')


    <div class="container">
        <h1 class="page-section-heading text-center text-uppercase text-secondary mt-5 pt-5">Service</h1>

        <div class="divider-custom mt-1">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        @foreach ($services as $ser)
            <div class="card mx-auto mb-4" style="width: 50%;">
                <div class="card-body justify-content-center">
                    <h5 class="card-title text-center">{{ $ser['namaS'] }}</h5>
                    <p class="card-text text-center">Durasi : {{ $ser['durasiS'] }}</p>
                    <p class="card-text text-center">Harga : {{ $ser['hargaS'] }}</p>
                    <p class="card-text text-center">Products : {{ $ser->products->namaP }}</p>
                    <p class="card-text text-center">Harga Products : {{ $ser->products->hargaP }}/pcs</p>
                    <p class="card-text text-center"><a href="/" class="btn btn-primary text-center">Back</a></p>
                </div>
            </div>
        @endforeach

        
    </div>

    <div class="copyright mt-5 mb-0 py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Autosight</small></div>
    </div>
@endsection
