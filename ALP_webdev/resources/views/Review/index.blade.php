@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Review</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div>
                @foreach ($review as $rev)
                    <div class="card mx-auto mb-4" style="width: 50%;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center">{{ $rev->user->name }}</h5>
                            <p class="card-text text-center">Rating : {{ $rev['rating'] }}</p>
                            <p class="card-text text-center">Comment : {{ $rev['comment'] }}</p>
                            <p class="card-text text-center">
                                <a href="/review" class="btn btn-primary text-center">Back</a>
                            </p>
                            <p>
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <form action="{{ route('review.destroy', $rev->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger justify-center"
                                            onclick="return confirm('Are you sure you want to delete this Review?')">Delete</button>
                                    </form>
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ((Auth::check() && Auth::user()->isAdmin()) || (Auth::check() && Auth::user()->isMember()))
                <a href="{{ route('review.create') }}" class="btn btn-success d-grid gap-2">Add Review</a>
            @endif
    </section>

@endsection
