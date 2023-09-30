@extends('layouts.dashboard.app')

@section('title', 'Account - Dashboard')

@section('content')
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub">
                                <span>Choose an Option</span>
                            </div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                                <div class="nk-block-des">
                                    <p>Choose your investment plan and start earning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <form action="https://dashlite.net/demo6/invest/invest-form.html" class="plan-iv">
                            <div class="plan-iv-currency text-center">
                                <ul class="nav nav-switch nav-tabs bg-white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">USD</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">EUR</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">BTC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">ETH</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-iv-list nk-slider nk-slider-s2">
                                <ul class="plan-list slider-init"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[						{"breakpoint": 992,"settings":{"slidesToShow": 2}},						{"breakpoint": 768,"settings":{"slidesToShow": 1}}					]}'>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-1" name="plan-iv" class="plan-control" />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Starter
                                                    </h4>
                                                    <p class="sub-text">
                                                        Enjoy entry level of invest & earn money.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">1.67%</span><span class="sub-text">Daily
                                                                Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">30</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$250</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$1,999</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">125%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-1" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-2" name="plan-iv" class="plan-control" />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Silver
                                                    </h4>
                                                    <p class="sub-text">
                                                        Best plan for user to invest & earn money.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">4.76%</span><span class="sub-text">Daily
                                                                Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">21</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$2000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$4,999</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">200%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-2" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-3" name="plan-iv" class="plan-control" />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Dimond
                                                    </h4>
                                                    <p class="sub-text">
                                                        Advance level of invest & earn to quickly.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">14.29%</span><span
                                                                class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">14</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$5000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$20,000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">300%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-3" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-4" name="plan-iv" class="plan-control" />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Starter
                                                    </h4>
                                                    <p class="sub-text">
                                                        Enjoy entry level of invest & earn money.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">1.67%</span><span
                                                                class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">30</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$250</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$1,999</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">125%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-4" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-5" name="plan-iv" class="plan-control" />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Silver
                                                    </h4>
                                                    <p class="sub-text">
                                                        Best plan for user to invest & earn money.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">4.76%</span><span
                                                                class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">21</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$2000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$4,999</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">200%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-5" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-6" name="plan-iv" class="plan-control"
                                            checked />
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        Dimond
                                                    </h4>
                                                    <p class="sub-text">
                                                        Advance level of invest & earn to quickly.
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">14.29%</span><span
                                                                class="sub-text">Daily Interest</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <span class="lead-text">14</span><span class="sub-text">Term
                                                                Days</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-item-body">
                                                <div class="plan-item-desc card-text">
                                                    <ul class="plan-item-desc-list">
                                                        <li>
                                                            <span class="desc-label">Min Deposit</span>
                                                            - <span class="desc-data">$5000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">$20,000</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">300%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-6" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-iv-actions text-center">
                                <a class="btn btn-primary btn-lg" href="{{ route('dashboard.investment.new', 1) }}">
                                    <span>Continue to Invest</span>
                                    <em class="icon ni ni-arrow-right"></em>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
