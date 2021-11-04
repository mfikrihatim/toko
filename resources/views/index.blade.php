<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap Responsive Sidebar</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="assets/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Logo</h2>
    </div>
    <ul class="sidebar-nav">
      <li class="active">
        <a href="#"><i class="fa fa-home"></i>Home</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-plug"></i>Plugins</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-user"></i>Users</a>
      </li>
    </ul>
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </nav>
  </div>


  @yield('content')
  <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title">Test</h2>
          <p>Lorem ipsum...</p>
        </div>
      </div>
  </section>

</div>
<!-- partial -->
  <script  src="assets/script.js"></script>

</body>
</html>
