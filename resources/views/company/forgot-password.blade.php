@extends('company/layouts.appcom')
@section('content')
@section('title','EVP - Company Login')

<title>Employee Verification - Forgot Password</title>
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
            <form>
              <div class="d-flex close-butn">
                <a href="company-login"><img src="assets/company2/images/back-icon.png"></a>
              </div>
              <h6>Recover Your Password</h6> 
              
              <div class="form-group">
                <label>Email Address</label>     
                <input type="text" name="" class="form-control" placeholder="Email Address">
              </div> 

              <div class="form-group">
                <button type="submit"><a href="../email-templates/password-reset.html" target="_black">Send</a></button>
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
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/company2/js/bootstrap.min.js"></script>

@endsection