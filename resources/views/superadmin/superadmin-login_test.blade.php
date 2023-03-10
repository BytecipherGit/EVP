@extends('superadmin/layouts.login')
@section('employee-varification')
@section('title','Employee Verification - Login')

<!-- Login Main Container -->
<div class="col-lg-6 align-self-center pad-0 form-section">
          <div class="cover-box-txt">  
          @if(session()->has('message'))
             <div class="alert alert-success">
           {{ session()->get('message') }}
           </div>
           @endif
           <form method="POST" action="{{ route('login') }}">
              @csrf
              <img src="assets/superassets/images/logo.png"class="login-logo">
              <h1>Log in to your account</h1>  
              
              <div class="form-group">                
                <div class="effect-box">
                  {{-- <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="User Email Id"> --}}
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <span><i class="fa fa-user-o"></i></span>
                </div>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
               
               
              </div>
              <div class="form-group">                
                <div class="effect-box">
                  {{-- <input type="password" name="password" class="form-control" placeholder="Password"> --}}
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <span style="opacity: 1;"><i class="fa fa-lock"></i></span>
                </div>                 
              </div>
              <div class="form-group">
                <div class="forg-box">
                  {{-- <input type="checkbox" id="customRadioInline4" name="customRadioInline" value="1">  --}}
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">Remember me</label>
                  <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
              </div>              
              <div class="form-group">
                <button type="submit">Log In</a></button>
              </div>
              <div class="foot-bottom">
                <p>?? 2022 ByteCipher Pvt. Ltd.</p>
              </div>

            </form>
          </div>
        </div>  
        @endsection