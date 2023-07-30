@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="kyc-app wide-sm m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <h2 class="nk-block-title fw-normal">Email Verification</h2>
                                <div class="nk-block-des">
                                    <p>
                                        To comply with regulation each participant will have
                                        to go through indentity verification (KYC/AML) to
                                        prevent fraud causes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-kyc-app p-sm-2 text-center">
                                        <div class="nk-kyc-app-icon">
                                            <em class="icon ni ni-files"></em>
                                        </div>
                                        <div class="nk-kyc-app-text mx-auto">
                                            <p class="lead">
                                                An OTP have been sent to your registered email, please enter the OTP sent to
                                                your email to verify.
                                            </p>
                                            @if (session()->has('msg'))
                                                <div class="alert alert-info" style="padding:0.5%; background:orange; color:white; font-size:13; margin-bottom:3%; border-radius:5px;">
                                                    {{ session()->get('msg') }}
                                                </div>
                                            @endif
                                        </div>
                                        <form action="{{ route('auth.verify-email') }}" method="post">
                                            @csrf
                                            <div class="row g-4">
                                                <div class="col-md-7 mx-auto mb-5">
                                                    <div class="form-group">
                                                        <div class="form-control-group">
                                                            <input type="text" class="form-control form-control-lg" name="otp"
                                                                placeholder="Enter OTP" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p type="submit" name="resend_otp" value='true'><u>Resend OTP</u></p>
                                            <div class="nk-kyc-app-action">
                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-4">
                                <p>
                                    If you have any question, please contact our support
                                    team
                                    <a href="mailto:info@Deneriusvest.com">info@Dineriusvest.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
