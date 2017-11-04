<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>Basic website</title>
  <link rel="stylesheet" href="/basicwebsite/public/css/app.css">
  
</head>
<body>

  @include('inc.navbar')
  
  <div class="container">

     @if(Request::is('/'))
     @include('inc.showcase')
     @endif
     
     <div class="row">
   
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
   
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
   
     </div>

  </div>
  
  <footer id="footer" class="text-center">
    <p>Copyright &copy; 2017</p>
  </footer>

</body>
</html>