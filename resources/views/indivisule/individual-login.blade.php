@extends('company/layouts.appcom')
@section('content')
@section('title','Employee Verification - Individual')

<div class="d-flex main-form-part">
    <div class="container-fluid">
      <div class="row">                
        <div class="col-lg-6 pad-0">
          <div class="main-box-img">
            <img src="/assets/company2/images/login-bg.jpg">
          </div>
        </div>
        <div class="col-lg-6 form-section">
          <div class="login-box-txt">  
            <form>
              <div class="d-flex close-butn">
                <a href="company-dashboard"><img src="/assets/company2/images/back-icon.png"></a>
              </div>
              <h1>Welcome Guest,</h1> 
              <h6>Sign up for Verification</h6> 
              
              <div class="form-group">  
                <label>Email/Mobile</label>  
                <input type="text" name="email" class="form-control" placeholder="Email/Mobile">
              </div>             
              <div class="form-group">
                <button type="submit"><a href="individual-login-otp">Generate OTP</a></button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>  
  </div> 

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/company2/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="/assets/company2/js/bootstrap.min.js"></script>

    @endsection
