@extends('frontend.main_master')
@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br><br>
                <img class="card-img-top" style="border-radius: 50%" src="{{
                    !empty(Auth::user()->profile_photo_path)?url('upload/user_images/'.Auth::user()->profile_photo_path)
                    : url('upload/no_image.jpg')
                }}" height="100%" width="100%" alt="">
                <ul class="list-group list-group-flush"><br>
                    <a class="btn btn-primary btn-sm btn-block">Home</a>
                    <a class="btn btn-primary btn-sm btn-block" href="{{route('user.profile')}}">Profile Update</a>
                    <a class="btn btn-primary btn-sm btn-block" href="{{route('change.password')}}">Change Password</a>
                    <a class="btn btn-danger btn-sm btn-block" href="{{route('user.logout')}}">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h1 class="text-center"><span class="text-danger">Hello... </span>{{Auth::user()->name}}</h1>
                </div>
            </div>
            {{-- End Col Md-2 --}}
        </div>
        {{-- End Row --}}
    </div>
</div>
@endsection
