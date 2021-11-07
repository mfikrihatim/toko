<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>TOKO</title>
  {{-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> --}}
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="wrapper">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Logo</h2>
    </div>
    <ul class="sidebar-nav">
      <li >
        <a href="{{ route('index') }}"><i class="fa fa-home"></i>Home</a>
      </li>
      <li>
        <a href="{{ route('product.index') }}"><i class="fa fa-plug"></i>Product</a>
      </li>
      <li>
        <a href="{{ route('user.index') }}"><i class="fa fa-user"></i>Users</a>
      </li>
      <li>
        <a href="{{ route('new_order.index') }}"><i class="fa fa-user"></i>New Order</a>
      </li>
      <li>
        <a href="{{ route('order.index') }}"><i class="fa fa-user"></i>Order</a>
      </li>
      <li>
        <a href="#" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
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
  {{-- <section id="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="content-title">Test</h2>
          <p>Lorem ipsum...</p>
        </div>
      </div>
  </section> --}}

</div>
<!-- partial -->
  <script  src="{{ asset('assets/script.js') }}"></script>

</body>
</html>
