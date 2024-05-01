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
                                <a class="back-to" href="profile.html"><em class="icon ni ni-arrow-left"></em><span>My
                                        Profile</span></a>
                            </div>
                            <h2 class="nk-block-title fw-normal">Login Activity</h2>
                            <div class="nk-block-des">
                                <p>
                                    Here is your last 20 login activities log.
                                    <span class="text-soft"><em class="icon ni ni-info"></em></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-block-title-group mb-3">
                            <h6 class="nk-block-title title">
                                Activity on your account
                            </h6>
                            <a href="#" class="link link-danger">Clear log</a>
                        </div>
                        <div class="card card-bordered">
                            <table class="table table-ulogs">
                                <thead class="table-light">
                                    <tr>
                                        <th class="tb-col-os">
                                            <span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span>
                                        </th>
                                        <th class="tb-col-ip">
                                            <span class="overline-title">IP</span>
                                        </th>
                                        <th class="tb-col-time">
                                            <span class="overline-title">Time</span>
                                        </th>
                                        <th class="tb-col-action">
                                            <span class="overline-title">&nbsp;</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activity as $item)
                                    <tr>
                                        <td class="tb-col-os">{{ $item['device'] }}</td>
                                        <td class="tb-col-ip">
                                            <span class="sub-text">{{ $item['ip_address'] }}</span>
                                        </td>
                                        <td class="tb-col-time">
                                            <span class="sub-text">{{ $item['created_at'] }}</span>
                                        </td>
                                        <td class="tb-col-action"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
