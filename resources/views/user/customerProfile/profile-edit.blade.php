@extends('user.customer-master')
@section('content')
    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">{{__('Update Your Profile')}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12" style="text-align: center">
                <div class="payWith">
                    <div class="card">
                        <div class="">
                            <form id="file-upload-form" class="uploader"></form>
                            <div class="row px-5">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-12 col-sm-12">
                                        <form action="{{route('update.profile')}}" method="post" id="file-upload-form" class="uploader px-5" enctype="multipart/form-data">
                                            @csrf
                                            <div class="profile_image pb-2">
                                                <div class="profile-userpic">
                                                    @if (file_exists('asset/server/users/'.Auth::user()->avatar))
                                                        <img src="{{asset('asset/server/users/'.Auth::user()->avatar)}}" alt="11">
                                                    @else
                                                        <img id="previewImg" src="{{asset('asset/admin/img/cards/default_user.png')}}" alt="Profile Picture">
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="updateUserForm">
                                                <div class="custom-file py-1">
                                                    <label class="custom-file-label" for="avatar">Choose file</label>
                                                    <input type="file" name="avatar" id="avatar" onchange="previewFile(this);" required>
                                                </div>

                                                <div class="form-group py-1">
                                                    <label for="name">{{__('Name')}}</label>
                                                    <input name="name" value="{{Auth::user()->name}}" type="text" class="form-control" id="username" placeholder="{{__('Name')}}">
                                                </div>

                                                <div class="form-group py-1">
                                                    <label for="phone">{{__('Phone')}}</label>
                                                    <input name="phone" value="{{Auth::user()->phone}}" type="text" class="form-control" id="phone" placeholder="{{__('Phone')}}">
                                                </div>

                                                <div class="form-group py-1">
                                                    <label for="address">{{__('Address')}}</label>
                                                    <input name="address" value="{{Auth::user()->address}}" type="text" class="form-control" id="address" placeholder="{{__('Address')}}">
                                                </div>

                                                <div class="form-group py-1">
                                                    <label for="email">{{__('Email')}}</label>
                                                    <input name="email" readonly value="{{Auth::user()->email}}" type="text" class="form-control" id="email" placeholder="{{__('Email')}}">
                                                </div>

                                                <div class="form-group py-1">
                                                    <input type="submit" class="btn btn-primary" value="Update Your Profile">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
