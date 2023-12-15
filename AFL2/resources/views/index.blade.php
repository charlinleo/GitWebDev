@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="masthead-avatar mb-5" src="{{ asset('img/logo.jpeg') }}" alt="" />

            <h1 class="masthead-heading text-uppercase mb-0">Autosight</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">
            <h3>🛠️ Automotive Accessoris on Budget</h3>
            <h3>🔧 New / Used Parts</h3>
            <h3>🔨 Home Service / By Delivery</h3>
        </div>
    </header>

    <section>
        <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mt-1 pt-5">Service</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="mx-auto">
                            <a href="/showS"><img class="img-fluid" src="{{ asset('img/logo.jpeg') }}"
                                    alt="..." /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">📍Based on Surabaya</p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://api.whatsapp.com/send/?phone=6287851090074&text&type=phone_number&app_absent=0"><i
                            class="fab fa-fw fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.instagram.com/autosight_store?igshid=NTc4MTIwNjQ2YQ%3D%3D"><i
                            class="fab fa-fw fa-instagram"></i></a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Autosight</h4>
                    <p class="lead mb-0">
                        <a class="text-light" href="/about">Autosight</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Autosight</small></div>
    </div>
@endsection
