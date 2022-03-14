@extends('admin.admin_master')
@section('admin')
<section class="section profile">
    <div class="row">


      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Change Password</button>
              </li>

              {{-- <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li> --}}

            </ul>
            <div class="tab-content pt-2">



                <div class="tab-pane fade pt-3 active show" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form method="POST" action="{{route('update.change.password')}}">
                        @csrf
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="old_password"
                          type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password"
                          type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Password Confirmation</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password_confirmation"
                          type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
                    </form>
                    <!-- End Change Password Form -->

                  </div>


            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

  <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result)
            }
            reader.readAsDataURL(e.target.files['0'])
        })
    })
  </script>
@endsection
