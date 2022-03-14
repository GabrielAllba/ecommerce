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
                <h2>{{$user->name}}</h2>
                <ul class="list-group list-group-flush"><br>
                    <a class="btn btn-primary btn-sm btn-block">Home</a>
                    <a class="btn btn-primary btn-sm btn-block" href="{{route('user.profile')}}">Profile Update</a>
                    <a class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a class="btn btn-danger btn-sm btn-block" href="{{route('user.logout')}}">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h1 class="text-center">Profile Update</h1>
                    <div class="card-body">
                        <form method="POST" action="{{route('user.profile.store')}}"
                        enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="info-title">Name <span></span></label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="info-title">Email<span></span></label>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="info-title">Phone<span></span></label>
                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="info-title">User Image<span></span></label>

                                {{-- Store old profile photo path --}}
                                <input type="hidden" name="old_profile_photo_path"
                                value="{{$user->profile_photo_path}}">

                                <input type="file" name="profile_photo_path" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Updates</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- End Col Md-2 --}}
        </div>
        {{-- End Row --}}
    </div>
</div>
@endsection
