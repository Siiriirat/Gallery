<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

  <title>Gallery</title>
  <style type="text/css">
    .nav-example{
      top: -300px;
    }
    .navbar-inverse{
      position: fixed;
      top: 0;
      width: 100%;
      background: #333;
      z-index: 1000;
      transition: all 0.8s ease-out;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  	<a class="navbar-brand" href="{{ url('Homepage')}}"> <img class="logo" src="http://icons.iconarchive.com/icons/calebamesbury/classic-american-cars/1024/Muscle-Car-Pontiac-GTO-icon.png" height="40"> Car Gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
  <a class="nav-link" href="{{ url('Homepage') }}">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item"><a class="nav-link" href="{{ url('AddPhoto') }}"> AddPhoto </a></li>
  <li class="nav-item"><a class="nav-link" href="{{ url('HidePhoto') }}"> HidePhoto </a></li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-example">
  	<a class="navbar-brand" href="{{ url('Homepage') }}"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> Car Gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar2">
      <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
  <a class="nav-link" href="{{ url('Homepage') }}">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item"><a class="nav-link" href="{{ url('AddPhoto') }}"> AddPhoto </a></li>
  <li class="nav-item"><a class="nav-link" href="{{ url('HidePhoto') }}"> HidePhoto </a></li>

      </ul>
    </div>
  </nav>

  @yield('content')
  <br><br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if(scroll >= 150 ) {
    $(".nav-example").addClass("navbar-inverse");
  }
  else {
    $(".nav-example").removeClass("navbar-inverse");
  }
});
</script>
</body>
</html>
