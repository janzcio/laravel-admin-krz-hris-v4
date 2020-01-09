@extends('layouts.backend')

@section('css-extend')
@endsection

@section('breadcrumb')
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Home</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="/Profile">Profile</a> 
            </li>
        </ol>

@endsection

@section('left-sidebar')
        @include ('layouts.lsidebar',["currentModule" => "profile"])
@endsection

@section('content')
<div class="row animated fadeInRight">
    <div class="col-md-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Profile Detail</h5>
            </div>
            <div>
                <div class="ibox-content no-padding border-left-right">
                    <img alt="image" class="img-fluid" src="{{ asset('inspinia_admin-v2.9.2/img/profile_big.jpg') }}">
                </div>
                <div class="ibox-content profile-content">
                    <h4><strong>{{ isset($data) ? $data->firstname : ''}} {{ isset($data) ? $data->surname : '' }}</strong></h4>
                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                    <h5>
                        About me
                    </h5>
                    <p>
                        {{ isset($data) ? $data->bio : '' }}
                    </p>
                    <!-- <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
        </div>
        <div>
            <button class="btn btn-primary pull-left"><i class="fa fa-arrow-left"></i> Back</button>
            <button class="btn btn-success pull-right">{{ $isUpdate == 1 ? 'Save' : 'Edit' }}</button>
        </div>
    </div>
    <div class="col-md-8">
        @include ('admin.profile.profile-ibox',["isupdate" => $isUpdate]) <!-- 0 for not update 1 for update -->
    </div>
</div>
@endsection

@section('js-extend')
@endsection
