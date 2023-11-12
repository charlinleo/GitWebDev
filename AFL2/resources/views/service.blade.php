@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5">Service</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto">
                            <a href="service/{{ $service['id'] }}"><img class="img-fluid" src="{{ 'img/' . $service['imageS'] }}" alt="..." /></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="copyright mt-5 py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Autosight</small></div>
    </div>

@endsection
