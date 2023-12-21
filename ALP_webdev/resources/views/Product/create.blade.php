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
                <form action="{{ route('product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="product_name">Name :</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value="" selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="product_desc" name="product_desc" rows="3" placeholder="Enter Product Description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" required>
                    </div>

                    <!-- Add more form fields as needed -->
                    <br>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            @else
                <p>You do not have permission to edit this product.</p>
            @endif
        </div>
</section>

@endsection
