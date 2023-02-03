<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="icon" href="/assets/company2/images/logo-icon.png">
  <link rel="stylesheet" href="/assets/company2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/company2/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/company2/css/my-css.css">  

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script src="/assets/company2/js/jquery.min.js"></script>

</head>

<body>
@yield('content')

  <!-- Modal Email verified-->
  <div class="modal fade custom-modal" id="seccess-veri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="/assets/company2/images/email-verify.png">
          <h2>Registration completed successfully</h2>
          <!-- <p>Please check your rigistered email for email verification</p> -->
          <a href="/company-login">Login</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>