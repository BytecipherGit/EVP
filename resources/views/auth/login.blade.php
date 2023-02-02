{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('superadmin/layouts.login')
@section('employee-varification')
@section('title','Employee Verification - Login')

<!-- Login Main Container -->
<div class="col-lg-6 align-self-center pad-0 form-section">
           @if(session()->has('message'))
              <div class="alert alert-success">
            {{ session()->get('message') }}
            </div>
            @endif
          <div class="cover-box-txt">  
        
           <form method="POST" action="{{ route('superlogin') }}">
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
                <p>© 2022 ByteCipher Pvt. Ltd.</p>
              </div>

            </form>
          </div>
        </div>  
        @endsection
