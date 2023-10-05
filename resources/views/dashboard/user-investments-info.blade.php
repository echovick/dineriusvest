@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub">
                                <a href="schemes.html" class="text-soft back-to"><em class="icon ni ni-arrow-left">
                                    </em><span>My Investment</span></a>
                            </div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">
                                        @php
                                            $invested_amount = $userProduct->invested_amount > 0 ? $userProduct->invested_amount : 1;
                                        @endphp
                                        {{ $userProduct->product->name }} - Daily
                                        {{ ($userProduct->daily_profit_amount / $invested_amount) * 100 }}% for
                                        {{ $userProduct->product->tenor }}
                                    </h2>
                                    <div class="nk-block-des">
                                        <p>
                                            INV-{{ $userProduct?->id }}
                                            <span class="badge bg-outline bg-primary">
                                                {{ $userProduct->status === 'active' ? 'Running' : 'Inactive' }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        <li class="order-md-last">
                                            <a href="#" class="btn btn-danger"><em class="icon ni ni-cross"></em>
                                                <span>Cancel this plan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-icon btn-light"><em
                                                    class="icon ni ni-reload"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-md-6">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">
                                                            ${{ number_format($userProduct->invested_amount, 2) }}</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">
                                                        Invested Amount
                                                    </div>
                                                </div>
                                                <div class="nk-iv-wg3-sub">
                                                    @php
                                                        // Get capital
                                                        $capital = $userProduct->invested_amount;

                                                        // Get current balance
                                                        $currentInvestmentValue = $userProduct->current_balance;

                                                        // Calculate total profit earned so far
                                                        $createdAt = \Carbon\Carbon::parse($userProduct->created_at);
                                                        $now = \Carbon\Carbon::now();
                                                        // Calculate the difference in days
                                                        $numberOfDays = $createdAt->diffInDays($now);

                                                        // Total profit
                                                        $totalProfitEarnedSofar = $numberOfDays * $userProduct->daily_profit_amount;

                                                        // Get previous profit amount
                                                        $previousProfitAmount = $userProduct->previous_profit_amount;

                                                        // Get current profit amount
                                                        $currentProfitAmount = $userProduct->current_profit_amount;

                                                        if ($previousProfitAmount > 0) {
                                                            $profitChange = (($currentProfitAmount - $previousProfitAmount) / $previousProfitAmount) * 100;
                                                        } else {
                                                            $profitChange = 0;
                                                        }

                                                        // Calculate change in total returns
                                                        $totalReturnChange = ($totalProfitEarnedSofar / ($capital + $totalProfitEarnedSofar)) * 100;
                                                        if ($totalReturnChange >= 0) {
                                                            $signClass = 'number-up';
                                                        } else {
                                                            $signClass = 'number-down';
                                                        }

                                                        // Get total expected profit
                                                        $expectedProfit = ($userProduct->product->interest_rate / 100) * $userProduct->invested_amount;
                                                        // Initialise expected profit to 1 if its less than 0 to avoid division by 0 error
                                                        if ($expectedProfit < 0) {
                                                            $expectedProfit = 1;
                                                        }

                                                        $profitChangePercentage = ($totalProfitEarnedSofar / $expectedProfit) * 100;
                                                        if ($profitChangePercentage >= 0) {
                                                            $profitChangePercentageSignClass = 'number-up';
                                                        } else {
                                                            $profitChangePercentageSignClass = 'number-down';
                                                        }
                                                    @endphp
                                                    <span class="nk-iv-wg3-plus text-soft"><em
                                                            class="icon ni ni-plus"></em></span>
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">
                                                            ${{ number_format($totalProfitEarnedSofar, 2) }}
                                                            <span
                                                                class="{{ $profitChangePercentageSignClass }}">{{ number_format($profitChangePercentage, 2) }}
                                                                %</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">
                                                        Profit Earned
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 offset-lg-2">
                                        <div class="nk-iv-wg3 ps-md-3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">
                                                            ${{ number_format($capital + $totalProfitEarnedSofar, 2) }}
                                                            <span
                                                                class="{{ $signClass }}">{{ number_format($totalReturnChange, 2) }}%
                                                                <em class="icon ni ni-info-fill" data-bs-toggle="tooltip"
                                                                    data-bs-placement="right"
                                                                    title="This is the percentage growth of your investment"></em></span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">
                                                        Total Return
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schemeDetails" class="nk-iv-scheme-details">
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Term</div>
                                        <div class="lead-text">{{ $userProduct?->product?->tenor }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term start at</div>
                                        <div class="lead-text">
                                            {{ \Carbon\Carbon::parse($userProduct->start_at)->format('M d, Y h:i A') }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term end at</div>
                                        <div class="lead-text">
                                            {{ \Carbon\Carbon::parse($userProduct->start_at)->format('M d, Y h:i A') }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Daily interest</div>
                                        <div class="lead-text">
                                            @php
                                                $invested_amount = $userProduct->invested_amount > 0 ? $userProduct->invested_amount : 1;
                                            @endphp
                                            ${{ ($userProduct->daily_profit_amount / $invested_amount) * 100 }}
                                        </div>
                                    </li>
                                </ul>
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Ordered date</div>
                                        <div class="lead-text">
                                            {{ \Carbon\Carbon::parse($userProduct->order_date)->format('M d, Y h:i A') }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Approved date</div>
                                        <div class="lead-text">
                                            {{ \Carbon\Carbon::parse($userProduct->approved_date)->format('M d, Y h:i A') }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Payment method</div>
                                        <div class="lead-text">USD Wallet</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">
                                            Paid <small>(fee include)</small>
                                        </div>
                                        <div class="lead-text">
                                            @php
                                                // Calculate commission fee
                                                $commissionFee;
                                            @endphp
                                            <span class="currency currency-usd">USD</span>
                                            {{ number_format($userProduct->invested_amount, 2) }}
                                        </div>
                                    </li>
                                </ul>
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Captial invested</div>
                                        <div class="lead-text">
                                            <span class="currency currency-usd">USD</span>
                                            {{ number_format($userProduct->invested_amount, 2) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Daily profit</div>
                                        <div class="lead-text">
                                            <span class="currency currency-usd">USD</span>
                                            {{ number_format($userProduct->daily_profit_amount, 2) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Net profit</div>
                                        <div class="lead-text">
                                            <span class="currency currency-usd">USD</span>
                                            {{ number_format($totalProfitEarnedSofar, 2) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Total return</div>
                                        <div class="lead-text">
                                            <span class="currency currency-usd">USD</span>
                                            {{ number_format($totalProfitEarnedSofar + $userProduct->invested_amount, 2) }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <h5 class="nk-block-title">Graph View</h5>
                        </div>
                        <div class="row g-gs">
                            <div class="col-lg-5">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner justify-center text-center h-100">
                                        <div class="nk-iv-wg5">
                                            <div class="nk-iv-wg5-head">
                                                <h5 class="nk-iv-wg5-title">Overview</h5>
                                            </div>
                                            <div class="nk-iv-wg5-ck">
                                                <input type="text" class="knob-half"
                                                    value="{{ number_format($profitChangePercentage, 2) }}"
                                                    data-fgColor="#6576ff" data-bgColor="#d9e5f7" data-thickness=".06"
                                                    data-width="300" data-height="155" data-displayInput="false" />
                                                <div class="nk-iv-wg5-ck-result">
                                                    <div class="text-lead">
                                                        ${{ number_format($userProduct->invested_amount + $totalProfitEarnedSofar, 2) }}
                                                    </div>
                                                    <div class="text-sub">
                                                        ${{ number_format($userProduct->daily_profit_amount, 2) }} / per
                                                        day
                                                    </div>
                                                </div>
                                                <div class="nk-iv-wg5-ck-minmax">
                                                    <span>${{ number_format($userProduct->invested_amount, 2) }}</span><span>${{ number_format($userProduct->invested_amount + $expectedProfit, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner justify-center text-center h-100">
                                        <div class="nk-iv-wg5">
                                            <div class="nk-iv-wg5-head">
                                                <h5 class="nk-iv-wg5-title">Net Profit</h5>
                                                <div class="nk-iv-wg5-subtitle">
                                                    Earn so far
                                                    <strong>{{ number_format($totalProfitEarnedSofar, 2) }}</strong>
                                                    <span class="currency currency-usd">USD</span>
                                                </div>
                                            </div>
                                            <div class="nk-iv-wg5-ck sm">
                                                <input type="text" class="knob-half"
                                                    value="{{ number_format($profitChangePercentage, 2) }}"
                                                    data-fgColor="#33d895" data-bgColor="#d9e5f7" data-thickness=".07"
                                                    data-width="240" data-height="125" data-displayInput="false" />
                                                <div class="nk-iv-wg5-ck-result">
                                                    <div class="text-lead sm">
                                                        @php
                                                            $invested_amount = $userProduct->invested_amount > 0 ? $userProduct->invested_amount : 1;;
                                                        @endphp
                                                        {{ ($userProduct->daily_profit_amount / $invested_amount) * 100 }}%
                                                    </div>
                                                    <div class="text-sub">Daily profit</div>
                                                </div>
                                                <div class="nk-iv-wg5-ck-minmax">
                                                    <span>$0.00</span><span>${{ number_format($expectedProfit, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner justify-center text-center h-100">
                                        <div class="nk-iv-wg5">
                                            <div class="nk-iv-wg5-head">
                                                <h5 class="nk-iv-wg5-title">Day Remain</h5>
                                                <div class="nk-iv-wg5-subtitle">
                                                    Earn so far
                                                    <strong>{{ number_format($userProduct->invested_amount + $totalProfitEarnedSofar, 2) }}</strong>
                                                    <span class="currency currency-usd">USD</span>
                                                </div>
                                            </div>
                                            <div class="nk-iv-wg5-ck sm">
                                                @php
                                                    // Get days data
                                                    $startDate = \Carbon\Carbon::parse($userProduct->start_at);
                                                    $endDate = \Carbon\Carbon::parse($userProduct->end_at);

                                                    // Calculate the difference in days
                                                    $numberOfDays = $startDate->diffInDays($endDate);

                                                    // Get the current date and time
                                                    $now = \Carbon\Carbon::now();

                                                    // Calculate the remaining days
                                                    $remainingDays = $now->diffInDays($endDate);
                                                    if($numberOfDays < 0){
                                                        $numberOfDays = 1;
                                                    }
                                                @endphp
                                                <input type="text" class="knob-half"
                                                    value="{{ 100 - ($remainingDays / $numberOfDays) * 100 }}"
                                                    data-fgColor="#816bff" data-bgColor="#d9e5f7" data-thickness=".07"
                                                    data-width="240" data-height="125" data-displayInput="false" />
                                                <div class="nk-iv-wg5-ck-result">
                                                    <div class="text-lead sm">{{ $remainingDays }} Days</div>
                                                    <div class="text-sub">day remain</div>
                                                </div>
                                                <div class="nk-iv-wg5-ck-minmax">
                                                    <span>0</span><span>{{ $numberOfDays }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <h5 class="nk-block-title">Transactions</h5>
                        </div>
                        <div class="card card-bordered">
                            <table class="table table-iv-tnx">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col-type">
                                            <span class="overline-title">Type</span>
                                        </th>
                                        <th class="tb-col-date">
                                            <span class="overline-title">Date</span>
                                        </th>
                                        <th class="tb-col-time tb-col-end">
                                            <span class="overline-title">Amount</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($userProduct->productTransactions)
                                        @foreach ($userProduct->productTransactions as $productTransaction)
                                            <tr>
                                                <td class="tb-col-type">
                                                    <span class="sub-text">{{ ucwords($productTransaction->type) }}</span>
                                                </td>
                                                <td class="tb-col-date">
                                                    <span class="sub-text">{{ $productTransaction->created_at }}</span>
                                                </td>
                                                <td class="tb-col-time tb-col-end">
                                                    <span
                                                        class="lead-text text-{{ $productTransaction->charge_type == 'debit' ? 'danger' : 'primary' }}">
                                                        {{ $productTransaction->charge_type == 'debit' ? '-' : '+' }}
                                                        {{ $productTransaction->amount }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
