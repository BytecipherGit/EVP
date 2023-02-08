@extends('admin/layouts.app')
@section('content')
@section('title','EVP - Post-Employee-Details')

    <!--- Main Container Start ----->
    <div class="main-container">

      <div class="main-heading">        
        <div class="row">
          <div class="col-md-8">
            <h1>Post Employees Details</h1>
            <p>Here’s your report overview by today</p>
          </div>
          <div class="col-lg-4">
            <div class="main-right-button-box">
              <a href="post-employee"><img src="assets/admin/images/back-icon.png"> Back</a>
            </div>
          </div>
        </div>
      </div><!--- Main Heading ----->

      <div class="employee-profile">
        <div class="heading-pro">
          <div class="pro-img">
            <div class="circle">
               <img class="profile-pic" src="assets/admin/images/vijay-patil.png">
             </div>             
          </div>
          <h2>
            Vijay Patil
            <span>Code - <small>#BCS108</small></span>   
            <span>Designation - <small>Junior</small></span>          
          </h2>
        </div>   
      </div>

      <div class="employee-tab-bar"> 
        <ul class="nav nav-tabs table-responsive-width" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Basic Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Identity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Qualification</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Work History</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Feedback</a>
          </li> 

        </ul> 
        <div class="tab-content">
          <div class="tab-pane active" id="tabs-1" role="tabpanel">
            <div class="eml-persnal">
              <div class="row">
                <div class="col-xl-6">
                  <div class="eml-per-main">
                    <h2>PERSONAL INFO </h2>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <h4>Name</h4>
                        <p>Vijay Patil</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Date of Birth</h4>
                        <p>01/10/1990</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Gender</h4>
                        <p>Male</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Blood Group</h4>
                        <p>B+</p>
                      </div>
                       <div class="col-lg-4 col-md-6">
                        <h4>Marital Status</h4>
                        <p>Single</p>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="eml-per-main">
                    <h2>CONTACT INFO</h2>
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <h4>Official Email ID</h4>
                        <p>shivani@gmail.com</p>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <h4>Personal Email ID</h4>
                        <p>shivani@gmail.com</p>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <h4>Current Address</h4>
                        <p>Vijay Nagar Square Indore</p>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <h4>Permanent Address</h4>
                        <p>Khargone</p>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>EMERGENCY CONTACT</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Relationship </th>
                            <th>Phone Number</th>
                            <th>Address</th>
                          </tr>
                        </thead>
                          <tr>
                            <td>Amit Sarma</td>
                            <td>Father</td>
                            <td>9876543210</td>
                            <td>Indore Madhya Pradesh</td>
                          </tr>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-2" role="tabpanel">
            <div class="eml-persnal">
              <div class="row">
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>Identity</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Type</th>
                            <th>Id</th>
                            <th>Verification</th>
                            <th>Actions</th>
                          </tr>
                          </thead>
                            <tr>
                              <td>Pan Card</td>
                              <td>AXXX11100X</td>
                              <td><span class="verified-clr"><i class="fa fa-check"></i> Verified</span></td>
                              <td>
                                <span class="d-flex tbl-iconBx">
                                  <a href="#" target="_black" class="docu-down" data-toggle="modal" data-target="#exampleModaldocument"><img src="assets/admin/images/document.png"></a>
                                  <a href="assets/admin/images/pan-card.png" target="_black" class="docu-download"><img src="assets/admin/images/download-icon.png"></a>
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td>Aadhar Card</td>
                              <td>AXXX1200X</td>
                              <td><span class="not-verified-clr"><i class="fa fa-times"></i> Not Verified</span></td>
                              <td>
                                <span class="d-flex  tbl-iconBx">
                                  <a class="docu-down" data-toggle="modal" data-target="#btninfo"><img src="assets/admin/images/no-data.png"></a>
                                  <a href="assets/admin/images/pan-card.png" target="_black" class="docu-download"><img src="assets/admin/images/download-icon.png"></a>
                                </span>
                              </td>
                            </tr>
                          <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-3" role="tabpanel">
            <div class="eml-persnal">
              <div class="row">
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>Qualification</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Degree</th>
                            <th>School/College/Institute</th>                                    
                            <th>Subject</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Verification</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>                                    
                            <td>B.E</td> 
                            <td>New Science College Indore</td> 
                            <td>Mechanical</td>
                            <td>July / 2013</td>  
                            <td>July / 2017</td>  
                            <td><span class="verified-clr"><i class="fa fa-check"></i> Verified</span></td>
                            <td>
                              <a href="#" target="_black" class="docu-down" data-toggle="modal" data-target="#qualificationdocument"><img src="assets/admin/images/document.png"></a>
                              <a href="assets/admin/images/job-offer-letter.png" target="_black" class="docu-download"><img src="assets/admin/images/download-icon.png"></a>
                            </td>
                          </tr>
                          <tr>                                    
                            <td>12th</td> 
                            <td>CBSC</td> 
                            <td>Mathematics</td>
                            <td>July / 2012</td>  
                            <td>March / 2013</td>  
                            <td><span class="not-verified-clr"><i class="fa fa-times"></i> Not Verified</span></td>
                            <td>
                              <a class="docu-down" data-toggle="modal" data-target="#workhisinfo"><img src="assets/admin/images/no-data.png"></a>
                              <a href="assets/admin/images/job-offer-letter.png" target="_black" class="docu-download"><img src="assets/admin/images/download-icon.png"></a>
                            </td>
                          </tr>
                        </tbody>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="tab-pane" id="tabs-4" role="tabpanel">
            <div class="eml-persnal">
              <div class="row">
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>WORK INFO</h2>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <h4>Employee ID</h4>
                        <p>BEC/1300</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Date of Joining</h4>
                        <p>01/10/2020</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Probation Period</h4>
                        <p>0</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Employee Type</h4>
                        <p>Full Time</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Work Location</h4>
                        <p>Corporate Office</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Employee Status</h4>
                        <p>Active</p>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <h4>Work Experience</h4>
                        <p>3 Year</p>
                      </div> 
                      <div class="col-lg-4 col-md-6">
                        <h4>Date of Exit</h4>
                        <p>01/10/2020</p>
                      </div>                     
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>REPORTING MANAGER</h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Department</th>
                            <th>Designation</th>
                          </tr>
                        </thead>
                          <tr>
                            <td>Amit Sanvedi</td>
                            <td>Primary</td>  
                            <td>Software Developlement</td>
                            <td>Chief Technology Officer (CTO)</td>
                          </tr>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>WORK HISTORY </h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Company Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Designation</th>
                            <th>Offer Letter </th>
                            <th>Experience</th>
                            <th>Salary Slips</th>
                            <th>VERIFICATION</th>
                          </tr>
                        </thead>
                          <tr>
                            <td>ByteCipher</td>
                            <td>14-01-2018</td>  
                            <td>Present</td>
                            <td>React Native Developer</td>  
                            <td><a href="#" target="_black" class="docu-down" data-toggle="modal" data-target="#qualificationdocument"><img src="assets/admin/images/document.png"></a></td>
                            <td><a href="#" target="_black" class="docu-down" data-toggle="modal" data-target="#qualificationdocument"><img src="assets/admin/images/document.png"></a></td>
                            <td><a href="assets/admin/images/sample-pdf.pdf" target="_black" class="docu-download"><img src="assets/admin/images/pdf-icon.png"></a></td>
                            <td><span class="verified-clr"><i class="fa fa-check"></i> Verified</span></td>
                          </tr>
                          <tr>
                            <td>ByteCipher</td>
                            <td>14-01-2018</td>  
                            <td>20-10-2029</td>
                            <td>React Native Developer</td>  
                            <td><a class="docu-down" data-toggle="modal" data-target="#workhisinfo"><img src="assets/admin/images/no-data.png"></a></td>
                            <td><a href="#" target="_black" class="docu-down" data-toggle="modal" data-target="#qualificationdocument"><img src="assets/admin/images/document.png"></a></td>
                            <td><a href="assets/admin/images/sample-pdf.pdf" target="_black" class="docu-download"><img src="assets/admin/images/pdf-icon.png"></a></td>                            
                            <td><span class="not-verified-clr"><i class="fa fa-times"></i> Not Verified</span></td>
                          </tr>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-5" role="tabpanel">
            <div class="eml-persnal">
              <div class="row">
                <div class="col-xl-12">
                  <div class="eml-per-main">
                    <h2>EMPLOYEE FEEDBACK</h2>
                    <div class="row">
                      <div class="col-lg-12">
                        <h4>Decipline</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                      </div>
                      <div class="col-lg-12">
                        <h4>Reason for leaving</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                      </div>

                      <div class="col-lg-12 col-md-12">
                        <h4>Rating</h4>
                        <div class="rating-box-pm">
                          <fieldset class="rating">
                            <input type="radio" id="textiles-star5" name="textiles-rating" value="5" />
                            <label class = "full" for="textiles-star5"></label>
                            <input type="radio" id="textiles-star4half" name="textiles-rating" value="4 and a half" / checked="">
                            <label class="half" for="textiles-star4half"></label>

                            <input type="radio" id="textiles-star4" name="textiles-rating" value="4" / >
                            <label class = "full" for="textiles-star4" ></label>
                            <input type="radio" id="textiles-star3half" name="textiles-rating" value="3 and a half" />
                            <label class="half" for="textiles-star3half"></label>

                            <input type="radio" id="textiles-star3" name="textiles-rating" value="3" />
                            <label class = "full" for="textiles-star3"></label>
                            <input type="radio" id="textiles-star2half" name="textiles-rating" value="2 and a half" />
                            <label class="half" for="textiles-star2half" ></label>

                            <input type="radio" id="textiles-star2" name="textiles-rating" value="2" />
                            <label class = "full" for="textiles-star2"></label>
                            <input type="radio" id="textiles-star1half" name="textiles-rating" value="1 and a half" />
                            <label class="half" for="textiles-star1half" ></label>

                            <input type="radio" id="textiles-star1" name="textiles-rating" value="1" />
                            <label class = "full" for="textiles-star1"></label>
                            <input type="radio" id="textiles-starhalf" name="textiles-rating" value="half" />
                            <label class="half" for="textiles-starhalf"></label>
                          </fieldset>
                          <span class="ml-3">(4.5)</span>
                        </div>
                      </div>                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--- Main Container Close ----->

  
  <!-- The Modal Docum INFO-->
  <div class="modal fade custu-modal-popup" id="exampleModaldocument" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Pan Card</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/admin/images/close-btn-icon.png">
          </button>
        </div>
        <div class="modal-body">
          <div class="document-body">
            <img src="assets/admin/images/pan-card.png">
          </div>
          <a href="assets/admin/images/pan-card.png" target="_black">Download</a>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn-primary">Save Changes</button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- The Modal No INFO -->
  <div class="modal fade custu-no-select" id="workhisinfo" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="assets/admin/images/info.png" class="img-size-wth">
          <h1>No Data Available</h1>
          <p>Upload your document file</p>
          <a data-dismiss="modal" data-toggle="modal">Ok</a>
        </div>
      </div>
    </div>
  </div> 

  <!-- The Modal Docum INFO-->
  <div class="modal fade custu-modal-popup" id="qualificationdocument" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Document View</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/admin/images/close-btn-icon.png">
          </button>
        </div>
        <div class="modal-body">
          <div class="document-body">
            <img src="assets/admin/images/job-offer-letter.png">
          </div>
          <a href="assets/admin/images/pan-card.png" target="_black">Download</a>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn-primary">Save Changes</button> -->
        </div>
      </div>
    </div>
  </div>   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/admin/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/admin/js/bootstrap.min.js"></script>  

    @endsection