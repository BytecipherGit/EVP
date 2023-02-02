
@extends('superadmin/layouts.app')
@section('deshboard')
@section('title','EVP - Dashboard')
<!--- Main Container Start ----->
  <div class="main-container">

<div class="main-heading">        
  <div class="row">
    <div class="col-lg-12">
      <h1>Overview</h1>
      <p>Here’s your report overview by today</p>
    </div>
  </div>
</div><!--- Main Heading ----->

<!--- Status Heading Start ----->
<div class="ser-part">
  <div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="ser-box">
        <div class="head-sec">
          <h2>All <span>Lorem Ipsum</span></h2>
          <div class="img-bg ml-auto">
            <img src="assets/company/images/employees-view.png">
          </div>
        </div>
        <h6>
          <div class="bg-section">
            980 <img src="assets/company/images/button-plus-clr.png"> 
          </div>  
          <a href="#">View</a>              
        </h6>
      </div>
    </div> 
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="ser-box">
        <div class="head-sec">
          <h2>Organization<span>Lorem Ipsum</span></h2>
          <div class="img-bg ml-auto">
            <img src="assets/company/images/company-icon.png">
          </div>  
        </div>
        <h6>
          <div class="bg-section">
            240 <img src="assets/company/images/button-plus-clr.png"> 
          </div>  
          <a href="#">View</a>              
        </h6>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6">
      <div class="ser-box">
        <div class="head-sec">
          <h2>Individual <span>Lorem Ipsum</span></h2>
          <div class="img-bg ml-auto">
            <img src="assets/company/images/invite-icon.png">
          </div>  
        </div>
        <h6>
          <div class="bg-section">
            50 <img src="assets/company/images/button-plus-clr.png"> 
          </div>  
          <a href="#">View</a>              
        </h6>

      </div>
    </div>
  </div>
</div>
<!--- Status Heading End ----->

</div>
<!--- Main Container Close ----->
@endsection
