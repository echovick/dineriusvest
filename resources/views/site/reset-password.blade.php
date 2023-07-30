@extends('layouts.site.app')

@section('title', 'DENARIUSVEST - Sign In')

@section('content')
<main>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="container">
                <div class="uk-width-expand@m uk-flex uk-flex-middle" style="width:50%; margin:auto;">
                    <div class="margin:auto;">
                        <div class="uk-width-3-5@m" style="margin: auto">
                            <div class="uk-text-center in-padding-horizontal@s">
                                <a class="uk-logo" href="{{ url('/') }}">
                                    <img src="img/logo.png" data-src="img/logo.png" alt="logo" width="134" height="23" data-uk-img>
                                </a>
                                <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Reset Your Password</p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form">
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="otp" value="" type="text" placeholder="Enter OTP">
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="New Password">
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password_confirmation" value="" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox" type="checkbox"> Remember me</label>
                                    </div>
                                    {{-- <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset" href="{{ '/forgot-password' }}">Forgot password?</a></label>
                                    </div> --}}
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Submit</button>
                                    </div>
                                </form>
                                <span class="uk-text-small">Go back to login? <a href="{{ url('/signin') }}">Click here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
@endsection
