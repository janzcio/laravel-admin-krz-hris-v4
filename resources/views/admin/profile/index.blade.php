@extends('layouts.backend')

@section('css-extend')
    <style type="text/css">
        .hidden-element{
            display: none;
        }

        .form-group>label{
            font-weight: bolder;
        }

        .table-children-display, .table-children-edit{
            width: 100% !important;
        }
    </style>
    <!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
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
                    <!-- <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p> -->
                    <div class="form-group"><label>About me:</label> 
                      <p>{{ isset($data) && $data->bio != '' ? $data->bio : '---'}}</p>
                      <textarea type="text" name="bio" placeholder="Enter Bio" class="form-control hidden-element"></textarea>
                    </div>
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
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Authentication <small>Update your credential here</small></h5>
                
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        
                        <form role="form" class="form-update-cred">
                            <div class="form-group"><label>Email</label> <input type="email" name="newemail" placeholder="Enter email" class="form-control" value="{{ $user->email }}"></div>
                            <div class="form-group">
                                <label>New Password</label> 
                                <input name="new-password" type="password" placeholder="Password" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label> 
                                <input name="cofirm-password" type="password" placeholder="Confirm Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Current Password</label> 
                                <input name="current-password" type="password" placeholder="Current Password" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-success float-right m-t-n-xs btn-update-credential" type="button"><strong>Update</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary pull-left"><i class="fa fa-arrow-left"></i> Back</button>
        </div>
    </div>
    <div class="col-md-8">
        <input name="_token" value="{{ csrf_token() }}" type="hidden" />
        <input name="id" value="{{ isset($data) ? $data->id : 0 }}" type="hidden" />
        @include ('admin.profile.profile-ibox',["isupdate" => $isUpdate]) <!-- 0 for not update 1 for update -->
    </div>
</div>
@endsection

@section('js-extend')
    <!-- Toastr -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
        })

        $('div>p').on('click', function(){
            $(this).hide();
            $(this).next().val(($(this).text() == '---' ? '' : $(this).text()));
            $(this).next().show();
            $(this).next().focus();
        });

        $('.hidden-element').on('mouseleave', function(){
            var vm = this;
            var id = '<?= $data->id; ?>';
            var closest_label = $(this).parent().find('label').text().replace(":","");
            var element = $(this).attr('name');
            var element_value = $(this).val();
            if (element_value !== '') {
                $.ajax({
                  url: '{!! route('profile_update') !!}',
                  type: "post",
                  dataType: "html",
                  data:{
                    _token: '{!! csrf_token() !!}', id : id, element : element, element_value : element_value
                  },
                  success: function(res){
                    if (res === 'true') {
                       $(vm).prev().text(element_value);
                        toastr.success('Success!', closest_label + ' Updated successfully');
                    }
                  }
                });
            }
            $(this).hide();
            $(this).prev().show();
        });

        $('.btn-update-credential').on('click', function(){
            var id = '<?= $data->id; ?>';
            var email = $('input[name="newemail"]').val();
            var newpassword = $('input[name="new-password"]').val();
            var confirmpassword = $('input[name="cofirm-password"]').val();
            var currentpassword = $('input[name="current-password"]').val();

            if (newpassword === confirmpassword) {
                $.ajax({
                  url: '{!! route('profile_update_credential') !!}',
                  type: "post",
                  dataType: "json",
                  data:{
                    _token: '{!! csrf_token() !!}', email : email, newpassword : newpassword, currentpassword : currentpassword, id : id
                  },
                  success: function(res){
                    if (res.status === 'success') {
                       toastr.success('Succes!', res.message);
                    }else{
                        toastr.error('Error!', res.message);
                    }
                  },error: function(){
                        toastr.error('Error!', 'something wentwrong!');
                  }
                });
            }else{
                toastr.error('Error!', ' Mismatched password.');
            }
            
        });

        $('.form-update-cred input').keyup(function(e){
            if(e.keyCode == 13)
            {
                $('.btn-update-credential').click();
            }
        });


    </script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/custom/user.js') }}"></script>
@endsection
