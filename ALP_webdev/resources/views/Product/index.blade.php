@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Product</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="d-flex">
                @foreach ($product as $pro)
                    <div class="">
                        <div class="card mx-auto p-2 mb-4" style="width: 25rem;">
                            <div class="card-body justify-content-center">
                                <img src="{{ asset('images/' . $writer['image']) }}" alt="{{ $pro['name'] }} Image"
                                        style="width: 200px; height: 200px;">

                                <h5 class="card-title text-center">{{ $pro['product_name'] }}</h5>
                                <p class="card-text">Kategori :</p>
                                <p class="card-text text-center">{{ $pro->category->category_name }}</p>
                                <p class="card-text">Harga Products :</p>
                                <p class="card-text text-center">{{ $pro['product_price'] }}/pcs</p>
                                <p class="card-text">Deskripsi :</p>
                                <p class="card-text text-break text-center">{{ $pro['product_desc'] }}</p>
                                <p class="card-text ">
                                    @if (Auth::check() && Auth::user()->isAdmin())
                                        <form action="{{ route('product.destroy', $pro->id) }}" method="POST"
                                            style="display: inline;">
                                            <a href="{{ route('product.edit', [$pro->id]) }}"
                                                class="btn btn-warning text-white">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                        </form>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach

        @if (Auth::check() && Auth::user()->isAdmin())
            <a href="{{ route('product.create') }}" class="btn btn-success d-grid gap-2 col-6 mx-auto"
                style="width: 50%">Add Product</a>
        @endif
    </section>

@endsection
