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
                                <a href="{{ route('dashboard.investmentInfo', $product->id) }}" class="back-to">
                                    <img style="width:15px; margin-right:10px;" src="{{ asset('icons/fa-arrow-back.svg') }}" alt="">
                                    <span>Back</span></a>
                            </div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">
                                    Ready to get started?
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
                        <form action="{{ route('dashboard.investment.subscribe') }}" method="POST" class="invest-form">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <div class="invest-field form-group">
                                        <input type="hidden" value="{{ $product->id }}" name="iv-plan" id="invest-choose-plan" />
                                        <div class="dropdown invest-cc-dropdown">
                                            <a href="#" class="invest-cc-chosen">
                                                <div class="coin-item">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-offer-fill"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">{{ $product->name }}</span><span
                                                            class="coin-text">{{ $product->benefits }}.</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="invest-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Quick Amount to Invest</label>
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
                                            <label class="form-label">Or Enter Your Amount</label>
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
                                                        @if ($user->wallet->active_account === 'live')
                                                            <span class="coin-name">USD Wallet</span><span
                                                                class="coin-text">Current balance:
                                                                ${{ number_format($user?->wallet?->balance_after, 2) ?? 0 }}</span>
                                                        @else
                                                            <span class="coin-name">USD Wallet</span><span
                                                                class="coin-text">Current balance:
                                                                ${{ number_format($user?->wallet?->demo_balance_after, 2) ?? 0 }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                <ul class="invest-cc-list">
                                                    <li class="invest-cc-item">
                                                        <a href="#" class="invest-cc-opt" data-plan="dimond">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-sign-usd"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    @if ($user->wallet->active_account === 'live')
                                                                        <span class="coin-name">USD Wallet</span><span
                                                                            class="coin-text">Current balance:
                                                                            ${{ number_format($user?->wallet?->balance_after, 2) ?? 0 }}</span>
                                                                    @else
                                                                        <span class="coin-name">USD Wallet</span><span
                                                                            class="coin-text">Current balance:
                                                                            ${{ number_format($user?->wallet?->demo_balance_after, 2) ?? 0 }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    {{-- <li class="invest-cc-item selected">
                                                        <a href="#" class="invest-cc-opt" data-plan="starter">
                                                            <div class="coin-item">
                                                                <div class="coin-icon">
                                                                    <em class="icon ni ni-sign-btc"></em>
                                                                </div>
                                                                <div class="coin-info">
                                                                    <span class="coin-name">BTC Wallet</span><span
                                                                        class="coin-text">Current balance: 0</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li> --}}
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
                                                <h6 class="nk-iv-wg4-title title">
                                                    Your Investment Details
                                                </h6>
                                                <ul class="nk-iv-wg4-overview g-2">
                                                    <li>
                                                        <div class="sub-text">Name of scheme</div>
                                                        <div class="lead-text">{{ $product->name }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Term of the scheme</div>
                                                        <div class="lead-text">{{ $product->tenor }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Profit Rate</div>
                                                        <div class="lead-text">{{ $product->interest_rate }}%</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Total net profit</div>
                                                        <div class="lead-text" id="net-profit">$0.00</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Total Return</div>
                                                        <div class="lead-text" id="total-return">$0.00</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">Term start at</div>
                                                        <div class="lead-text">
                                                            Today ({{ now() }})
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="sub-text">Payment Method</div>
                                                        <div class="lead-text">USD Wallet</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg4-sub">
                                                <ul class="nk-iv-wg4-list">
                                                    <li>
                                                        <div class="sub-text">Amount to invest</div>
                                                        <div class="lead-text" id="amount-to-invest">$0.00</div>
                                                    </li>
                                                    <li>
                                                        <div class="sub-text">
                                                            Commission Fee
                                                            <span>({{ $product->commission_fee ?? 0 }}%)</span>
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
                                            <div class="nk-iv-wg4-sub text-center bg-lighter">
                                                <button class="btn btn-lg btn-primary ttu" type="submit">Confirm &amp;
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

        // Get interest rate
        var interestRate = {{ $product->interest_rate }};

        // Add an event listener to each radio button
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                // Check if the radio button is checked
                if (radioButton.checked) {
                    // Get profit
                    var profit = (parseFloat(interestRate) / 100) * parseFloat(amountField.value);

                    // Set the value of the amount field to the value of the selected radio button
                    amountField.value = radioButton.nextElementSibling.getAttribute('value');
                    totalCharge.innerHTML = '$' + amountField.value;
                    amountToInvest.innerHTML = '$' + amountField.value;
                    netProfit.innerHTML = '$' + profit;
                    totalReturn.innerHTML = '$' + (parseFloat(amountField.value) + parseFloat(profit));
                }
            });
        });

        amountField.addEventListener('input', function() {
            // Get profit
            var profit = (parseFloat(interestRate) / 100) * parseFloat(amountField.value);

            totalCharge.innerHTML = '$' + amountField.value;
            amountToInvest.innerHTML = '$' + amountField.value;
            netProfit.innerHTML = '$' + profit;
            totalReturn.innerHTML = '$' + (parseFloat(amountField.value) + parseFloat(profit));
        })

        // Get profit
        var profit = (interestRate / 100) * amountField.value;

        totalCharge.innerHTML = '$' + amountField.value;
        amountToInvest.innerHTML = '$' + amountField.value;
        netProfit.innerHTML = '$' + profit;
    </script>
@endsection
