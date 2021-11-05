<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Page (HTML And CSS)</title>
  <link rel="stylesheet" href="assets/style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./Login Form.css" />
  </head>
  <body>
    <div class="container">
      <a href="{{ route('register') }}"><button>Register</button></a>  
      <form class="form-1" action="{{ route('login') }}" method="POST">
        @csrf
        <h1>Login</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <span>Forgot Password</span>
        <p>
          <a href="{{ route('login') }}"><button>Login</button></a>
      </form>  
        </p>
      
    </div>
  </body>
</html>
<!-- partial -->
  
</body>
</html>
