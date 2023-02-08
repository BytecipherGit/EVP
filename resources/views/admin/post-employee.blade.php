@extends('admin/layouts.app')
@section('content')
@section('title','EVP - Post Employees')


    <!--- Main Container Start ----->
    <div class="main-container">
      <div class="main-heading">        
        <div class="row">
          <div class="col-md-12">
            <h1>Past Employees</h1>
            <p>Here’s your report overview by today</p>
          </div>
        </div>
      </div><!--- Main Heading ----->

      <div class="employee-view-page">
        <div class="table-responsive">
          <div class="table-effect-box">
            <div class="table-search-box">
              <input type="search" name="" placeholder="Search..." class="form-control input-search-box">
            </div>
            
            <span class="ml-auto d-flex">
              <div class="select-bx">
                <h2><span>Show</span>
                  <div class="selectBox">
                    <div class="selectBox__value">10</div>
                    <div class="dropdown-menu">
                      <a class="dropdown-item active">10</a>
                      <a class="dropdown-item ">25</a>
                      <a class="dropdown-item ">50</a>
                      <a class="dropdown-item ">100</a>
                    </div>
                  </div>
                </h2>
              </div>
            </span>
          </div>        
          <table class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th><input type="checkbox" id="customcheck" name="customcheck"></th>
                <th>Employee Code</th>
                <th>Employee Name</th>
                <th>Employee Designation</th>
                <th>Employee Department</th>
                <th>Reporting Manager</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>             
              <tr>
                <td><input type="checkbox" id="customcheck1" name="customcheck1"></td>
                <td>#000101</td>
                <td>Vijay Patil</td>
                <td>Senior</td>
                <td>Software Developer</td>
                <td>Mayank Palotra</td>
                <td class="d-flex"><a href="post-employee-details" class="view-btn">View</a></td>
              </tr> 
              <tr>
                <td><input type="checkbox" id="customcheck2" name="customcheck2"></td>
                <td>#000102</td>
                <td>Shivani Gupta</td>
                <td>Junior</td>
                <td>React Native Developer</td>
                <td>Mukesh Palotra</td>
                <td class="d-flex"><a href="post-employee-details" class="view-btn">View</a></td>
              </tr>
              <tr>
                <td><input type="checkbox" id="customcheck3" name="customcheck3"></td>
                <td>#000103</td>
                <td>Bhanu Singh</td>
                <td>Senior</td>
                <td>React Native Developer</td>
                <td>Priya Thakur</td>
                <td class="d-flex"><a href="post-employee-details" class="view-btn">View</a></td>
              </tr>
              <tr>
                <td><input type="checkbox" id="customcheck4" name="customcheck4"></td>
                <td>#000104</td>
                <td>Ravi Varma</td>
                <td>Senior</td>
                <td>Web Developer</td>
                <td>Ashok Sharma</td>
                <td class="d-flex"><a href="post-employee-details" class="view-btn">View</a></td>
              </tr>
              <tr>
                <td><input type="checkbox" id="customcheck5" name="customcheck5"></td>
                <td>#BCS106</td>
                <td>Ayushi Jamre</td>
                <td>Junior</td>
                <td>Content Developer</td>
                <td>Ashok Sharma</td>
                <td class="d-flex"><a href="post-employee-details" class="view-btn">View</a></td>
              </tr>                             
            </tbody>
          </table>
          <div class="pagination-main d-flex">
            <h2>Showing 1 to 7 of 20 entries</h2>
            <div class="pagination ml-auto">
              <ul> <!--pages or li are comes from javascript --> </ul>
            </div>
            </div>
        </div>
      </div><!--- Employeer View Page ----->

    </div> <!--- Main Container Close ----->
 
  <!--- Wapper Close -----> 
  
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/admin/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="assets/admin/js/bootstrap.min.js"></script>  

    <script src="assets/admin/js/pagination-script.js"></script>

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

@endsection