
@extends('company/layouts.appcom')
@section('content')
@section('title','Employee Verification - Individual-OTP')

<div class="main-form-part d-flex">
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
            <div class="d-flex close-butn pb-3">
              <a href="individual-login" class="ml-0"><img src="/assets/company2/images/back-icon.png"></a>
            </div>
            <h1 class="pb-2">Verify (Email / Number)</h1> 
            <p class="mb-5 align-self-left">To Verify, please enter the OTP send on +91 (987) 654-3210</p>
            
            <div class="form-group"> 
              <label>OTP</label> 
              <div class="row">
                <div class="col-md-3">
                  <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 >
                </div>
                <div class="col-md-3">
                  <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 >
                </div>
                <div class="col-md-3">
                  <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 >
                </div>
                <div class="col-md-3">
                  <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1 >
                </div>
              </div>   
            </div>

            <div class="form-group">
              <button type="submit"><a href="individual-login-verified">Verify</a></button>
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
    <script src="/assets/js/bootstrap.min.js"></script>

    <script>
      let digitValidate = function(ele){
        console.log(ele.value);
        ele.value = ele.value.replace(/[^0-9]/g,'');
      }

      let tabChange = function(val){
          let ele = document.querySelectorAll('input');
          if(ele[val-1].value != ''){
            ele[val].focus()
          }else if(ele[val-1].value == ''){
            ele[val-2].focus()
          }   
       }
    </script>
 @endsection

