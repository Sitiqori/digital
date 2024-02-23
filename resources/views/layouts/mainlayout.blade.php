<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
     <div class="main d-flex flex-column justify-content-between">
          <div class="body-content h-100">
              <div class="row g-0 h-100">
                    <div class="sidebar col-lg-1 collapse d-lg-block  justify-content-center" id="navbarTogglerDemo02">
                         <div class="kepala">
                              <h6 class="logo"></h6>
                         </div>
                              <a href="home" >Home</a>
                              <a href="book" >Books</a>
                              <a href="rent">Rent</a>
                              <a href="library">Library</a>
                    </div>

                    {{-- CONTEN YG KE HAL2 NYA--------------------------------------- --}}
                    <div class="content col-lg-11 d-flex">
                         @yield('conten')
                    </div>
              </div>
          </div>

      </div>





     


     {{-- end ------------------------------------------------------------------- --}}
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>