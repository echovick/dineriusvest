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
                                    <img style="width:15px; margin-right:10px;" src="{{ asset('icons/fa-arrow-back.svg') }}" alt="">
                                    <span>Back</span></a>
                            </div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">
                                    Top Up Your Account
                                </h2>
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="nk-block invest-block">
                        <form action="{{ route('dashboard.topup.submit') }}" method="POST" class="invest-form">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <div class="invest-field form-group">
                                        <input type="hidden" value="" name="iv-plan" id="invest-choose-plan" />
                                        <div class="dropdown invest-cc-dropdown">
                                            <a href="#" class="invest-cc-chosen">
                                                <div class="coin-item">
                                                    <div class="coin-icon">
                                                        <img style="width:15px; margin-right:10px;" src="{{ asset('icons/fa-wallet.svg') }}" alt="">
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Top up your account to be able to invest in our various options of investments</span><span
                                                            class="coin-text">Select or enter an amount & select a payment option to top up your balance</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Quick Amount to Top Up</label>
                                        </div>
                                        <div class="invest-amount-group g-2">
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-1" /><label class="invest-amount-label" for="iv-amount-1"
                                                    value="100">$ 100</label>
                                            </div>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-2" /><label class="invest-amount-label" for="iv-amount-2"
                                                    value="250">$ 250</label>
                                            </div>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-3" /><label class="invest-amount-label" for="iv-amount-3"
                                                    value="500">$ 500</label>
                                            </div>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-4" /><label class="invest-amount-label" for="iv-amount-4"
                                                    value="1000">$ 1,000</label>
                                            </div>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-5" /><label class="invest-amount-label" for="iv-amount-5"
                                                    value="1500">$ 1,500</label>
                                            </div>
                                            <div class="invest-amount-item">
                                                <input type="radio" class="invest-amount-control" name="iv-amount"
                                                    id="iv-amount-6" /><label class="invest-amount-label" for="iv-amount-6"
                                                    value="2000">$ 2,000</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Or Enter Your Amount Manually</label>
                                            <div class="dropdown">
                                                <a href="#" class="link py-1" data-bs-toggle="dropdown">Change
                                                    Currency</a>
                                                <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-end">
                                                    <ul class="link-list-plain sm text-center">
                                                        <li><a href="#">USD</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-control-group">
                                            <div class="form-info">USD</div>
                                            <input type="text" name="amount"
                                                class="form-control form-control-amount form-control-lg" id="custom-amount"
                                                value="100.00" />
                                        </div>
                                        <div class="form-note pt-2">
                                            Note: Minimum invest 100 USD and upto 2,000 USD
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Payment Method</label>
                                        </div>
                                        <input type="hidden" value="wallet" name="iv-wallet"
                                            id="invest-choose-wallet" />
                                        <div class="dropdown invest-cc-dropdown">
                                            <a href="#" class="invest-cc-chosen dropdown-indicator"
                                                data-bs-toggle="dropdown">
                                                <div class="coin-item">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-wallet-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name" id="selectedPaymentMethod">Debit or Credit Card</span><span
                                                            class="coin-text" id="selectedPaymentMethodDesc">Top up your account using your debit or credit card</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                <ul class="invest-cc-list">
                                                    <li class="invest-cc-item" id="paymentMethodCrypto">
                                                        <a href="#" class="invest-cc-opt" data-plan="dimond">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-sign-usd"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    <span class="coin-name">Crypto Currency</span><span
                                                                    class="coin-text">Send the crypto equivalent to the crypto address that will be provided</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="invest-cc-item"  id="paymentMethodCard">
                                                        <a href="#" class="invest-cc-opt" data-plan="starter">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    <span class="coin-name">Debit or Credit Card</span><span
                                                                    class="coin-text">Top up your account using your debit or credit card</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="invest-cc-item" id="paymentMethodAgent">
                                                        <a href="#" class="invest-cc-opt" data-plan="starter">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    <span class="coin-name">Denariusvest Support Agent</span><span
                                                                    class="coin-text">Let one of our agents help you to top up your account</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox" /><label
                                                class="custom-control-label" for="checkbox">I agree the
                                                <a href="#">terms and &amp; conditions.</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-xl-1">
                                    <div class="card card-bordered ms-lg-4 ms-xl-0">
                                        <div class="nk-iv-wg4">
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="sub-text">Payment Method</div>
                                                        <div class="lead-text" id="selectedPaymentMethod2">USD Wallet</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="sub-text">Amount to Top Up</div>
                                                        <div class="lead-text" id="amount-to-invest">$0.00</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">
                                                            Gateway Fee
                                                        </div>
                                                        <div class="lead-text">$0.00</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="lead-text">Total Charge</div>
                                                        <div class="caption-text text-primary" id="total-charge">
                                                            $0.00
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list" id="paymentMethodDetails">
                                                    Select a payment method to see the steps to take here
                                                </ul>
                                            </div>
                                            <input type="text" name="paymentMethodInput" id="paymentMethodInput" hidden>
                                            <div class="nk-iv-wg4-sub text-center bg-lighter">
                                                <button class="btn btn-lg btn-primary ttu" id="submitButton" type="submit">Confirm &amp;
                                                    proceed</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get references to the radio buttons and the amount field
        const radioButtons = document.querySelectorAll('.invest-amount-control');
        var amountField = document.getElementById('custom-amount');
        const totalCharge = document.getElementById('total-charge');
        const amountToInvest = document.getElementById('amount-to-invest');
        const netProfit = document.getElementById('net-profit');
        const totalReturn = document.getElementById('total-return');
        const paymentMethodCrypto = document.getElementById('paymentMethodCrypto');
        const paymentMethodCard = document.getElementById('paymentMethodCard');
        const paymentMethodAgent = document.getElementById('paymentMethodAgent');
        const selectedPaymentMethod = document.getElementById('selectedPaymentMethod');
        const paymentMethodDetails = document.getElementById('paymentMethodDetails');
        const submitButton = document.getElementById('submitButton');
        const paymentMethodInput = document.getElementById('paymentMethodInput');

        // Add an event listener to each radio button
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                // Check if the radio button is checked
                if (radioButton.checked) {
                    // Set the value of the amount field to the value of the selected radio button
                    amountField.value = radioButton.nextElementSibling.getAttribute('value');
                    totalCharge.innerHTML = '$' + amountField.value;
                    amountToInvest.innerHTML = '$' + amountField.value;
                }
            });
        });

        paymentMethodCrypto.addEventListener('click', function(){
            selectedPaymentMethod.innerHTML = 'Crypto Currency';
            selectedPaymentMethodDesc.innerHTML = 'Send the crypto equivalent to the crypto address that will be provided';
            selectedPaymentMethod2.innerHTML = 'Crypto Currency';
            paymentMethodDetails.innerHTML = `
                Send the crypto equivalent of your amount to the following crypto wallet, and click continue
                <hr>
                <div class="sub-text">BTC: </div>
                <p style:font-size:10px !important;>bc1qyj8mfmzhvldt5vp9n4t6xvmqemlh49zvtgak6z</p>
                <div class="sub-text">ETH: </div>
                <p style:font-size:10px !important;>0xeadf57Ad5b1e864A632162f6954e413AA14e0303</p>
            `;
            submitButton.style.display = 'block';
            submitButton.innerHTML = 'I have made payment';
            paymentMethodInput.value = 'crypto';
        })
        paymentMethodCard.addEventListener('click', function(){
            selectedPaymentMethod.innerHTML = 'Debit / Credit Card';
            selectedPaymentMethodDesc.innerHTML = 'Top up your account using your debit or credit card';
            selectedPaymentMethod2.innerHTML = 'Debit / Credit Card';
            paymentMethodDetails.innerHTML = `
                Payment with Card is not available at the month, please check back later.
            `;
            submitButton.style.display = 'none';
            paymentMethodInput.value = 'card';
        })
        paymentMethodAgent.addEventListener('click', function(){
            selectedPaymentMethod.innerHTML = 'Denariusvest Agent';
            selectedPaymentMethodDesc.innerHTML = 'Let one of our agents help you top up your account';
            selectedPaymentMethod2.innerHTML = 'Denariusvest Agent';
            paymentMethodDetails.innerHTML = `
                After submitting the request, an agent will call you to guide your through funding your account
            `;
            submitButton.style.display = 'block';
            submitButton.innerHTML = 'Submit Request';
            paymentMethodInput.value = 'agent';
        })

        amountField.addEventListener('input', function() {
            totalCharge.innerHTML = '$' + amountField.value;
            amountToInvest.innerHTML = '$' + amountField.value;
        })

        totalCharge.innerHTML = '$' + amountField.value;
        amountToInvest.innerHTML = '$' + amountField.value;
    </script>
@endsection
