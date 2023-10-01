@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    @if ($user->wallet->active_account === 'demo')
                        <div class="alert alert-info">
                            You're currently using your demo account, click the user icon on the navigation to switch
                        </div>
                    @endif
                    <div class="nk-block-head">
                        <div class="nk-block-between-md g-3">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><span>Welcome!</span></div>
                                <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                    <div>
                                        <h2 class="nk-block-title fw-normal">
                                            {{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                        </h2>
                                    </div>
                                    <div>
                                        <a href="{{ url('account/investments') }}" class="btn btn-white btn-light">My Plans
                                            <em class="icon ni ni-arrow-long-right ms-2"></em></a>
                                    </div>
                                </div>
                                <div class="nk-block-des">
                                    <p>
                                        At a glance summary of your investment account. Have
                                        fun!
                                    </p>
                                </div>
                            </div>
                            <div class="nk-block-head-content d-none d-md-block">
                                <div class="nk-slider nk-slider-s1">
                                    <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                        @if ($investments->count() > 0)
                                            @foreach ($investments as $investment)
                                                <div class="slider-item">
                                                    <div class="nk-iv-wg1">
                                                        <div class="nk-iv-wg1-sub sub-text">
                                                            My Active Plans
                                                        </div>
                                                        <h6 class="nk-iv-wg1-info title">
                                                            {{ $investment->product->name }} -
                                                            {{ ($investment->daily_profit_amount / $investment->invested_amount) * 100 }}%
                                                            for
                                                            {{ $investment->product->tenor }}
                                                        </h6>
                                                        <a href="{{ route('dashboard.userInvestmentInfo', $investment->id) }}"
                                                            class="nk-iv-wg1-link link link-light"><em
                                                                class="icon ni ni-trend-up"></em>
                                                            <span>Check Details</span></a>
                                                        <div class="nk-iv-wg1-progress">
                                                            <div class="progress-bar bg-primary" data-progress="80">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">
                                                        My Active Plans
                                                    </div>
                                                    <h6 class="nk-iv-wg1-info title">
                                                        Nothing Here!,
                                                    </h6>
                                                    <a href="#" class="nk-iv-wg1-link link link-light"><em
                                                            class="icon ni ni-trend-up"></em>
                                                        <span>you have no running investments</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="slider-dots"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="nk-block">
                        <div class="nk-news card card-bordered">
                            <div class="card-inner">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <p>
                                                Do you know the latest update of 2022?
                                                <span>
                                                    A overview of our is now available on
                                                    YouTube</span>
                                            </p>
                                            <em class="icon ni ni-external"></em>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="nk-block">
                        <div class="row gy-gs">
                            <div class="col-md-6 col-lg-4">
                                <div class="nk-wg-card is-dark card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">
                                                    Available Balance
                                                    <em class="icon ni ni-info"></em>
                                                </h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                {{-- Live balance --}}
                                                @if ($user->wallet->active_account === 'live')
                                                    <div class="nk-iv-wg2-amount">
                                                        ${{ number_format($user?->wallet?->balance_after, 2) ?? 0 }}
                                                        <span class="change up"><span
                                                                class="sign"></span>{{ number_format((($user?->wallet?->balance_after - $user?->wallet?->balance_before) / ($user?->wallet?->balance_after > 0 ? $user?->wallet?->balance_after : 1)) * 100, 2) }}%</span>
                                                    </div>
                                                @else
                                                    <div class="nk-iv-wg2-amount">
                                                        {{-- Calculate Change in balance --}}
                                                        @php
                                                            $balanceChangePercentage = (($user?->wallet?->demo_balance_after - $user?->wallet?->demo_balance_before) / ($user?->wallet?->demo_balance_after > 0 ? $user?->wallet?->demo_balance_after : 1)) * 100;
                                                        @endphp
                                                        ${{ number_format($user?->wallet?->demo_balance_after, 2) ?? 0 }}
                                                        <span
                                                            class="change {{ $balanceChangePercentage >= 0 ? 'up' : 'down' }}"><span
                                                                class="sign"></span>{{ number_format($balanceChangePercentage, 2) }}%</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="nk-wg-card is-s1 card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">
                                                    Total Invested <em class="icon ni ni-info"></em>
                                                </h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                @php
                                                    // Calculate change in total invested, by getting the percentage change from all before and after balance of investments
                                                    $currentInvestmentBalance = $user?->investments?->where('active_account', $user->wallet->active_account)->sum('current_balance');
                                                    $previousInvestmentBalance = $user?->investments?->where('active_account', $user->wallet->active_account)->sum('previous_balance');

                                                    $changeInBalancePercentage = (($currentInvestmentBalance - $previousInvestmentBalance) / $currentInvestmentBalance) * 100;
                                                @endphp
                                                <div class="nk-iv-wg2-amount">
                                                    ${{ number_format($user?->investments?->where('active_account', $user->wallet->active_account)->sum('invested_amount'), 2) ?? 0 }}
                                                    <span
                                                        class="change {{ $changeInBalancePercentage >= 0 ? 'up' : 'down' }}"><span
                                                            class="sign"></span>{{ number_format($changeInBalancePercentage, 2) }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="nk-wg-card is-s3 card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">
                                                    Total Profits <em class="icon ni ni-info"></em>
                                                </h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount">
                                                    ${{ $user?->investments?->sum('current_profit_amount') ?? 0 }}
                                                    <span class="change down"><span class="sign"></span>1.4%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row gy-gs">
                            <div class="col-md-6 col-lg-4">
                                <div class="nk-wg-card card card-bordered h-100">
                                    <div class="card-inner h-100">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">Balance in Account</h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                @if ($user->wallet->active_account == 'live')
                                                    <div class="nk-iv-wg2-amount ui-v2">
                                                        ${{ number_format($user?->wallet?->balance_after + $user?->investments->where('status', 'active')->sum('invested_amount') ?? 0, 2) }}
                                                    </div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li>
                                                            <span class="item-label">Available Funds</span><span
                                                                class="item-value">${{ number_format($user?->wallet?->balance_after ?? 0, 2) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="item-label">Invested Funds</span><span
                                                                class="item-value">${{ number_format($user?->investments->where('status', 'active')->sum('invested_amount') ?? 0, 2) }}</span>
                                                        </li>
                                                        <li class="total">
                                                            <span class="item-label">Total</span><span
                                                                class="item-value">${{ number_format($user?->wallet?->balance_after + $user?->investments->where('status', 'active')->where('active_account', 'live')->sum('invested_amount') ?? 0, 2) }}</span>
                                                        </li>
                                                    </ul>
                                                @else
                                                    <div class="nk-iv-wg2-amount ui-v2">
                                                        ${{ number_format($user?->wallet?->demo_balance_after + $user?->investments->where('status', 'active')->where('active_account', 'demo')->sum('invested_amount') ?? 0, 2) }}
                                                    </div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li>
                                                            <span class="item-label">Available Funds</span><span
                                                                class="item-value">${{ number_format($user?->wallet?->demo_balance_after ?? 0, 2) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="item-label">Invested Funds</span><span
                                                                class="item-value">${{ number_format($user?->investments->where('status', 'active')->where('active_account','demo')->sum('invested_amount') ?? 0, 2) }}</span>
                                                        </li>
                                                        <li class="total">
                                                            <span class="item-label">Total</span><span
                                                                class="item-value">${{ number_format($user?->wallet?->demo_balance_after + $user?->investments->where('status', 'active')->where('active_account', 'demo')->sum('invested_amount') ?? 0, 2) }}</span>
                                                        </li>
                                                    </ul>
                                                @endif
                                            </div>
                                            <div class="nk-iv-wg2-cta">
                                                <a href="#" class="btn btn-primary btn-lg btn-block">Withdraw
                                                    Funds</a><a href="#" class="btn btn-trans btn-block">Deposit
                                                    Funds</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="nk-wg-card card card-bordered h-100">
                                    <div class="card-inner h-100">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">
                                                    This Month Profit
                                                    <em class="icon ni ni-info text-primary"></em>
                                                </h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount ui-v2">
                                                    ${{ $currentMonthProfitSum }}
                                                    <span class="change up"><span class="sign"></span>4.5%</span>
                                                </div>
                                                <ul class="nk-iv-wg2-list">
                                                    <li>
                                                        <span class="item-label">Profits</span><span
                                                            class="item-value">${{ $user->investments->sum('current_profit_amount') }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="item-label">Referrals</span><span
                                                            class="item-value">{{ $user->referrals->count() }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="item-label">Rewards</span><span
                                                            class="item-value">{{ $user->current_referral_earnings }}</span>
                                                    </li>
                                                    <li class="total">
                                                        <span class="item-label">Total Profit</span><span
                                                            class="item-value">${{ $user->investments->sum('current_profit_amount') + $user->current_referral_earnings }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg2-cta">
                                                <a href="{{ route('dashboard.investment.products') }}" class="btn btn-primary btn-lg btn-block">Invest &
                                                    Earn</a>
                                                <div class="cta-extra">
                                                    Earn up to 25$
                                                    <a href="#" class="link link-dark">Refer friend!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="nk-wg-card card card-bordered h-100">
                                    <div class="card-inner h-100">
                                        <div class="nk-iv-wg2">
                                            <div class="nk-iv-wg2-title">
                                                <h6 class="title">My Investment</h6>
                                            </div>
                                            <div class="nk-iv-wg2-text">
                                                <div class="nk-iv-wg2-amount ui-v2">
                                                    {{ $investments->count() }} <span
                                                        class="sub">{{ $investments->count() }}</span>
                                                    Active
                                                </div>
                                                <ul class="nk-iv-wg2-list">
                                                    @if ($investments->count() > 0)
                                                        @foreach ($investments as $investment)
                                                            <li>
                                                                <span class="item-label"><a href="#">{{ $investment->product->name }}</a>
                                                                    <small>- for {{ $investment->product->tenor }}</small></span><span
                                                                    class="item-value">${{ number_format($investment->invested_amount, 2) }}</span>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>
                                                            <span class="item-label"><a href="#">Nothing here!</a>
                                                                <small>, You have no running investments</small></span>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="nk-iv-wg2-cta">
                                                <a href="{{ url('account/investments') }}" class="btn btn-light btn-lg btn-block">See
                                                    all Investment</a>
                                                <div class="cta-extra">
                                                    Check out
                                                    <a href="#" class="link link-dark">Analytic
                                                        Report</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="nk-refwg">
                                <div class="nk-refwg-invite card-inner">
                                    <div class="nk-refwg-head g-3">
                                        <div class="nk-refwg-title">
                                            <h5 class="title">Refer Us & Earn</h5>
                                            <div class="title-sub">
                                                Use the bellow link to invite your friends.
                                            </div>
                                        </div>
                                        <div class="nk-refwg-action">
                                            <a href="#" class="btn btn-primary">Invite</a>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-url">
                                        <div class="form-control-wrap">
                                            <div class="form-clip clipboard-init" data-clipboard-target="#refUrl"
                                                data-success="Copied" data-text="Copy Link">
                                                <em class="clipboard-icon icon ni ni-copy"></em>
                                                <span class="clipboard-text">Copy Link</span>
                                            </div>
                                            <div class="form-icon">
                                                <em class="icon ni ni-link-alt"></em>
                                            </div>
                                            <input type="text" class="form-control copy-text" id="refUrl"
                                                value="https://dineriusvest.com/signup?ref={{ strtoupper($user->referral_code) }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-refwg-stats card-inner bg-lighter">
                                    <div class="nk-refwg-group g-3">
                                        <div class="nk-refwg-name">
                                            <h6 class="title">
                                                My Referral
                                                <em class="icon ni ni-info" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="Referral Informations"></em>
                                            </h6>
                                        </div>
                                        <div class="nk-refwg-info g-3">
                                            <div class="nk-refwg-sub">
                                                <div class="title">{{ $user->referrals->count() }}</div>
                                                <div class="sub-text">Total Joined</div>
                                            </div>
                                            <div class="nk-refwg-sub">
                                                <div class="title">{{ $user->current_referral_earnings }}</div>
                                                <div class="sub-text">Referral Earn</div>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-more dropdown mt-n1 me-n1">
                                            <a href="#" class="btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                <ul class="link-list-plain sm">
                                                    <li><a href="#">7 days</a></li>
                                                    <li><a href="#">15 Days</a></li>
                                                    <li><a href="#">30 Days</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-ck">
                                        <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
