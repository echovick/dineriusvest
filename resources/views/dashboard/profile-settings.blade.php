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
                            <h2 class="nk-block-title fw-normal">Account Setting</h2>
                            <div class="nk-block-des">
                                <p>
                                    You have full control to manage your own account
                                    setting.
                                    <span class="text-primary"><em class="icon ni ni-info"></em></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('page.profile') }}">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('page.profile-settings') }}">Profile Setting</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="profile-notify.html">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile-connected.html">Connect Social</a>
                        </li> --}}
                    </ul>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Security Settings</h5>
                                <div class="nk-block-des">
                                    <p>
                                        These settings are helps you keep your account secure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>Save my Activity Logs</h6>
                                            <p>
                                                You can save your all activity logs including
                                                unusual activity detected.
                                            </p>
                                        </div>
                                        <div class="nk-block-actions">
                                            <ul class="align-center gx-3">
                                                <li class="order-md-last">
                                                    <div class="custom-control custom-switch me-n2">
                                                        <input type="checkbox" class="custom-control-input" checked=""
                                                            id="activity-log" /><label class="custom-control-label"
                                                            for="activity-log"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>Change Password</h6>
                                            <p>
                                                Set a unique password to protect your account.
                                            </p>
                                        </div>
                                        <div class="nk-block-actions flex-shrink-sm-0">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                <li class="order-md-last">
                                                    <a href="{{ route('page.changePassword') }}" class="btn btn-primary">Change Password</a>
                                                </li>
                                                <li>
                                                    <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2,
                                                            2019</span></em>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                        <div class="nk-block-text">
                                            <h6>
                                                2FA Authentication
                                                <span class="badge bg-success">Enabled</span>
                                            </h6>
                                            <p>
                                                Secure your account with 2FA security. When it is
                                                activated you will need to enter not only your
                                                password, but also a special code using app. You
                                                can receive this code by in mobile app.
                                            </p>
                                        </div>
                                        <div class="nk-block-actions">
                                            <a href="#" class="btn btn-primary">Disable</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-title-group">
                                    <h6 class="nk-block-title title">Recent Activity</h6>
                                    <a href="profile-activity.html" class="link">See full log</a>
                                </div>
                                <div class="nk-block-des">
                                    <p>
                                        This information about the last login activity on your
                                        account.
                                    </p>
                                </div>
                            </div>
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
                                    @foreach ($activities as $item)
                                        <tr>
                                            <td class="tb-col-os">{{ $item['device'] }}</td>
                                            <td class="tb-col-ip">
                                                <span class="sub-text">
                                                    {{ $item['ip_address'] }}
                                                </span>
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
