@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-black">
        <div class="col-md-8 position-absolute top-50 start-50 translate-middle">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
