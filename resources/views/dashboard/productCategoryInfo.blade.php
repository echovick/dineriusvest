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
                                <a href="" class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            </div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">
                                    {{ $category?->name }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block invest-block">
                        <form action="#" class="invest-form">
                            <div class="row g-gs">
                                <div class="col-lg-9">
                                    @foreach ($category->products as $product)
                                        <div class="invest-field form-group">
                                            <input type="hidden" value="silver" name="iv-plan" id="invest-choose-plan" />
                                            <div class="dropdown invest-cc-dropdown">
                                                <a href="#" class="invest-cc-chosen dropdown-indicator"
                                                    data-bs-toggle="dropdown">
                                                    <div class="coin-item">
                                                        <div class="coin-icon">
                                                            <em class="icon ni ni-offer-fill"></em>
                                                        </div>
                                                        <div class="coin-info">
                                                            <span class="coin-name">{{ $product->name }}</span>
                                                            {{-- <span class="coin-text">{{ strlen($product->description) > 150 ? substr($product->description, 0, 150) : $product->description }}</span> --}}
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                    <li class="invest-cc-item selected">
                                                        <a href="#" class="invest-cc-opt" data-plan="silver">
                                                            <div class="coin-item">
                                                                <div class="coin-info">
                                                                    <span class="coin-text">
                                                                        {{ $product->description }}</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <div class="d-flex justify-content-end">
                                                        <a class="btn btn-sm btn-primary m-3"
                                                            href="{{ route('dashboard.investmentInfo', $product->id) }}">Learn
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
