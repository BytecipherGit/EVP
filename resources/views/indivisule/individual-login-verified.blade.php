@extends('company/layouts.appcom')
@section('content')
@section('title','Employee Verification - Individual Verified')

<div class="main-form-part d-flex">
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
            <div class="verified-box">
              <img src="/assets/company2/images/verified-confirm.png">
              <h2>Success!</h2>
              <p>Just a few more steps left. Please go on.</p>
            </div>

            <div class="form-group">
              <button type="submit"><a href="individual-info">Continue</a></button>
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