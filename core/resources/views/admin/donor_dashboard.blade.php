@extends('admin.layouts.app')
@section('panel')
    <div class="row mt-50 mb-none-30">
        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-user-tie"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{ $don['all'] }}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Donor')</span>
                    </div>
                    <a href="{{ route('admin.donor.index') }}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--18 b-radius--10 box-shadow">
                <div class="icon">
                   <i class="las la-user-circle"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{ $don['pending']  }}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Pending Donor')</span>
                    </div>
                    <a href="{{ route('admin.donor.pending') }}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--17 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-users-cog"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{ $don['approved'] }}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Approved Donor')</span>
                    </div>

                    <a href="{{route('admin.donor.approved')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--14 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-user-injured"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{ $don['banned'] }}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Banned Donor')</span>
                    </div>

                    <a href="{{ route('admin.donor.banned') }}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--19 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="las la-tint"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{__($blood)}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Blood Group')</span>
                    </div>
                    <a href="{{route('admin.blood.index')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--3 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="las la-city"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{__($city)}}</span>
                        <span class="currency-sign">{{__($general->cur_text)}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total City')</span>
                    </div>
                    <a href="{{route('admin.city.index')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--12 b-radius--10 box-shadow" >
                <div class="icon">
                    <i class="las la-location-arrow"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{__($locations)}}</span>
                        <span class="currency-sign">{{__($general->cur_text)}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Location')</span>
                    </div>
                    <a href="{{route('admin.location.index')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--15 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="lab la-adversal"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{__($ads)}}</span>
                    </div>
                    <div class="desciption">
                        <span>@lang('Total Advertisement')</span>
                    </div>

                    <a href="{{route('admin.ads.index')}}" class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>
    </div>
@endsection