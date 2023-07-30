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
                                <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Log into your account</p>
                                <!-- login form begin -->
                                @if (session()->has('msg'))
                                    <div class="alert alert-info" style="padding:1%; background:green; color:white; font-size:13; margin-bottom:3%;">
                                        {{ session()->get('msg') }}
                                    </div>
                                @endif
                                <form class="uk-grid uk-form" action="{{ route('auth.login') }}" method="post">
                                    @csrf
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="username" value="" type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox" type="checkbox"> Remember me</label>
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset" href="{{ '/forgot-password' }}">Forgot password?</a></label>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit" style="background: #C89B42 !important">Sign in</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                                <p class="uk-heading-line"><span>Or sign in with</span></p>
                                <div class="uk-margin-medium-bottom">
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded color-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded uk-margin-small-left color-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div>
                                <span class="uk-text-small">Don't have an account? <a href="{{ url('/signup') }}">Register here</a></span>
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
