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
                        <form action="{{ route('dashboard.investment.new', 1) }}" class="plan-iv" method="GET">
                            <div class="plan-iv-currency text-center">
                                <ul class="nav nav-switch nav-tabs bg-white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">USD</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-iv-list nk-slider nk-slider-s2">
                                <ul class="plan-list slider-init"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[						{"breakpoint": 992,"settings":{"slidesToShow": 2}},						{"breakpoint": 768,"settings":{"slidesToShow": 1}}					]}'>
                                    @foreach ($products as $product)
                                    <li class="plan-item">
                                        <input type="radio" id="plan-iv-{{  $product->id  }}" name="plan-iv" value="{{ $product->id }}" class="plan-control" required/>
                                        <div class="plan-item-card">
                                            <div class="plan-item-head">
                                                <div class="plan-item-heading">
                                                    <h4 class="plan-item-title card-title title">
                                                        {{ $product->name }}
                                                    </h4>
                                                    <p class="sub-text">
                                                        {{ $product->category->name }}
                                                    </p>
                                                </div>
                                                <div class="plan-item-summary card-text">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="lead-text">{{ number_format($product->interest_rate, 2) }}%</span><span class="sub-text">Interest Rate</span>
                                                        </div>
                                                        <div class="col-6">
                                                            @php
                                                                $interval = \Carbon\CarbonInterval::months($product->tenor);
                                                            @endphp
                                                            <span class="lead-text">{{ $interval->totalDays }}</span><span class="sub-text">Term
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
                                                            - <span class="desc-data">${{ number_format($product->min_deposit, 2) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Max Deposit</span>
                                                            - <span class="desc-data">${{ number_Format($product->max_deposit, 2) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Deposit Return</span>
                                                            - <span class="desc-data">Yes</span>
                                                        </li>
                                                        <li>
                                                            <span class="desc-label">Total Return</span>
                                                            - <span class="desc-data">{{ $product->interest_rate }}%</span>
                                                        </li>
                                                    </ul>
                                                    <div class="plan-item-action">
                                                        <label for="plan-iv-{{ $product->id }}" class="plan-label"><span
                                                                class="plan-label-base">Choose this plan</span><span
                                                                class="plan-label-selected">Plan Selected</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="plan-iv-actions text-center">
                                <button class="btn btn-primary btn-lg" type='submit'>
                                    <span>Continue to Invest</span>
                                    <em class="icon ni ni-arrow-right"></em>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
