 @extends('company/layouts.appcom')
 @section('content')
 @section('title','Employee Verification - Individual-indo')
 
 <header>
 <div class="container-fluid">
    <div class="navigation-wrap start-header start-style">
      <nav class="navbar navbar-expand-md navbar-light">
        
          <a class="navbar-brand" href="company-dashboard"><img src="/assets/company2/images/logo.png" alt=""></a>  
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto py-4 py-md-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>              
            </ul>
          </div>            
        </nav>
    </div>     
  </div>
</header>

<!--- Wapper Start ----->
  <div class="wapper">

    <!--- Main Container Start ----->
    <div class="main-container">

      <div class="main-heading">        
        <div class="row">
          <div class="col-md-12">
            <h1>Welcome to EVP</h1>
            <p>Lorem Ipsum is simply dummy text</p>
          </div>
        </div>
      </div><!--- Main Heading ----->

      <div class="employee-tab-bar"> 
        <ul class="nav nav-tabs table-responsive-width" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Optional Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Occupation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Documents</a>
          </li>  

        </ul> 
        <div class="tab-content">
          <div class="tab-pane active" id="tabs-1" role="tabpanel">
            <div class="eml-persnal ">
              <div class="add-emply-details">                
                <div class="row">
                  <div class="col-lg-12">
                    <form>
                      <div class="row">
                        <div class="col-xl-12"><h2>Personal</h2></div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" name="" class="form-control" placeholder="BOD">
                          </div>
                        </div> 
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Select Blood Group</label>
                            <div class="selectBox active form-control">
                              <div class="selectBox__value">Blood Group</div>
                              <div class="dropdown-menu" id="style-5">
                                <a class="dropdown-item active">Blood Group</a>
                                <a class="dropdown-item">A+</a>
                                <a class="dropdown-item">A-</a>
                                <a class="dropdown-item">B+</a>
                                <a class="dropdown-item">B_</a>
                                <a class="dropdown-item">O+</a>
                                <a class="dropdown-item">O-</a>
                                <a class="dropdown-item">AB+</a>
                                <a class="dropdown-item">AB-</a>
                              </div>
                            </div>
                          </div>                          
                        </div> 
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Select Gender</label>
                            <div class="selectBox active form-control">
                              <div class="selectBox__value">Select Gender</div>
                              <div class="dropdown-menu">
                                <a class="dropdown-item active">Select Gender</a>
                                <a class="dropdown-item">Male</a>
                                <a class="dropdown-item">Female</a>
                                <a class="dropdown-item">Transgender</a>
                              </div>
                            </div>
                          </div>
                        </div>  
                        
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Marital Status</label>
                            <div class="selectBox active form-control">
                              <div class="selectBox__value">Marital Status</div>
                              <div class="dropdown-menu">
                                <a class="dropdown-item active">Marital Status</a>
                                <a class="dropdown-item">Married</a>
                                <a class="dropdown-item">Single</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Current Address</label>
                            <textarea rows="3" class="form-control">Enter Your Address.....</textarea>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Permanent Address</label>
                            <textarea rows="3" class="form-control">Enter Your Address.....</textarea>
                          </div>
                        </div>
                        <div class="col-xl-12"><h2>Emergency Contact</h2></div>                        
                        <div class="col-xl-4 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Name">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Relationship</label>
                            <input type="text" name="" class="form-control" placeholder="Enter Your Relation">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="" class="form-control" placeholder="Number">
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Address</label>
                            <textarea rows="3" class="form-control">Enter Your Address.....</textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="add-btn-part">
                              <button type="button" class="btn-secondary-cust" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn-primary-cust">Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>                
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-2" role="tabpanel">
            <div class="eml-persnal ">
              <div class="add-emply-details">                
                <div class="row">
                  <div class="col-lg-12">
                    <form>
                      <div class="row">
                        <div class="col-xl-12"><h2>Basic Info</h2></div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Employee ID</label>
                            <input type="text" name="id" class="form-control" placeholder="Id Number">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Date of Joining</label>
                            <input type="text" name="date" class="form-control" placeholder="Date">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Probation Period</label>
                            <input type="text" name="probation-period" class="form-control" placeholder="Probation Time">
                          </div>
                        </div> 
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Employee Type</label>
                            <div class="selectBox active form-control">
                              <div class="selectBox__value">Employee Type</div>
                              <div class="dropdown-menu" id="style-5">
                                <a class="dropdown-item active">Employee Type</a>
                                <a class="dropdown-item">Part Time</a>
                                <a class="dropdown-item">Full Time</a>
                                <a class="dropdown-item">Training</a>
                                <a class="dropdown-item">Freelancer</a>
                              </div>
                            </div>
                          </div>                          
                        </div> 
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Work Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Location">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Employee Status</label>
                            <div class="selectBox active form-control">
                              <div class="selectBox__value">Select Status</div>
                              <div class="dropdown-menu">
                                <a class="dropdown-item active">Select Status</a>
                                <a class="dropdown-item">Active</a>
                                <a class="dropdown-item">Not Verified</a>
                              </div>
                            </div>
                          </div>
                        </div>                          
                        <div class="col-xl-3 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Work Experience</label>
                            <input type="text" name="" class="form-control" placeholder="Experience">
                          </div>
                        </div>
                        <div class="col-xl-12"><h2>Work History</h2></div>
                        <div class="document_basic">
                          <div class="row customer_records">
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="" class="form-control" placeholder="Name">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Form</label>
                                <input type="date" name="" class="form-control" placeholder="Form">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>To</label>
                                <input type="date" name="" class="form-control" placeholder="To">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="" class="form-control" placeholder="Department">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="" class="form-control" placeholder="Designation">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Total Experience</label>
                                <input type="text" name="" class="form-control" placeholder="Experience">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Verification</label>
                                <div class="selectBox active form-control">
                                  <div class="selectBox__value">Verification Type</div>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item active">Verification Type</a>
                                    <a class="dropdown-item">Verified</a>
                                    <a class="dropdown-item">Not Verified</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="add-plus mt-custom-plus extra-fields-customer"><span><img src="/assets/company2/images/button-plus.png"></span></div>
                          </div>
                          <div class="customer_records_dynamic"></div>
                        </div>  

                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="add-btn-part">
                              <button type="button" class="btn-secondary-cust" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn-primary-cust">Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>                
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-3" role="tabpanel">
            <div class="eml-persnal ">
              <div class="add-emply-details">                
                <div class="row">
                  <div class="col-lg-12">
                    <form>
                      <div class="row">                        
                        <div class="col-xl-12"><h2>Uploaded Documents</h2></div>
                      </div>  

                        <div class="document_basic">
                          <div class="row customer_records1">
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Id Type</label>
                                  <div class="selectBox active form-control">
                                  <div class="selectBox__value">Id Type</div>
                                  <div class="dropdown-menu" id="style-5">
                                    <a class="dropdown-item active">Id Type</a>
                                    <a class="dropdown-item">Pan Card</a>
                                    <a class="dropdown-item">Aadhar Card</a>
                                    <a class="dropdown-item">Offer Letter</a>
                                    <a class="dropdown-item">Join Letter</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Id Number</label>
                                <input type="text" name="" class="form-control" placeholder="Number">
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Uploaded By</label>
                                <div class="selectBox active form-control">
                                  <div class="selectBox__value">Upload By</div>
                                  <div class="dropdown-menu">
                                    <div class="dropdown-item active">Upload By</div>
                                    <a class="dropdown-item">Admin</a>
                                    <a class="dropdown-item">HR</a>
                                    <a class="dropdown-item">User</a>
                                  </div>
                                </div>
                              </div>
                            </div>    
                            <div class="col-xl-3 col-lg-6 col-md-12">
                              <div class="form-group">
                                <label>Verification</label>
                                <div class="selectBox active form-control">
                                  <div class="selectBox__value">Verification Type</div>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item active">Verification Type</a>
                                    <a class="dropdown-item">Verified</a>
                                    <a class="dropdown-item">Not Verified</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-12">
                              <label>Upload File</label>
                              <div class="upload-img-file">
                                <div class="circle">
                                 <img class="profile-pic" id="profile-pic1" src="/assets/company2/images/file-icon-img.png">
                               </div>
                               <p>You can drag or drop <span>png. jpeg</span> </p>
                               <div class="p-image ml-auto">
                                 <span class="upload-button" id="upload-button1">Choose File</span>
                                  <input class="file-upload" id="file-upload1" type="file" accept="image/*">
                               </div>
                              </div>
                            </div>
                            <div class="add-plus mt-custom-plus extra-fields-customer1"><span><img src="assets/company2/images/button-plus.png"></span></div>
                          </div>
                          <div class="customer_records_dynamic1"></div>
                        </div>    

                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="add-btn-part">
                              <button type="button" class="btn-secondary-cust" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn-primary-cust" data-toggle="modal" data-target="#confirm-modal">Save</button>
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--- Main Container Close ----->
  </div>
  <!--- Wapper Close ----->
 
<!-- Modal Reviews-->
  <div class="modal fade custu-no-select custom-modal confirm-modal" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/assets/company2/images/confirm-icon.png" class="img-size-wth">   
          <p>You are Successfully register</p>
          <a href="#" data-dismiss="modal">Ok</a>
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
    <script src="/assets/company2/js/bootstrap.min.js"></script>
    <script src="/assets/company2/js/file-upload.js"></script>

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


    <script>
      $('.extra-fields-customer1').click(function() {
        $('.customer_records1').clone().appendTo('.customer_records_dynamic1');
        $('.customer_records_dynamic1 .customer_records1').addClass('single remove');
        $('.single .extra-fields-customer1').remove();
        $('.single').append('<a href="#" class="remove-field btn-remove-customer add-plus minus-icon"><span><img src="assets/images/minus-icon.png"></span></a>');
        $('.customer_records_dynamic1 > .single').attr("class", "row");

        $('.customer_records_dynamic1 input').each(function() {
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