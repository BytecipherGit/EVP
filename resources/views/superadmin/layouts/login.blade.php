<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="icon" href="/assets/superassets/images/logo-icon.png">
  <link rel="stylesheet" href="/assets/superassets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/superassets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/superassets/css/login.css">

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
  
  <div class="cover-main d-flex">
    <div class="container-fluid">
      <div class="row">
             @yield('employee-varification')
             @yield('forgot-password')
             @yield('reset-password')
        <div class="col-lg-6">
          <div class="cover-box-img">
            <img src="/assets/superassets/images/login-bg.jpg">
          </div>
        </div>
      </div>
    </div>  
  </div> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      window.jQuery || document.write('<script src="../../assets/superassets/js/jquery.min.js"><\/script>')
    </script>
    <script src="/assets/superassets/js/bootstrap.min.js"></script>

    
</body>

</html>