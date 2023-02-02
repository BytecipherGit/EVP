@extends('company/layouts.appcom')
@section('content')
@section('title','EVP - Company Login')

<div class="d-flex main-form-part">
    <div class="container-fluid">
      <div class="row">                
        <div class="col-lg-6 pad-0">
          <div class="main-box-img">
            <img src="assets/images/login-bg.jpg">
          </div>
        </div>
        <div class="col-lg-6 form-section">
          <div class="login-box-txt">  
            <form>
              <div class="d-flex close-butn">
                <a href="company-forgot-password.html"><img src="assets/images/back-icon.png"></a>
              </div>
              <h6>Reset Your Password</h6> 
              
              <div class="form-group">
                <label>New Password</label>     
                <input type="password" name="" class="form-control" placeholder="New Password">
              </div> 

              <div class="form-group">
                <label>Confirm Password</label>     
                <input type="password" name="" class="form-control" placeholder="Confirm Password">
              </div>

              <div class="form-group">
                <button type="submit"><a href="#" data-toggle="modal" data-target="#reset-password">Submit</a></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>  

    
  </div> 

  <!-- Modal Reviews-->
  <div class="modal fade custom-modal" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="assets/images/confirm-icon.png">
          <h2>Successful password reset!</h2>
          <p>You can now use your new password to log in to your account</p>
          <a href="company-login.html">Login</a>
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
    <script src="assets/js/bootstrap.min.js"></script>

    @endsection