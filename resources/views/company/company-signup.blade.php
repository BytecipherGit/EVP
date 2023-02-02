@extends('company/layouts.appcom')
@section('company-signup')
@section('title','Employee Verification - Company Login')
<style>
  .velidation{
    color: red;
    font-size: 12px;
    display: block;
    margin: 5px 0;
    display: flex;
}
</style>
<div class="d-flex main-form-part">
    <div class="container-fluid">
      <div class="row">                
        <div class="col-lg-6 pad-0">
          <div class="main-box-img">
            <img src="assets/company2/images/login-bg.jpg">
          </div>
        </div>
        <div class="col-lg-6 form-section">
          <div class="login-box-txt">  
          @if(session()->has('message'))
             <div class="alert alert-success">
           {{ session()->get('message') }}
           </div>
           @endif
            <form action="" data-toggle="modal" method="post" class="form">
              @csrf
              <div class="d-flex close-butn">
                <a href="company-login"><img src="assets/company2/images/back-icon.png"></a>
              </div> 
              <h6>Create an Account</h6> 
              
              <div class="form-group">  
                <label>Organization Name* </label>   
                <input type="text" name="oname" class="form-control" value="{{ old('oname') }}" placeholder="Enter Your Name">
                @error('oname')<p class="velidation">{{$message}}</p>@enderror
                
              </div> 
              <div class="form-group">  
                <label>Admin Name* </label>   
                <input type="text" name="admin" class="form-control" value="{{ old('admin') }}" placeholder="Enter Your Link">
                @error('admin') <p class="velidation">{{$message}}</p>@enderror
              </div>
              <div class="form-group">  
                <label>Organization Website* </label>   
                <input type="text" name="website" class="form-control" value="{{ old('website') }}" placeholder="Enter Your Link">
                @error('website') <p class="velidation">{{$message}}</p>@enderror
              </div>
              <div class="form-group">  
                <label>Organization Admin Email*  </label>   
                <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter Your mail">
                @error('email') <p class="velidation">{{$message}}</p>@enderror
              </div>

              <div class="row">
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Password*   </label>
                  <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Enter Your Password">
                  @error('password') <p class="velidation">{{$message}}</p>@enderror
                 </div>
                
                </div>
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Confirm Password  </label>   
                  <input type="password" name="confirm_password" class="form-control" value="{{ old('confirm-password') }}" placeholder="Enter Your Confirm Password">
                  @error('confirm_password') <p class="velidation">{{$message}}</p>@enderror
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Admin Designation* </label>
                  <input type="text" name="designation" class="form-control" value="{{ old('designation') }}" placeholder="Designation">
                  @error('designation')<p class="velidation">{{$message}}</p>@enderror
                  </div>
                </div>
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Admin Department* </label>   
                  <input type="text" name="dept" class="form-control" value="{{ old('dept') }}" placeholder="Department">
                  @error('dept')  <p class="velidation">{{$message}}</p>@enderror
                  </div>
                </div>
              </div>

              <div class="form-group">  
                <label>Registered Address* </label>   
                <textarea class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Your Address" rows="2"></textarea>
                @error('address') <p class="velidation">{{$message}}</p>@enderror
              </div>             

              <div class="row">
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Country*</label>
                  <div class="">
                   
                    <select  id="country-dd" name="country" value="{{ old('country') }}" class="form-control">
                            <option value="">Select Country</option>
                            @foreach ($countries as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                        @error('country')<p class="velidation">{{$message}}</p>@enderror
                  </div>
                  </div>
                </div>

                <div class="col-xl-6">
                 <div class="form-group">
                  <label>State* </label>
                  <div class="">
                 
                    <div class="form-group mb-3">
                        <select id="state-dd" name="state" value="{{ old('state') }}" class="form-control">
                        <option value="">Select State</option>
                        </select>
                        @error('state') <p class="velidation">{{$message}}</p>@enderror
                    </div>
                  </div>
                  </div>
                </div>
              </div>
             <div class="row">
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>City* </label>
                  <div class="">
               
                    <div class="form-group">
                        <select id="city-dd" name="city" value="{{ old('city') }}" class="form-control">
                        <option value="">Select City</option>
                        </select>
                        @error('city') <p class="velidation">{{$message}}</p>@enderror
                    </div>
                  </div>
                  </div>
                </div>
                <div class="col-xl-6">
                 <div class="form-group">
                  <label>Pin Code* </label>
                  <input type="text" name="pin" class="form-control" value="{{ old('pin') }}" placeholder="Enter Your pin">
                  @error('pin')<p class="velidation">{{$message}}</p>@enderror
                  </div>
                </div>
              </div>
              

               <div class="form-group">
                <button type="submit" name="button" id="but" data-toggle="modal" data-target="#seccess-veri">Sign Up</button>
              </div>
              <div class="form-group">
                <p>Already have an account,  <a href="company-login">Login</a></p>
              </div> 
            </form>

          </div>
        </div>
      </div>
    </div>  
  </div> 
 
 
   <!-- Modal Email verified-->
   <div class="modal fade custom-modal" id="seccess-veri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="assets/company2/images/email-verify.png">
          <h2>Registration completed successfully</h2>
          <!-- <p>Please check your rigistered email for email verification</p> -->
          <a href="company-login.html">Login</a>
        </div>
      </div>
    </div>
  </div>

  <script>
//     $(document).ready(function(){
//         $('.form').on('submit', function(){
//           <div class="modal fade custom-modal" id="seccess-veri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
//          <div class="modal-dialog" role="document">
//       <div class="modal-content">
//         <div class="modal-body">
//           <img src="assets/images/email-verify.png">
//           <h2>Registration completed successfully</h2>
//       <p>Please check your rigistered email for email verification</p> 
//           <a href="company-login.html">Login</a>
//         </div>
//       </div>
//     </div>
//   </div>
// });
//         });
  
  </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/company2/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/company2/js/bootstrap.min.js"></script>
    <script>
      $(".selectBox").on("click", function(e) {
        $(this).toggleClass("show");
        var dropdownItem = e.target;
        var container = $(this).find(".selectBox__value");
        container.text(dropdownItem.text);
        $(dropdownItem)
          .addClass("active")
          .siblings()
          .removeClass("active");
      });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
  @endsection
