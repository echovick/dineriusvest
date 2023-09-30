@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>My Investments</span></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">
                                        Invested Schemes
                                    </h2>
                                    <div class="nk-block-des">
                                        <p>
                                            Here is your current balance and your active
                                            investement plans.
                                        </p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        <li>
                                            <a href="#" class="btn btn-primary"><span>Withdraw</span>
                                                <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard.investment.new', 1) }}"
                                                class="btn btn-white btn-light"><span>Invest More</span>
                                                <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                        </li>
                                        <li class="opt-menu-md dropdown">
                                            <a href="#" class="btn btn-white btn-light btn-icon"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-coin-alt"></em><span>Curreny
                                                                Settings</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><em class="icon ni ni-notify"></em><span>Push
                                                                Notification</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="row gy-gs">
                                        <div class="col-lg-5">
                                            <div class="nk-iv-wg3">
                                                <div class="nk-iv-wg3-title">Total Balance</div>
                                                <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                    <div class="nk-iv-wg3-sub">
                                                        <div class="nk-iv-wg3-amount">
                                                            <div class="number">
                                                                {{ number_format($allUserInvestments->sum('invested_amount'), 2) }}
                                                                <small class="currency currency-usd">USD</small>
                                                            </div>
                                                        </div>
                                                        <div class="nk-iv-wg3-subtitle">
                                                            Available Balance
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="nk-iv-wg3">
                                                <div class="nk-iv-wg3-title">
                                                    This Month
                                                    <em class="icon ni ni-info-fill" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" title="Current Month Profit"></em>
                                                </div>
                                                <div class="nk-iv-wg3-group flex-md-nowrap g-4">
                                                    <div class="nk-iv-wg3-sub-group gx-4">
                                                        <div class="nk-iv-wg3-sub">
                                                            <div class="nk-iv-wg3-amount">
                                                                <div class="number">
                                                                    ${{ number_format($allUserInvestmentsThisMonth->sum('current_profit_amount'), 2) }}
                                                                </div>
                                                            </div>
                                                            <div class="nk-iv-wg3-subtitle">
                                                                Total Profit
                                                            </div>
                                                        </div>
                                                        <div class="nk-iv-wg3-sub">
                                                            <span class="nk-iv-wg3-plus text-soft"><em
                                                                    class="icon ni ni-plus"></em></span>
                                                            <div class="nk-iv-wg3-amount">
                                                                <div class="number-sm">${{ number_format($todayProfitSum,2) }}
                                                                </div>
                                                            </div>
                                                            <div class="nk-iv-wg3-subtitle">
                                                                Today Profit
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-sub flex-grow-1 ms-md-3">
                                                        <div class="nk-iv-wg3-ck">
                                                            <canvas class="chart-profit" id="profitCM"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <ul class="nk-iv-wg3-nav">
                                        <li>
                                            <a href="#"><em class="icon ni ni-notes-alt"></em>
                                                <span>Go to Transaction</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><em class="icon ni ni-growth"></em>
                                                <span>Analytic Reports</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><em class="icon ni ni-report-profit"></em>
                                                <span>Monthly Statement</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><em class="icon ni ni-help"></em>
                                                <span>Investment Tips</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">
                                    Active Plan <span class="count text-base">({{ $allUserInvestments->count() }})</span>
                                </h5>
                            </div>
                        </div>
                        <div class="nk-iv-scheme-list">
                            @if ($allActiveUserInvestments)
                                @foreach ($allActiveUserInvestments as $activeInvestment)
                                    <div class="nk-iv-scheme-item">
                                        <div class="nk-iv-scheme-icon is-running">
                                            <em class="icon ni ni-update"></em>
                                        </div>
                                        <div class="nk-iv-scheme-info">
                                            <div class="nk-iv-scheme-name">
                                                {{ $activeInvestment->product->name }} - Daily
                                                {{ ($activeInvestment->daily_profit_amount/$userProduct->invested_amount) * 100 }}% for
                                                {{ $activeInvestment->product->tenor }}
                                            </div>
                                            <div class="nk-iv-scheme-desc">
                                                Invested Amount - <span
                                                    class="amount">${{ $activeInvestment->invested_amount }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-term">
                                            <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Start Date</span><span
                                                    class="nk-iv-scheme-value date">{{ \Carbon\Carbon::parse($activeInvestment->start_at)->format('M d, Y') }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">End Date</span><span
                                                    class="nk-iv-scheme-value date">{{ \Carbon\Carbon::parse($activeInvestment->end_at)->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-amount">
                                            <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                                @php
                                                    // Get capital
                                                    $capital = $activeInvestment->current_balance;

                                                    // Get profit
                                                    $profit = ($activeInvestment->daily_profit_amount / 100) * $capital;

                                                @endphp
                                                <span class="nk-iv-scheme-label text-soft">Total Return</span><span
                                                    class="nk-iv-scheme-value amount">$ {{ $capital + $profit }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span><span
                                                    class="nk-iv-scheme-value amount">$ {{ $profit }}
                                                    <span class="amount-ex">~ ${{ $profit + 90 }}</span></span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-more">
                                            <a class="btn btn-icon btn-lg btn-round btn-trans"
                                                href="{{ route('dashboard.userInvestmentInfo', $activeInvestment?->id) }}"><em
                                                    class="icon ni ni-forward-ios"></em></a>
                                        </div>
                                        <div class="nk-iv-scheme-progress">
                                            <div class="progress-bar" data-progress="25"></div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-info">
                                    <p>No Active Investments</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">
                                        Recently End <span
                                            class="count text-base">({{ $allEndedUserInvestments->count() }})</span>
                                    </h5>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="#"><em class="icon ni ni-dot-box"></em> Go to Archive</a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-iv-scheme-list">
                            @if ($allEndedUserInvestments)
                                @foreach ($allEndedUserInvestments as $inactiveInvestment)
                                    <div class="nk-iv-scheme-item">
                                        <div class="nk-iv-scheme-icon is-running">
                                            <em class="icon ni ni-update"></em>
                                        </div>
                                        <div class="nk-iv-scheme-info">
                                            <div class="nk-iv-scheme-name">
                                                {{ $inactiveInvestment->product->name }} - Daily
                                                {{ ($inactiveInvestment->daily_profit_amount/$userProduct->invested_amount) * 100 }}% for
                                                {{ $inactiveInvestment->product->tenor }}
                                            </div>
                                            <div class="nk-iv-scheme-desc">
                                                Invested Amount - <span
                                                    class="amount">${{ $inactiveInvestment->invested_amount }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-term">
                                            <div class="nk-iv-scheme-start nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Start Date</span><span
                                                    class="nk-iv-scheme-value date">{{ \Carbon\Carbon::parse($inactiveInvestment->start_at)->format('M d, Y') }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-end nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">End Date</span><span
                                                    class="nk-iv-scheme-value date">{{ \Carbon\Carbon::parse($inactiveInvestment->end_at)->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-amount">
                                            <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                                                @php
                                                    // Get capital
                                                    $capital = $inactiveInvestment->current_balance;

                                                    // Get profit
                                                    // Calculate total profit earned so far
                                                    $createdAt = \Carbon\Carbon::parse($userProduct->created_at);
                                                    $now = \Carbon\Carbon::now();
                                                    // Calculate the difference in days
                                                    $numberOfDays = $createdAt->diffInDays($now);

                                                    // Total profit
                                                    $profit = $numberOfDays * $userProduct->daily_profit_amount;

                                                @endphp
                                                <span class="nk-iv-scheme-label text-soft">Total Return</span><span
                                                    class="nk-iv-scheme-value amount">$ {{ $capital + $profit }}</span>
                                            </div>
                                            <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                                                <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span><span
                                                    class="nk-iv-scheme-value amount">$ {{ $profit }}
                                                    <span class="amount-ex">~ ${{ $profit + 90 }}</span></span>
                                            </div>
                                        </div>
                                        <div class="nk-iv-scheme-more">
                                            <a class="btn btn-icon btn-lg btn-round btn-trans"
                                                href="{{ route('dashboard.userInvestmentInfo', $inactiveInvestment?->id) }}"><em
                                                    class="icon ni ni-forward-ios"></em></a>
                                        </div>
                                        <div class="nk-iv-scheme-progress">
                                            <div class="progress-bar" data-progress="25"></div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-info">
                                    <p>No Inactive Investments</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
