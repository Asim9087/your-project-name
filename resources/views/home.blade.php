@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <a href="{{'student'}}" name="add" >add</a>
        
            <div class="card" style="margin-top:20px;">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- {{ __('You are logged in!') }} -->
                <h4>User Profile</h4>
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('UserName') }}</label>
                    <div class="col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{$user_name}}</label>
                    </div>
                </div>

                <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{$email}}</label>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
