@extends('superadmin/layouts.login')
@section('reset-password')
@section('title','Employee Verification - Reset Password')
<!-- Main Container -->
<div class="col-md-6 align-self-center pad-0 form-section">
          <div class="cover-box-txt"> 
            <form>
              <img src="assets/company/images/logo.png" class="login-logo">
              <h1>Reset Your Password</h1>  
              
              <div class="form-group">     
                <div class="effect-box">
                  <input type="password" name="" class="form-control" placeholder="New Password">
                  <span><i class="fa fa-lock"></i></span>
                </div>
              </div> 
              <div class="form-group">          
                <div class="effect-box">
                  <input type="password" name="" class="form-control" placeholder="Confirm Password">
                  <span><i class="fa fa-lock"></i></span>
                </div>
              </div>             
              <div class="form-group">
                <button><a href="#" data-toggle="modal" data-target="#reset-password">Submit</a></button>
              </div>
              <div class="form-group">
                <h6>© 2022 ByteCipher Pvt. Ltd.</h6>
              </div>

            </form>
          </div>
        </div>  

        <!-- Modal Reviews-->
        <div class="modal fade custom-modal" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <img src="assets/company/images/logo.png">
                <h2>Successful password reset!</h2>
                <p>You can now use your new password to log in to your account</p>
                <a href="index.html">Login</a>
                </div>
            </div>
            </div>
        </div>
        @endsection    
