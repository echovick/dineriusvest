@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub">
                                <a href="{{ route('dashboard.index') }}" class="back-to">
                                    <img style="width:15px; margin-right:10px;" src="{{ asset('icons/fa-arrow-back.svg') }}"
                                        alt="">
                                    <span>Back</span></a>
                            </div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">
                                    Change Your Password
                                </h2>
                            </div>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('msg'))
                        <div class="alert alert-danger">
                            {{ session('msg') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="nk-block invest-block">
                        <form action="{{ route('dashboard.change-password.submit') }}" method="POST" class="invest-form">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Enter New Password</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-amount form-control-lg" />
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Confirm New Password</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="password" name="password_confirmation"
                                                class="form-control form-control-amount form-control-lg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-primary ttu" id="submitButton" type="submit"
                                style="margin-top:5%;">Confirm &amp;
                                proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
