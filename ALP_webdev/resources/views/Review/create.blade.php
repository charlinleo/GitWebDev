@extends('layouts.template')

@section('pagetitle')
@section('maintitle')
@section('layout_content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Add Review</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div>
            @if (Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember())
                <form action="{{ route('review.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="user_id">User :</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="" disabled>Select User</option>
                            @foreach ($user as $usr)
                                <option value="{{ $usr->id }}" {{ $usr->id == $currentUserId ? 'selected' : '' }}>
                                    {{ $usr->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating :</label>
                        <input type="text" class="form-control" id="rating" name="rating" placeholder="Enter Rating" required>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment :</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Enter Comment" required></textarea>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Add Review</button>
                </form>
            @else
                <p>You do not have permission to edit this review.</p>
            @endif
        </div>
</section>

@endsection
