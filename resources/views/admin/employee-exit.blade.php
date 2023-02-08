@extends('admin/layouts.app')
@section('content')
@section('title','EVP - Employee Exit')

  <!--- Main Container Start ----->
    <div class="main-container">

      <div class="main-heading">        
        <div class="row">
          <div class="col-md-12">
            <h1>Exit Emplpyee</h1>
            <p>Here’s your report overview by today</p>
          </div>
        </div>
      </div><!--- Main Heading ----->

      <div class="employee-tab-bar">  
        <div class="eml-persnal ">
          <div class="add-emply-details exit-custom-page">
                <div class="row">
                  <div class="col-lg-3">                     
                    <div class="empl-exit-detial">
                      <img src="assets/admin/images/vijay-patil.png">
                      <h1>Vijay Patil</h1>
                      <p>Code - #BCS108</p>
                      <p>Date of joining - 11/10/2021</p>
                    </div>
                  </div>

                  <div class="col-lg-9">
                    <form>
                      <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Date of Exit</label>
                            <input type="date" name="" class="form-control" placeholder="Date">
                          </div>
                        </div>  
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Decipline</label>
                            <textarea rows="3" class="form-control">Enter Your Message.....</textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label>Reason for leaving</label>
                            <textarea rows="3" class="form-control">Enter Your Message.....</textarea>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label>Rating</label>
                            <fieldset class="rating">
                              <input type="radio" id="textiles-star5" name="textiles-rating" value="5" />
                              <label class = "full" for="textiles-star5"></label>
                              <input type="radio" id="textiles-star4half" name="textiles-rating" value="4 and a half" />
                              <label class="half" for="textiles-star4half"></label>

                              <input type="radio" id="textiles-star4" name="textiles-rating" value="4" />
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
                            <span class="theme-tem-active ml-2">(0.0)</span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-10">
                                <label>Upload File</label>
                                <div class="upload-img-file">
                                  <div class="circle">
                                   <img class="profile-pic" id="profile-pic1" src="assets/admin/images/file-icon-img.png">
                                 </div>
                                 <p>You can drag or drop <span>png. jpeg</span> </p>
                                 <div class="p-image ml-auto">
                                   <span class="upload-button" id="upload-button1">Choose File</span>
                                    <input class="file-upload" id="file-upload1" type="file" accept="image/*">
                                 </div>
                                </div>                            
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label>&nbsp;</label>
                                  <div class="add-plus mt-custom-plus"><span><img src="assets/admin/images/button-plus.png"></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="add-btn-part">
                              <button type="button" class="btn-secondary-cust" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn-primary-cust">Save</button>
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

    </div>
    <!--- Main Container Close ----->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/admin/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/admin/js/bootstrap.min.js"></script> 
    <script src="assets/admin/js/file-upload.js"></script>

    @endsection