@extends('company/layouts.appcom')
@section('content')
@section('title','EVP - Company Login')

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
            <form action="" method="post">
              @csrf
              <div class="d-flex close-butn">
                <a href="company-dashboard"><img src="assets/company2/images/back-icon.png"></a>
              </div>
              <h1>Welcome to EVP</h1> 
              <h6>Log in to your account</h6> 
              
              <div class="form-group">
                <label>Email Address</label>     
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address">
              </div> 
              <div class="form-group">
                <label>Password</label>     
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">
              </div>  
              <div class="form-group">
                <div class="forg-box">
                  <input type="checkbox" id="customRadioInline4" name="customRadioInline"> 
                  <label for="customRadioInline4">Remember me</label>
                  <a href="{{ route('password.requests') }}">Forgot Password?</a>
                </div>
              </div>

              <div class="form-group">
                <button type="submit">Log in</a></button>
              </div>
              <div class="form-group">
                <p>Don’t have any account?,  <a href="company-signup">Register</a></p>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>  
  </div> 

  <script>
      window.jQuery || document.write('<script src="../../assets/company2/js/jquery.min.js"><\/script>')
    </script>
    <script src="assets/company2/js/bootstrap.min.js"></script>
@endscript

