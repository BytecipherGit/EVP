@extends('company/layouts.appcom')
@section('company-document')
@section('title','EVP - Company Verification Document')

<div class="d-flex main-form-part">
    <div class="container-fluid">
      <div class="row">                
        <div class="col-lg-6 pad-0">
          <div class="main-box-img">
            <img src="assets/company2/images/login-bg.jpg">
          </div>
        </div>
        <div class="col-lg-6 form-section">
          <div class="login-box-txt org-basic-info">  
          @if(session()->has('message'))
             <div class="alert alert-success">
           {{ session()->get('message') }}
           </div>
           @endif
          <form method="post" action="" enctype="multipart/form-data">
          @csrf        
              <div class="d-flex close-butn">
                <a href="company-login"><img src="assets/company2/images/back-icon.png"></a>
              </div> 
              <h6>Company Verification Document</h6>               
              <div class="form-group">
                <label>Company Registration No.</label>     
                <input type="text" name="rid" class="form-control" placeholder="Enter your number">
              </div> 

              <div class="document" name="doc">
                <div class="row new-changeLS customer_records">
                  <div class="col-md-6">
                    <div class="form-groupbox">
                      <label>Upload Document </label>     
                      <div class="upload-img-file">
                        <div class="circle">
                         <img class="profile-pic" id="profile-pic" src="assets/company2/images/file-icon-img.png">
                       </div>
                       <div class="">
                         <!-- <span class="upload-button" id="upload-button">Choose File</span> -->
                         <input type="file" name="doc" class="form-control" id="image" accept="image/*" multiple />
                          <!-- <input class="file-upload" name="doc" id="file-upload" type="file" accept="image/*"> -->
                       </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label>&nbsp;</label>   
                        <select  id="doctype" name="doctype" class="form-control">
                            <option>Document Type</option>
                              <option>Gst No.</option>
                              <option>Pan Card</option>
                        </select>
                      <!-- <div class="selectBox active form-control">
                        <div class="selectBox__value">Document Type</div>
                        <div class="dropdown-menu" id="style-5">
                          <a class="dropdown-item active">Document Type</a>
                          <a class="dropdown-item">GST No.</a>
                          <a class="dropdown-item">Pan Card</a>
                        </div>
                      </div>  -->
                    </div> 
                   </div>
                  <label>&nbsp;</label>  
                  <div class="add-plus mt-custom-plus extra-fields-customer"><span><img src="assets/company2/images/button-plus.png"></span></div>
                      
                </div>
                 <div class="customer_records_dynamic"></div>
              </div> 

              
              <div class="form-group">
                <button type="submit" data-target="#seccess-veriId" >Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>  
  </div> 
  <!-- Modal Email verified-->
  <div class="modal fade custom-modal" id="seccess-veriId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="assets/company2/images/checksign.png">
          <h2>Successful Registration</h2>
          <p>Please wait while we are processing your request...</p>
          <div></div>
          <a href="index.html" >Done</a>
        </div>
      </div>
    </div>
  </div>

    <script>
        function openForm() {
             $("#button").click(function () {
             $("#seccess-veriId").css("display","block")
          });
        }
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/company2/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/company2/js/bootstrap.min.js"></script>
    <script src="assets/company2/js/file-upload.js"></script>
    <script>
      $(".selectBox").on("click", function(e) {
        $(this).toggleClass("show");
        var dropdownItem = e.target;
        var container = $(this).find(".selectBox__value");
        container.text(dropdownItem.text);
        $(dropdownItem)
          .addClass("active")
          .siblings()
          .removeClass("active");
      });
    </script>

    <script>
      $('.extra-fields-customer').click(function() {
        $('.customer_records').clone().appendTo('.customer_records_dynamic');
        $('.customer_records_dynamic .customer_records').addClass('single remove');
        $('.single .extra-fields-customer').remove();
        $('.single').append('<a href="#" class="remove-field btn-remove-customer add-plus minus-icon"><span><img src="assets/company2/images/minus-icon.png"></span></a>');
        $('.customer_records_dynamic > .single').attr("class", "row");

        $('.customer_records_dynamic input').each(function() {
          var count = 0;
          var fieldname = $(this).attr("name");
          $(this).attr('name', fieldname + count);
          count++;
        });

      });

      $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.row').remove();
        e.preventDefault();
      });
    </script>
    @endsection