@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-5">{{ __('Profile') }}</h2>
                <div class="mb-4">
                    @include('settings.profile.partials.update-profile-information-form')
                </div>
                <div class="mb-4">
                    @include('settings.profile.partials.update-password-form')
                </div>
                <div>
                    @include('settings.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
