@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')


<body>
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
                <h3><a href="https://linktr.ee/autosight">Autosight</a> adalah teman handal buat kalian yang menyukai segala modif otomotif yang budget ramah di kantong.</h3>
        </div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">📍Based on Surabaya</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://api.whatsapp.com/send/?phone=6287851090074&text&type=phone_number&app_absent=0"><i class="fab fa-fw fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/autosight_store?igshid=NTc4MTIwNjQ2YQ%3D%3D"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>

                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Autosight</h4>
                        <p class="lead mb-0">
                            <a class="text-light" href="https://linktr.ee/autosight?fbclid=PAAab8D7zRbbZgGddktmzNnlyKX24j8A3TxU26rEKxsrn9aV2dy0FO4G82ebQ_aem_AZdbqfkZp5iSqEAS_sQu1yG5t9yrHAcjl6ASmXCyj8N8QaVncKb764O90_nFewRt0Mk">Autosight</a>
                        </p>
                    </div>
                </div>
            </div>
    </header>
</body>
@endsection
