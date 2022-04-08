
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
  <meta name="keywords" content="blank, starter">

  <title>Blank page &mdash; TheAdmin</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">


  <!-- Styles -->
  <link href="assets/css/core.min.css" rel="stylesheet">
  <link href="assets/css/app.min.css" rel="stylesheet">
  <link href="assets/css/style.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">
</head>

<body>

  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner-dots">
      <span class="dot1"></span>
      <span class="dot2"></span>
      <span class="dot3"></span>
    </div>
  </div>


  <!-- Sidebar -->
  <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
      <a class="logo-icon" href="#"><img src="https://thumbs.dreamstime.com/b/hospital-building-vector-icon-ambulance-illustration-symbol-logo-aid-sign-hospital-building-vector-icon-ambulance-illustration-156643746.jpg" alt="logo icon"></a>
      <span class="logo">
       Hospital
     </span>
     <span class="sidebar-toggle-fold"></span>
   </header>
   <nav class="sidebar-navigation">
  @include('layout.admin-sidebar')

</nav>
   </aside>





<main class="main-container">
       <div id="app">
        @yield('content')
       </div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-center text-md-left">Copyright © 2021 <a href="http://artf4.com">Nur</a></p>
                </div>

            </div>
        </footer>
        <!-- END Footer -->
    </main>
<script src="assets/js/core.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/script.min.js"></script>

</body>
</html>
