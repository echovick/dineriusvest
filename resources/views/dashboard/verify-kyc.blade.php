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
                            <h2 class="nk-block-title fw-normal">KYC Verification</h2>
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
                                            You have not submitted your necessary documents to
                                            verify your identity. In order to purchase our
                                            tokens, please verify your identity.
                                        </p>
                                    </div>
                                    <div class="nk-kyc-app-action">
                                        <a href="kyc-form.html" class="btn btn-lg btn-primary">Click here to complete
                                            your KYC</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-4">
                            <p>
                                If you have any question, please contact our support
                                team
                                <a href="mailto:info@Deneriusvest.com">info@Deneriusvest.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
